<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Perusahaan extends Ci_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mperusahaan');
		$this->mperusahaan = new MPerusahaan();
        
	}

	function index() {
		$this->list_perusahaan();
	}

	/** List All Pelanggan
     *
     * @param string Perusahaan slug
     */

	function list_perusahaan() {
		$data['PageTitle'] = "Perusahaan";
		$data['listPerusahaan'] = $this->mperusahaan->getAllPerusahaan();
		$data['message'] = getMessage($this->uri->segment(4));
		$this->load->admin_template('admin/list_perusahaan', $data);
	}


    /**
     * For Insert View
     * And execute insert
     */

	public function insert() {
        $data['PageTitle'] = "Admin Insert Perusahaan";
        $data['action'] = 'insert';
        $data['cat'] = 'perusahaan';
        $post = $this->input->post();

        if ($post) {
        	
            $data = array(  'nama_perusahaan' => $post['nama_perusahaan'],
                            'username' => $post['username'],
                            'password' => md5($post['password']),
                            'id_kategori' => $post['id_kategori'],
                            'nama_produk' => $post['nama_produk']
                            );
            //print_r($data);exit;
            $insertPerusahaanId = $this->mperusahaan->insertPerusahaan($data);
            redirect(site_url() . 'admin/perusahaan/list_perusahaan/add_success');
        }
        $data['listKategori'] = $this->mperusahaan->getAllKategori();
        //print_r($data['listKategori']);exit;
        $this->load->admin_template('admin/perusahaan', $data);
    }

	/**
     * For Edit / Update Perusahaan
     *
     * @param int $id
     */
    public function update($id) {
        $data['PageTitle'] = "Update Perusahaan";
        $data['action'] = 'update';
        $data['cat'] = 'perusahaan';
        $post = $this->input->post();
        if ($post) {
            //print_r($post);
            $this->mperusahaan->updatePerusahaan($post, $post['id_perusahaan']);
            redirect(site_url() . 'admin/perusahaan/list_perusahaan/update_success');
        } else {
            $data['perusahaan'] = $this->mperusahaan->getPerusahaan($id);
            $data['listKategori'] = $this->mperusahaan->getAllKategori();
            //print_r($data['perusahaan']);exit;
            if($this->uri->segment(5)=="update_success")
                $data['message']="<div class='alert alert-success'>Data berhasil di Update</div>";
                else
                $data['message']='';
            //print_r($data['perusahaan']);exit;
            $this->load->admin_template('admin/perusahaan', $data);
        }
    }


	/**
     * For Delete Pelanggan
     *
     * @param int $id
     */

	function delete($id){
        $this->mperusahaan->delete($id);
        redirect(site_url() .'admin/perusahaan/list_perusahaan/delete_success');
    }
}

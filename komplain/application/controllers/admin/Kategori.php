<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Kategori extends Ci_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mperusahaan');
		$this->mperusahaan = new MPerusahaan();
        
	}

	function index() {
		$this->list_Kategori();
	}

	/** List All Kategori
     *
     * @param string Pekerjaan slug
     */

	function list_kategori() {
		$data['PageTitle'] = "Kategori";
		$data['listKategori'] = $this->mperusahaan->getAllKategori();
		$data['message'] = getMessage($this->uri->segment(4));
		$this->load->admin_template('admin/list_kategori', $data);
	}


    /**
     * For Insert View
     * And execute insert
     */

	public function insert() {
        $data['title'] = "Admin Insert Kategori";
        $data['action'] = 'insert';
        $data['cat'] = 'kategori';
        $post = $this->input->post();

        if ($post) {
        	//print_r($post);
            $insertKategoriId = $this->mperusahaan->insertKategori($post);
            redirect(site_url() . 'admin/kategori/list_kategori/add_success');
        }
        
        $this->load->admin_template('admin/kategori', $data);
    }

	/**
     * For Edit / Update Pekerjaan
     *
     * @param int $id
     */
    public function update($id) {
        $data['title'] = "Admin Update Kategori";
        $data['action'] = 'update';
        $data['cat'] = 'kategori';
        $post = $this->input->post();
        if ($post) {
            //print_r($post);
            $this->mperusahaan->updateKategori($post, $post['id_kategori']);
            redirect(site_url() . 'admin/kategori/list_kategori/update_success');
        } else {
            $data['Kategori'] = $this->mperusahaan->getKategori($id);
            if($this->uri->segment(5)=="update_success")
                $data['message']="<div class='alert alert-success'>Data berhasil di Update</div>";
                else
                $data['message']='';
            $data['kategori'] = $this->mperusahaan->getKategori($id);
            $this->load->admin_template('admin/kategori', $data);
        }
    }


	/**
     * For Delete Kategori
     *
     * @param int $id
     */

	function delete($id){
        $this->mperusahaan->deletekategori($id);
        redirect(site_url() .'admin/kategori/list_kategori/delete_success');
    }
}

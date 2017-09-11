<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Komplain extends Ci_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('mkomplain');
		$this->load->model('mperusahaan');
		$this->mkomplain = new MKomplain();
        
	}

	function index() {
		$this->list_komplain();
	}

	/** List All komplain
     *
     * @param string Pekerjaan slug
     */

	function list_komplain() {
		$data['PageTitle'] = "Komplain";
		$data['listKomplain'] = $this->mkomplain->getAllkomplain();
		$data['message'] = getMessage($this->uri->segment(4));
		$this->load->admin_template('admin/list_komplain', $data);
	}


    /**
     * For Insert View
     * And execute insert
     */

	public function insert() {

        $data['listKategori']    = $this->mperusahaan->getAllKategori();
        $data['listPerusahaan']  = $this->mperusahaan->getAllPerusahaan();
        $data['PageTitle'] = "Insert Komplain";
        $data['action'] = 'insert';
        $data['cat'] = 'komplain';
        $post = $this->input->post();

        if ($post) {
        	//print_r($post);
            $insertKomplainId = $this->mkomplain->insert($post);
            redirect(site_url() . 'admin/komplain/list_komplain/add_success');
        }
        $this->load->admin_template('admin/komplain', $data);
    }

	/**
     * For Edit / Update Pekerjaan
     *
     * @param int $id
     */
    public function update($id) {
        $data['PageTitle'] = "Update Komplain";
        $data['action'] = 'update';
        $data['cat'] = 'komplain';
        $post = $this->input->post();
        if ($post) {
            //print_r($post);
            $this->mkomplain->update($post, $post['id_komplain']);
            redirect(site_url() . 'admin/komplain/list_komplain/update_success');
        } else {
            $data['komplain'] = $this->mkomplain->getkomplain($id);
            if($this->uri->segment(5)=="update_success")
                $data['message']="<div class='alert alert-success'>Data berhasil di Update</div>";
                else
                $data['message']='';
            //print_r($data['komplain']);exit;
            $this->load->admin_template('admin/komplain', $data);
        }
    }


	/**
     * For Delete komplain
     *
     * @param int $id
     */

	function delete($id){
        $this->mkomplain->delete($id);
        redirect(site_url() .'admin/komplain/list_komplain/delete_success');
    }
}

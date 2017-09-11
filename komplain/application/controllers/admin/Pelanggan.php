<?php
if (! defined('BASEPATH'))
	exit('No direct script access allowed');

class Pelanggan extends Ci_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mpelanggan');
		$this->mpelanggan = new MPelanggan();
        
	}

	function index() {
		$this->list_pelanggan();
	}

	/** List All pelanggan
     *
     * @param string Pekerjaan slug
     */

	function list_pelanggan() {
		$data['PageTitle'] = "Pekerjaan";
		$data['listPelanggan'] = $this->mpelanggan->getAllPelanggan();
		$data['message'] = getMessage($this->uri->segment(4));
		$this->load->admin_template('admin/list_pelanggan', $data);
	}


    /**
     * For Insert View
     * And execute insert
     */

	public function insert() {
        $data['title'] = "Admin Insert Pelanggan";
        $data['action'] = 'insert';
        $data['cat'] = 'pelanggan';
        $post = $this->input->post();

        if ($post) {
        	//print_r($post);
            $insertPelangganId = $this->mpelanggan->insertPelanggan($post);
            redirect(site_url() . 'admin/pelanggan/list_pelanggan/add_success');
        }
        $this->load->admin_template('admin/pelanggan', $data);
    }

	/**
     * For Edit / Update Pekerjaan
     *
     * @param int $id
     */
    public function update($id) {
        $data['title'] = "Admin Update Pelanggan";
        $data['action'] = 'update';
        $data['cat'] = 'pelanggan';
        $post = $this->input->post();
        if ($post) {
            //print_r($post);
            $this->mpelanggan->updatePelanggan($post, $post['id_pelanggan']);
            redirect(site_url() . 'admin/pelanggan/list_pelanggan/update_success');
        } else {
            $data['pelanggan'] = $this->mpelanggan->getPelanggan($id);
            if($this->uri->segment(5)=="update_success")
                $data['message']="<div class='alert alert-success'>Data berhasil di Update</div>";
                else
                $data['message']='';
            //print_r($data['pelanggan']);exit;
            $this->load->admin_template('admin/pelanggan', $data);
        }
    }


	/**
     * For Delete pelanggan
     *
     * @param int $id
     */

	function delete($id){
        $this->mpelanggan->delete($id);
        redirect(site_url() .'admin/pelanggan/list_pelanggan/delete_success');
    }
}

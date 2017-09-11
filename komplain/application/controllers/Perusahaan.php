<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('mperusahaan');
			$this->mperusahaan = new MPerusahaan();
			$this->load->model('mkomplain');
			$this->mkomplain = new Mkomplain();
		
		}

	function dashboard(){
                
        $data['PageTitle'] = "Dashboard";
        $data['nama_perusahaan'] = $this->session->userdata('username');
        $data['list_komplain'] = $this->mkomplain->getAllKomplain();
        
        $this->load->view('perusahaan/dashboard', $data);
    }

    function insert_keluhan(){

    	$post = $this->input->post();

    	if ($post) {
            $insert = $this->mkomplain->insert($post);
            echo "Anda berhasil menyampaikan keluhan " ;
            echo anchor('pelanggan/dashboard','Back') ;
        }
        
    }

    function komplain($id){
        $data['title'] = "Detail";
        $data['nama_perusahaan'] = $this->session->userdata('username');
        $data['komplain'] = $this->mkomplain->getKomplain($id);
        $data['komentar'] = $this->mkomplain->show_komentar($id)->result();
        $this->load->view('perusahaan/detail_komplain', $data);

    }

    function insert_komentar(){

        $post = $this->input->post();
        $id_komplain = $post['id_komplain'];
        $this->mkomplain->insert_komentar();
        redirect('perusahaan/komplain/'.$id_komplain);
        
    }

	
}
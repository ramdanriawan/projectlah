<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelanggan extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('mpelanggan');
			$this->mpelanggan = new Mpelanggan();
            $this->load->model('mkomplain');
			$this->load->model('mperusahaan');
			$this->mkomplain = new Mkomplain();
		
		}

	function dashboard(){
                
        $data['PageTitle'] = "Dashboard";
        $data['nama'] = $this->session->userdata('username');
        //echo $data['nama'];exit;
        $this->load->view('pelanggan/dashboard', $data);
    }

    function insert(){
                
        $data['PageTitle']       = "Dashboard";
        $data['nama']            = $this->session->userdata('username');
        $data['listKategori']    = $this->mperusahaan->getAllKategori();
        $data['listPerusahaan']  = $this->mperusahaan->getAllPerusahaan();

        //echo $data['nama'];exit;
        $this->load->view('pelanggan/insert_keluhan', $data);
    }

    function insert_keluhan(){

    	$post = $this->input->post();

    	if ($post) {
            $insert = $this->mkomplain->insert($post);
            echo "Anda berhasil menyampaikan keluhan " ;
            echo anchor('pelanggan/dashboard','Back') ;
        }
        
    }

    function insert_komentar(){

        $post = $this->input->post();
        //print_r($post);exit;
        $id_komplain = $post['id_komplain'];
        $this->mkomplain->insert_komentar();
        redirect('site/komplain/'.$id_komplain);
        
    }

	
}
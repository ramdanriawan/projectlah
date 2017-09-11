<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('mperusahaan');
			$this->mperusahaan = new MPerusahaan();
			$this->load->model('mkomplain');
			$this->mkomplain = new Mkomplain();
		
		}

	function index(){
                
        $data['PageTitle'] = "Home";
        $data['list_komplain'] = $this->mkomplain->getLastKomplain5();
        
        $this->load->view('home', $data);
    }

    function insert(){
        $data['title'] = "Insert Komplain";
        $data['nama'] = $this->session->userdata('username');
        
        $post = $this->input->post();
        
        if ($post) {

            print_r($post);exit;

            $insert = $this->mkomplain->insert($post);
            redirect('pelanggan/dashboard');
        }
        $data['listKategori'] = $this->mperusahaan->getAllKategori();
        $data['listPerusahaan'] = $this->mperusahaan->getAllPerusahaan();        
        $this->load->view('pelanggan/insert_keluhan', $data);

    }

    function detail($id){
        $data['title'] = "Detail Komplain";
        $data['komplain'] = $this->mkomplain->getKomplain($id);
    
        $this->load->view('perusahaan/detail_komplain', $data);

	}

	function lihat_komplain(){
                
        $data['PageTitle'] = "Lihat Komplain";
        //$data['nama_perusahaan'] = $this->session->userdata('username');
        $data['list_komplain'] = $this->mkomplain->getAllKomplain();
        
        $this->load->view('pelanggan/list_komplain', $data);
    }

    function komplain($id){
        $data['title'] = "Detail Komplain";
        $data['komplain'] = $this->mkomplain->getKomplain($id);
        $data['komplain'] = $this->mkomplain->getKomplain($id);
        $data['komentar'] = $this->mkomplain->show_komentar($id)->result();
    
        $this->load->view('pelanggan/detail_komplain', $data);

    }


}
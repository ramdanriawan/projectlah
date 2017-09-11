<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('mpelanggan');
			$this->mpelanggan = new MPelanggan();
		
		}

	function index(){
                
        $data['PageTitle'] = "Registrasi";
        
        $this->load->view('user/registrasi', $data);
    }

    function insert(){

    	$post = $this->input->post();

    	if ($post) {

            $data = array( 	'nama' => $post['nama'],
    						'username' => $post['username'],
    						'password' => md5($post['password']),
    						'alamat' => $post['alamat'],
    						'email' => $post['email'],
    						'ktp' => $post['ktp']
    						);
    		$insertId = $this->mpelanggan->insertPelanggan($data);
            redirect(site_url() . '/login');
    	}

    }

	
}
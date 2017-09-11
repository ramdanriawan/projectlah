<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi_perusahaan extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('mperusahaan');
			$this->mperusahaan = new MPerusahaan();
		
		}

	function index(){
                
        $data['PageTitle'] = "Registrasi";
        
        $this->load->view('user/registrasi_perusahaan', $data);
    }

    function insert(){

    	$post = $this->input->post();

    	if ($post) {
    		
    		$data = array( 	'nama_perusahaan' => $post['nama_perusahaan'],
    						'username' => $post['username'],
    						'password' => md5($post['password']),
    						'kategori' => $post['kategori']
    						);
    		$insertId = $this->mperusahaan->insertPerusahaan($data);
            redirect(site_url() . '/login/perusahaan');
    	}

    }

	
}
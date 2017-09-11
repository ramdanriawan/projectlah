<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('muser');
			$this->muser = new MUser();
		
		}

	function index(){
                
        $data['PageTitle'] = "Login";
        
        $this->load->view('admin/login', $data);
    }

    function proses(){
        
        $post = $this->input->post();

        if(empty($post)){
            $this->session->set_flashdata('message','Username dan password harus diisi');
            redirect('login');
        }else {
        	# code...
            $username=$this->input->post('username');
            $password=$this->input->post('password');

            $cek=$this->muser->cek($username,$password);

            if ($cek->num_rows() == 1) {
            foreach ($cek->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['username'] = $sess->username;
                $sess_data['nama'] = $sess->nama;
                $this->session->set_userdata($sess_data);
                
            }
                $this->session->set_flashdata('message','Selamat datang di web komplain');
                redirect('admin/dashboard');
             
        	} else{
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('admin');
            }
        }
    }


    function logout() {
        $this->session->unset_userdata('username');
        redirect('admin');
    }

	
}
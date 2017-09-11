<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('mpelanggan');
			$this->mpelanggan = new MPelanggan();

            $this->load->model('mperusahaan');
            $this->mperusahaan = new MPerusahaan();
		
		}

	function index(){
                
        $data['PageTitle'] = "Login";
        
        $this->load->view('user/login', $data);
    }

    function perusahaan(){
                
        $data['PageTitle'] = "Login";
        
        $this->load->view('user/login_perusahaan', $data);
    }

    function proses(){
        
        $post = $this->input->post();

        if(empty($post)){
            $this->session->set_flashdata('message','Username dan password harus diisi');
            redirect('login');
        }else {
        	# code...
            $username=$this->input->post('username');
            $password=md5($this->input->post('password'));

            $cek=$this->mpelanggan->cek($username,$password);

            if ($cek->num_rows() == 1) {
            foreach ($cek->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id_pelanggan'] = $sess->id_pelanggan;
                $sess_data['username'] = $sess->username;
                $sess_data['nama'] = $sess->nama;
                $sess_data['alamat'] = $sess->alamat;
                $sess_data['email'] = $sess->email;
                $sess_data['ktp'] = $sess->ktp;
                $this->session->set_userdata($sess_data);
                
            }
                $this->session->set_flashdata('message','Selamat datang di web komplain');
                redirect('pelanggan/dashboard');
             
        	} else{
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('login');
            }
        }
    }

    function proses_perusahaan(){
        
        $post = $this->input->post();

        if(empty($post)){
            $this->session->set_flashdata('message','Username dan password harus diisi');
            redirect('login/perusahaan');
        }else {
            # code...
            $username=$this->input->post('username');
            $password=md5($this->input->post('password'));

            $cek=$this->mperusahaan->cek($username,$password);

            if ($cek->num_rows() == 1) {
            foreach ($cek->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id_perusahaan'] = $sess->id_perusahaan;
                $sess_data['nama_perusahaan'] = $sess->nama_perusahaan;
                $sess_data['username'] = $sess->username;
                $sess_data['kategori'] = $sess->kategori;
                $this->session->set_userdata($sess_data);
                
            }
                $this->session->set_flashdata('message','Selamat datang di web komplain');
                redirect('perusahaan/dashboard');
             
            } else{
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('login/perusahaan');
            }
        }
    }

    function logout_pelanggan() {
        $this->session->unset_userdata('username');
        redirect('');
    }

    function logout_perusahaan() {
        $this->session->unset_userdata('username');
        redirect('');
    }

	
}
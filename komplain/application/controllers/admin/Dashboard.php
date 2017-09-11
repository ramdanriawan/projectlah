<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Ci_Controller {

	public function __construct(){
			parent::__construct();

			if(!$this->session->userdata('username')){
            redirect('admin');
        }
		
		}

	function index(){
                
        $data['PageTitle'] = "Dashboard";
        
        $this->load->admin_template('admin/dashboard', $data);
    }

	
}
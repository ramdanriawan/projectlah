<?php 


class Login extends ci_controller{

	public function index ()
	{
		$this->load->view('login');
	}

	public function proses(){
		$submit = $this->input->post("login");
		$username = $this->db->escape_str($this->input->post("username"));
		$password = $this->db->escape_str($this->input->post("password"));
		$level    = $this->db->escape_str($this->input->post("level"));

	
				if($level ==1){

					$query=$this->db->query("SELECT * FROM tbl_admin where username='$username' and password='$password' and level=1 ");
					if($query->num_rows() > 0){
					$row = $query->row_array();
														
					$this->session->set_userdata("login",true);
					$this->session->set_userdata("username",$row["username"]);
					$this->session->set_userdata("password",$row["password"]);
					$this->session->set_userdata("level",$row["level"]);
					$this->session->set_userdata("id_admin",$row["id_admin"]);
					
					// $this->session->set_userdata("email",$row["email"])
						redirect('home','refresh');

					}else{
						redirect('login','refresh');

					}

				}elseif($level ==2){

					$query=$this->db->query("SELECT * FROM tbl_admin where username='$username' and password='$password' and level=2 ");
					if($query->num_rows() > 0){
					$row = $query->row_array();
														
					$this->session->set_userdata("login",true);
					$this->session->set_userdata("username",$row["username"]);
					$this->session->set_userdata("password",$row["password"]);
					$this->session->set_userdata("level",$row["level"]);
					$this->session->set_userdata("id_admin",$row["id_admin"]);
					// $this->session->set_userdata("email",$row["email"])
						redirect('home','refresh');
					
					
					}else{
						redirect('login','refresh');
					}
				}else{
						redirect('login','refresh');
						
				}					
	}

	function logout(){
			$this->session->sess_destroy();
			redirect('home','refresh');
	}
}

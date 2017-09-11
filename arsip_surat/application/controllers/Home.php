<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {



	public function index()
	{
		$data['title']     = 'home';
		$data['content']   = 'home';
		$this->load->view('index',$data);
	}

/*USER*/
	public function data_user(){
		$data['data']      = $this->db->query("SELECT * FROM tbl_admin");
		$data['title']     = 'Data User';
		$data['content']   = 'data_user';
		$this->load->view('index',$data);
	}

	public function tambah_user()
	{
		$data['title']     = 'Tambah User';
		$data['content']   = 'tambah_user';
		$this->load->view('index',$data);	
	}

	public function proses_tambah_user(){
		$nip    = $this->input->post('nip');
		$jabatan      = $this->input->post('jabatan');
		$nama      = $this->input->post('nama');
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');
		$level     = $this->input->post('level');

		$data = array('nama'        => $nama ,
					  'username'    => $username,
					  'password'    => $password,
					  'nip'         => $nip,
					  'jabatan'     => $jabatan,
					  'level'       => $level
		 );

		$this->db->insert('tbl_admin',$data);
		redirect('home/data_user');
	}

	public function edit_user($id_admin)
	{	
		$data['data']      = $this->db->query("SELECT * FROM tbl_admin where id_admin='$id_admin'");
		$data['title']     = 'Edit User';
		$data['content']   = 'edit_user';
		$this->load->view('index',$data);	
	}

	public function proses_edit_user(){
		$id_admin  = $this->input->post('id_admin');
		$nip    = $this->input->post('nip');
		$jabatan      = $this->input->post('jabatan');
		$nama      = $this->input->post('nama');
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');
		$level     = $this->input->post('level');

		$data = array('nama'        => $nama ,
					  'username'    => $username,
					  'password'    => $password,
					  'nip'         => $nip,
					  'jabatan'     => $jabatan,
					  'level'       => $level
		 );

		$this->db->where('id_admin',$id_admin);
		$this->db->update('tbl_admin',$data);
		redirect('home/data_user');
	}

	public function hapus_user($id_admin)
	{	
		$this->db->query("DELETE from tbl_admin where id_admin='$id_admin'");
		redirect('home/data_user');
		
	}

	/*JENIS*/

	public function data_jenis(){
		$data['data']      = $this->db->query("SELECT * FROM tbl_jenis");
		$data['title']     = 'Data Jenis';
		$data['content']   = 'data_jenis';
		$this->load->view('index',$data);
	}

	public function tambah_jenis()
	{
		$data['title']     = 'Tambah Jenis';
		$data['content']   = 'tambah_jenis';
		$this->load->view('index',$data);	
	}

	public function proses_tambah_jenis(){
		$jenis     = $this->input->post('jenis');
		$data = array('jenis'        => $jenis );

		$this->db->insert('tbl_jenis',$data);
		redirect('home/data_jenis');
	}

	public function edit_jenis($id_jenis)
	{	
		$data['data']      = $this->db->query("SELECT * FROM tbl_jenis where id_jenis='$id_jenis'");
		$data['title']     = 'Edit Jenis';
		$data['content']   = 'edit_jenis';
		$this->load->view('index',$data);	
	}

	public function proses_edit_jenis(){
		$id_jenis  = $this->input->post('id_jenis');
		$jenis     = $this->input->post('jenis');
		$data = array('jenis'        => $jenis );

		$this->db->where('id_jenis',$id_jenis);
		$this->db->update('tbl_jenis',$data);
		redirect('home/data_jenis');
	}

	public function hapus_jenis($id_jenis)
	{	
		$this->db->query("DELETE from tbl_jenis where id_jenis='$id_jenis'");
		redirect('home/data_jenis');
		
	}

	

	/*surat_keluar*/

	public function surat_keluar(){
		$data['data']      = $this->db->query("SELECT * FROM tbl_surat_keluar left join (tbl_jenis,tbl_admin) on tbl_surat_keluar.id_jenis=tbl_jenis.id_jenis and tbl_surat_keluar.id_admin=tbl_admin.id_admin");
		$data['title']     = 'Data Surat Keluar';
		$data['content']   = 'surat_keluar';
		$this->load->view('index',$data);
	}

	public function tambah_surat_keluar(){
		$data['title']     = 'Tambah Data Surat Keluar';
		$data['content']   = 'tambah_surat_keluar';
		$this->load->view('index',$data);
	}

	public function proses_tambah_surat_keluar(){
		$id_kategori            =$this->input->post('id_kategori');
		$no_surat		        =$this->input->post('no_surat');
		$tgl_surat		        =$this->input->post('tgl_surat');
		$no_asm		            =$this->input->post('no_asm');
		$prihal		            =$this->input->post('prihal');
		$id_jenis		        =$this->input->post('id_jenis');
		$id_admin       		=$this->input->post('id_admin');
		$tanggal_penyerahan		=$this->input->post('tanggal_penyerahan');
		$lampiran		        =$this->input->post('lampiran');
		/*$m_file 		        =$_FILES['userfile']['name'];

				$config['upload_path']          = 'myfile';
                $config['allowed_types']        = 'docx|pdf|png|JPG|jpeg';
			 	$this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        ?>
                        <script type="text/javascript">
                        	alert("Gagal Upload foto ,max 3 MB");
                        </script>

                <?php
                }
                else
                {
                        $datas = array('upload_data'         => $this->upload->data());          */
                        $data  = array('no_surat' 		     => $no_surat ,
                        			   'id_kategori'           => $id_kategori,
                        			   'tgl_surat'           => $tgl_surat,
                        			   'no_asm'              => $no_asm,
                        			   'prihal'              => $prihal,
                        			   'id_jenis'            => $id_jenis,
                        			   'id_admin'            => $id_admin,
                        			   'tanggal_penyerahan'  => $tanggal_penyerahan,
                        			   'lampiran'            => $lampiran
                         );
               			
               			$this->db->insert('tbl_surat_keluar',$data);
               			redirect('home/surat_keluar');
               // }
				
	}

	public function edit_surat_keluar($id_surat_keluar){
		$data['data']     = $this->db->query("SELECT * FROM tbl_surat_keluar where id_surat_keluar='$id_surat_keluar'");
		$data['title']  ='edit surat keluar';
		$data['content']  ='edit_surat_keluar';
		$this->load->view('index',$data); 
	}


	public function proses_edit_surat_keluar(){
		$id_surat_keluar            =$this->input->post('id_surat_keluar');
		$id_kategori            =$this->input->post('id_kategori');
		$no_surat		        =$this->input->post('no_surat');
		$tgl_surat		        =$this->input->post('tgl_surat');
		$no_asm		            =$this->input->post('no_asm');
		$prihal		            =$this->input->post('prihal');
		$id_jenis		        =$this->input->post('id_jenis');
		$id_admin       		=$this->input->post('id_admin');
		$tanggal_penyerahan		=$this->input->post('tanggal_penyerahan');
		$lampiran		        =$this->input->post('lampiran');
		/*$m_file 		        =$_FILES['userfile']['name'];

				$config['upload_path']          = 'myfile';
                $config['allowed_types']        = 'docx|pdf|png|JPG|jpeg';
			 	$this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        ?>
                        <script type="text/javascript">
                        	alert("Gagal Upload foto ,max 3 MB");
                        </script>

                <?php
                }
                else
                {
                        $datas = array('upload_data'         => $this->upload->data());          */
                        $data  = array('no_surat' 		     => $no_surat ,
                        			   'id_kategori'           => $id_kategori,
                        			   'tgl_surat'           => $tgl_surat,
                        			   'no_asm'              => $no_asm,
                        			   'prihal'              => $prihal,
                        			   'id_jenis'            => $id_jenis,
                        			   'id_admin'            => $id_admin,
                        			   'tanggal_penyerahan'  => $tanggal_penyerahan,
                        			   'lampiran'            => $lampiran
                         );
               			
               			$this->db->where('id_surat_keluar',$id_surat_keluar);
               			$this->db->update('tbl_surat_keluar',$data);
               			redirect('home/surat_keluar');
               // }
				
	}

	public function hapus_surat_keluar($id_surat_keluar){
		$this->db->query("DELETE FROM tbl_surat_keluar where id_surat_keluar='$id_surat_keluar'");
        redirect('home/surat_keluar');

	}


	/*surat_masuk*/

	
	public function surat_masuk(){
		$data['data']      = $this->db->query("SELECT * FROM tbl_surat_masuk");
		$data['title']     = 'Data Surat Masuk';
		$data['content']   = 'surat_masuk';
		$this->load->view('index',$data);
	}

	public function tambah_surat_masuk(){
		$data['title']     = 'Tambah Data Surat Masuk';
		$data['content']   = 'tambah_surat_masuk';
		$this->load->view('index',$data);
	}

	public function proses_tambah_surat_masuk(){
		$id_kategori            =$this->input->post('id_kategori');
		$no_tgl                 =$this->input->post('no_tgl');
		$no_delegasi            =$this->input->post('no_delegasi');
		$tgl_terima		        =$this->input->post('tgl_terima');
		$proses_hari            =$this->input->post('proses_hari');
		$asal_surat		        =$this->input->post('asal_surat');
		$pelaksana		        =$this->input->post('pelaksana');
		/*$m_file 		        =$_FILES['userfile']['name'];

				$config['upload_path']          = 'myfile';
                $config['allowed_types']        = 'docx|pdf|png|JPG|jpeg';
			 	$this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        ?>
                        <script type="text/javascript">
                        	alert("Gagal Upload foto ,max 3 MB");
                        </script>

                <?php
                }
                else
                {
                        $datas = array('upload_data'         => $this->upload->data());          */
                        $data  = array('no_delegasi' 		     => $no_delegasi ,
                        			   'id_kategori'           => $id_kategori,
                        			   'tgl_terima'           => $tgl_terima,
                        			   'proses_hari'              => $proses_hari,
                        			   'no_tgl'              => $no_tgl,
                        			   'asal_surat'            => $asal_surat,
                        			   'pelaksana'            => $pelaksana
                        			  );
               			
               			$this->db->insert('tbl_surat_masuk',$data);
               			redirect('home/surat_masuk');
               // }
				
	}

	public function proses_edit_surat_masuk(){
		$id_surat_masuk         =$this->input->post('id_surat_masuk');
		$id_kategori            =$this->input->post('id_kategori');
		$no_delegasi            =$this->input->post('no_delegasi');
		$no_tgl                 =$this->input->post('no_tgl');
		$tgl_terima		        =$this->input->post('tgl_terima');
		$proses_hari            =$this->input->post('proses_hari');
		$asal_surat		        =$this->input->post('asal_surat');
		$pelaksana		        =$this->input->post('pelaksana');
		/*$m_file 		        =$_FILES['userfile']['name'];

				$config['upload_path']          = 'myfile';
                $config['allowed_types']        = 'docx|pdf|png|JPG|jpeg';
			 	$this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        ?>
                        <script type="text/javascript">
                        	alert("Gagal Upload foto ,max 3 MB");
                        </script>

                <?php
                }
                else
                {
                        $datas = array('upload_data'         => $this->upload->data());          */
                        $data  = array('no_delegasi' 		     => $no_delegasi ,
                        			   'id_kategori'           => $id_kategori,
                        			   'tgl_terima'           => $tgl_terima,
                        			   'no_tgl'              => $no_tgl,
                        			   'proses_hari'              => $proses_hari,
                        			   'asal_surat'            => $asal_surat,
                        			   'pelaksana'            => $pelaksana
                        			  );
               			
               			$this->db->where('id_surat_masuk',$id_surat_masuk);
               			$this->db->update('tbl_surat_masuk',$data);
               			redirect('home/surat_masuk');
               // }
				
	}

	public function edit_surat_masuk($id_surat_masuk){
		$data['data']     = $this->db->query("SELECT * FROM tbl_surat_masuk where id_surat_masuk='$id_surat_masuk'");
		$data['title']  ='edit surat Masuk';
		$data['content']  ='edit_surat_masuk';
		$this->load->view('index',$data); 
	}


	public function hapus_surat_masuk($id_surat_masuk){
		$this->db->query("DELETE FROM tbl_surat_masuk where id_surat_masuk='$id_surat_masuk'");
        redirect('home/surat_masuk');

	}

	public function l_surat_keluar(){
		$data['title']     = 'Laporan Surat Keluar';
		$data['content']   = 'l_surat_keluar';
		$this->load->view('index',$data);	
	}
	public function cari_surat_keluar(){
		$tgl_surat    = $this->input->post('tgl_surat');
		$data['data'] = $this->db->query("SELECT * FROM tbl_surat_keluar where tgl_surat='$tgl_surat'");
		$data['content']   = 'rs_surat_keluar';
		$this->load->view('index',$data);	

	}

	public function print_surat_keluar($id_surat_keluar){
		$data['data'] = $this->db->query("SELECT * FROM tbl_surat_keluar where id_surat_keluar='$id_surat_keluar'");
		$this->load->view('print_surat_keluar',$data);	

	}

	public function l_surat_masuk(){
		$data['title']     = 'Laporan Surat Masuk';
		$data['content']   = 'l_surat_masuk';
		$this->load->view('index',$data);	
	}
	public function cari_surat_masuk(){
		$tgl_surat    = $this->input->post('tgl_surat');
		$data['data'] = $this->db->query("SELECT * FROM tbl_surat_masuk where tgl_surat='$tgl_surat'");
		$data['content']   = 'rs_surat_masuk';
		$this->load->view('index',$data);	

	}

	public function print_surat_masuk($id_surat_masuk){
		$data['data'] = $this->db->query("SELECT * FROM tbl_surat_msuk where id_surat_masuk='$id_surat_masuk'");
		$this->load->view('print_surat_masuk',$data);	

	}

}

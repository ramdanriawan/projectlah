<?php
session_start();
include "../includes/config.php";
if(isset($_POST['simpan']))
{	
//pemohon
	$id				= $_POST['id'];
	$subkategori	= $_POST['subkategori'];
	$kategori		= $_POST['kategori'];
	$nikt			= $_POST['nik'];
	$telp			= $_POST['telp'];
	$alamatp		= $_POST['alamat'];
	$namap			= $_POST['nama'];
	$nik			= $_POST['pemohon'];
	$anak			= $_POST['anak'];
	$nikpasangan	= $_POST['nikpasangan'];
	$namapasangan	= $_POST['namapasangan'];
	$agamatermohon	= $_POST['agamatermohon'];
	
	$query = "SELECT * FROM BIODATA_WNI,DATA_KELUARGA WHERE BIODATA_WNI.NIK = DATA_KELUARGA.NIK_KK AND biodata_wni.nik ='$nikt'";
	$parsed = oci_parse($conn2,$query);
	oci_execute($parsed);
	$data=oci_fetch_array($parsed);
	
	//termohon
	$nama			= $data['NAMA_LGKP'];
	$alamat			= $data['ALAMAT'];
	$pemohon		= $data['NAMA_LGKP'];
	$tmpt_lahir		= $data['TMPT_LHR'];
	$tgl_lahir		= $data['TGL_LHR'];
	$time           = strtotime($tgl_lahir);
	$tgllhr			= date('Y-m-d',$time);
	$namaibu		= $data['NAMA_LGKP_IBU'];
	
	
	
	$folder			= "../php/files/".$id;
	$status			= $_POST['status'];
	$userid			= $_SESSION['pengguna'];
	$tgl			= $_POST['tgl'];
	
	mkdir($folder);
	
	if($kategori == '103'){
			
			$sql1=$conn->query("INSERT INTO ad_proses (id_proses,nik,nama,alamat,telp,nik_termohon,id_kategori,id_sub_kategori,tgl_estimasi,folder,status,userid) 
							    VALUES ('$id','$nik','$namap','$alamatp','$telp','$nikt','$kategori','$subkategori','$tgl','$id','$status','$userid')");
		
			$sql2=$conn->query("INSERT INTO ad_arsip (id_proses,nik,nik_termohon,id_kategori,id_sub_kategori,status_arsip,userid)
								VALUES ('$id','$nik','$nikt','$kategori','$subkategori','Belum Scan','$userid')");
								
			$sql =$conn->query("INSERT INTO ad_detail_akta (id_proses,tmpt_lahir,tgl_lahir,nama_lgkp_ibu,anak_ke) VALUES ('$id','$tmpt_lahir','$tgllhr','$namaibu','$anak')");
			
	}elseif($kategori < 103 ){
			$sql1=$conn->query("INSERT INTO ad_proses (id_proses,nik,nama,alamat,telp,nik_termohon,id_kategori,id_sub_kategori,tgl_estimasi,folder,status,userid) 
							    VALUES ('$id','$nik','$namap','$alamatp','$telp','$nikt','$kategori','$subkategori','$tgl','$id','$status','$userid')");
		
			$sql2=$conn->query("INSERT INTO ad_arsip (id_proses,nik,nik_termohon,id_kategori,id_sub_kategori,status_arsip,userid)
								VALUES ('$id','$nik','$nikt','$kategori','$subkategori','Belum Scan','$userid')");
		}elseif($kategori > 103){
			$sql1=$conn->query("INSERT INTO ad_proses (id_proses,nik,nama,alamat,telp,nik_termohon,id_kategori,id_sub_kategori,tgl_estimasi,folder,status,userid) 
							    VALUES ('$id','$nik','$namap','$alamatp','$telp','$nikt','$kategori','$subkategori','$tgl','$id','$status','$userid')");
		
			$sql2=$conn->query("INSERT INTO ad_arsip (id_proses,nik,nik_termohon,id_kategori,id_sub_kategori,status_arsip,userid)
								VALUES ('$id','$nik','$nikt','$kategori','$subkategori','Belum Scan','$userid')");
								
			$sql =$conn->query("INSERT INTO ad_detail_lain (id_proses,nik_istri,nama_istri,agama,alamat) VALUES ('$id','$nikpasangan','$namapasangan','$agamatermohon','$alamat')");
		}	
		
	
		if($sql1 && $sql2){
			echo "ok";
		}else{
			echo mysql_error();
		}
		
}elseif(isset($_POST['ubah'])){	

	$id				= $_POST['id'];
	$tgl			= date('Y-m-d');
	$userid			= $_SESSION['pengguna'];
	$status			= $_POST['status'];
	
	$sql=$conn->query("UPDATE ad_proses SET status='$status', tgl_edit='$tgl', op_edit='$userid' WHERE id_proses='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
		
}elseif(isset($_POST['ubah-status'])){	
	$id = $_POST['id'];
	
	$sql=$conn->query("UPDATE ad_arsip set status_arsip='Sudah Scan' WHERE id_proses='$id'");
		
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>
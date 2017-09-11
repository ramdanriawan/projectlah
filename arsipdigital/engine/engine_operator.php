<?php
include "../includes/config.php";
if(isset($_POST['hapus'])) {
	$id			= $_POST['hapus'];
	$nilai 		= explode(',',$id);

	foreach($nilai as $value) {
		$sql=$conn->query("DELETE FROM ad_user WHERE userid ='$value'");
	}
	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
}
elseif(isset($_POST['simpan']))
{
	$id 		= $_POST['id'];
	$nama		= $_POST['nama'];
	$level		= $_POST['level'];
	$password	= $_POST['password'];
	$status		= "1";
	$tgl = date('Y-m-d H:i:s');
	$sql=$conn->query("INSERT INTO ad_user (userid,username,password,level,tgl_daftar,status,waktu_login,avatar,bagian,pimpinan) VALUES ('$id','$nama','$password','$level','$tgl','$status','$tgl','','','')");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
elseif(isset($_POST['ubah']))
{
	$id 		= $_POST['id'];
	$nama		= $_POST['nama'];
	$level		= $_POST['level'];
	$password	= $_POST['password'];

	$sql=$conn->query("UPDATE ad_user SET username='$nama', level='$level', password='$password' WHERE userid='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>

<?php
session_start();
$user = $_SESSION['pengguna'];
include "../includes/config.php";

	$nama			= $_POST['nama'];
	$pimpinan		= $_POST['pimpinan'];

	$sql=$conn->query("UPDATE ad_user SET bagian='$nama',pimpinan='$pimpinan' WHERE userid='$user'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}

?>
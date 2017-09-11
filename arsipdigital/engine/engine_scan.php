<?php
include "../includes/config.php";
if(isset($_POST['Upload']))
{	
	$nama				= $_POST['nama'];
	$alamat				= $_POST['alamat'];

	$sql=$conn->query("INSERT INTO ad_syarat (NAMA_FILE,ALAMAT_FILE) VALUES ('$nama','$alamat')");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>
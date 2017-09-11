<?php
include "../includes/config.php";
if(isset($_POST['hapus'])) {
	$id			= $_POST['hapus'];
	$nilai 		= explode(',',$id);
	foreach($nilai as $value) {
		$sql=$conn->query("DELETE FROM ad_kategori WHERE id_kategori = '$value'");
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
	$ket		= $_POST['ket'];

	$sql=$conn->query("INSERT INTO ad_kategori (id_kategori,nama_kategori,keterangan) VALUES ('$id','$nama','$ket')");
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
	$ket		= $_POST['ket'];

	$sql=$conn->query("UPDATE ad_kategori SET nama_kategori='$nama', keterangan='$ket' WHERE id_kategori='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>
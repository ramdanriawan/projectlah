<?php
include "../includes/config.php";
if(isset($_POST['hapus'])) {
	$id			= $_POST['hapus'];
	
	$nilai 		= explode(',',$id);
	foreach($nilai as $value) {
		$sql=$conn->query("DELETE FROM ad_sub_kategori WHERE id_sub_kategori = '$value'");
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
	$kategori	= $_POST['kategori'];
	$ket		= $_POST['ket'];

	$sql=$conn->query("INSERT INTO ad_sub_kategori (id_sub_kategori,nama_sub_kategori,keterangan_sub,id_kategori) VALUES ('$id','$nama','$ket','$kategori')");
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
	$kategori	= $_POST['kategori'];
	$ket		= $_POST['ket'];

	$sql=$conn->query("UPDATE ad_sub_kategori SET nama_sub_kategori='$nama', keterangan_sub='$ket',id_kategori='$kategori' WHERE id_sub_kategori='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>
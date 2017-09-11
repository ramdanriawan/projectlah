<?php
include "../includes/config.php";
if(isset($_POST['hapus'])) {
	$id			= $_POST['hapus'];
	$nilai 		= explode(',',$id);
	foreach($nilai as $value) {
		$sql=$conn->query("DELETE FROM ad_syarat WHERE id_syarat ='$value'");
	}

	if($sql){
		echo "ok";
	}else{
		echo "Gagal";
	}
}
elseif(isset($_POST['simpan']))
{
	$id				= $_POST['id'];
	$nama			= $_POST['nama'];
	$subkategori	= $_POST['subkategori'];
	$ket			= $_POST['ket'];

	$sql=$conn->query("INSERT INTO ad_syarat (id_syarat,nama_syarat,id_sub_kategori,keterangan_syarat) VALUES ('$id','$nama','$subkategori','$ket')");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
elseif(isset($_POST['ubah']))
{
	$id 			= $_POST['id'];
	$nama			= $_POST['nama'];
	$subkategori	= $_POST['subkategori'];
	$ket			= $_POST['ket'];

	$sql=$conn->query("UPDATE ad_syarat SET nama_syarat='$nama', id_sub_kategori='$subkategori', keterangan_syarat='$ket' WHERE id_syarat='$id'");
		if($sql){
			echo "ok";
		}else{
			echo "Gagal";
		}
}
?>

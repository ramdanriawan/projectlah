<?php
include "../includes/config.php";

$id			= $_POST['kode'];
$nama		= $_POST['nama'];
$level		= $_POST['level'];
$status		= $_POST['status'];
$nama_file  = $_FILES['file']['name'];

$avatar		= $_POST['kode'].".jpg";
$oldfile	= "../img/users/".$avatar;

$folder  	= "../img/users/";
$folder2	= "../img/users/avatars/";

$n_width=50;          
$n_height=50;

if($nama_file == ""){
	$sql = $conn->query("UPDATE ad_user SET username='$nama', level='$level', status='$status' WHERE userid='$id'");
}else{
unlink($oldfile);

//Simpan kedalam database
$sql = $conn->query("UPDATE ad_user SET username='$nama', level='$level', status='$status', avatar='$avatar' WHERE userid='$id'");

//Upload Avatar Baru
$status = FALSE;
if(!empty($_FILES['file']['tmp_name']))
	{
		$upload = move_uploaded_file($_FILES['file']['tmp_name'], '../img/users/'.$avatar);
		
		//Copy File Foto dan buat Thumbnail
		$im=ImageCreateFromJPEG($folder.$avatar); 
		$width=ImageSx($im);              // Original picture width is stored
		$height=ImageSy($im);             // Original picture height is stored
		$n_height=($n_width/$width) * $height; // Add this line to maintain aspect ratio
		$newimage=imagecreatetruecolor($n_width,$n_height);                 
		imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
		ImageJpeg($newimage,$folder2.$avatar);
		
		if($upload)
		{
			$status = TRUE;
		}
	}

if($status==TRUE)
	{
		echo "ok";
	}	
}


?>
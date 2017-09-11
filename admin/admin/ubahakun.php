<?php 
include '../koneksi.php'; 
if (isset($_POST['simpan'])) { 
	$id_admin			= $_POST['id_admin'];
	$nama 				= $_POST['nama']; 
	$username			= $_POST['username'];
	$password 			= $_POST['password'];
$namafolder="../upload/akun/"; //tempat menyimpan foto 
if (!empty($_FILES["foto"]["tmp_name"])) {     
$jenis_gambar=$_FILES['foto']['type'];     
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")    
	{                   
$gambar = $namafolder . basename($_FILES['foto']['name']);             
   if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {          
 $query = "UPDATE user SET 
 nama 			= '$nama',
 username 		= '$username',
 password		= '$password',
 foto 			= '$gambar' WHERE id_admin = '$id_admin'"; 
}}}
 $hasil = mysql_query($query); 
 if ($hasil) { 
  echo "<script>alert('berhasil disimpan')</script>";
    echo '<script type="text/javascript">window.location="user.php"</script>';
}
else { 
                    die($sql . " => " . mysql_error()); 
                }
            }
?>
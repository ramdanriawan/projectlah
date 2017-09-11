<?php
  include "../koneksi.php";
  $id_admin			=$_POST['id_admin'];
  $nama			=$_POST['nama'];
  $username 	=$_POST['username'];
  $password	=$_POST['password'];
$namafolder			="../upload/akun/"; //tempat menyimpan foto 
if (!empty($_FILES["foto"]["tmp_name"])) {     
$jenis_gambar=$_FILES['foto']['type'];     
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")    
	{                   
$gambar = $namafolder . basename($_FILES['foto']['name']);             
   if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {          
$simpan=mysql_query ("INSERT INTO user(id_admin,nama,username,password,level,foto)  " .
  "values('$id_admin','$nama','$username','$password','admin','$gambar')")  or die(mysql_error());
 	}}}
 mysql_query($simpan);
 echo "<script>alert('berhasil disimpan')</script>";
    echo '<script type="text/javascript">window.location="user.php"</script>';

?>

<?php
  include "../koneksi.php";
  $id_surat			=$_POST['id_surat'];
  $id_admin			=$_POST['id_admin'];
  $tujuan				=$_POST['tujuan'];
  $no_surat 	=$_POST['no_surat'];
  $tgl_surat	=$_POST['tgl_surat'];
  $isi_ringkas			=$_POST['isi_ringkas'];
$namafolder			="../upload/surat_masuk/"; //tempat menyimpan file 
if (!empty($_FILES["file"]["tmp_name"])) {     
$jenis_gambar=$_FILES['file']['type'];     
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")    
	{                   
$gambar = $namafolder . basename($_FILES['file']['name']);             
   if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {          
$simpan=mysql_query ("INSERT INTO t_surat_keluar(id_surat,id_admin,tujuan,no_surat,tgl_surat,isi_ringkas,file)  " .
  "values('$id_surat','$id_admin','$tujuan','$no_surat','$tgl_surat','$isi_ringkas','$gambar')")  or die(mysql_error());
 	}}}
 mysql_query($simpan);
 echo "<script>alert('berhasil disimpan')</script>";
    echo '<script type="text/javascript">window.location="suratkeluar.php"</script>';

?>

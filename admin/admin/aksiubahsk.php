<?php 
include '../koneksi.php'; 
if (isset($_POST['simpan'])) { 
	$id_surat			= $_POST['id_surat'];
	$tujuan 				= $_POST['tujuan']; 
	$no_surat 			= $_POST['no_surat'];
	$tgl_surat 		= $_POST['tgl_surat'];
	$isi_ringkas 		= $_POST['isi_ringkas'];
$namafolder="../upload/surat_keluar/"; //tempat menyimpan file 
if (!empty($_FILES["file"]["tmp_name"])) {     
$jenis_gambar=$_FILES['file']['type'];     
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")    
	{                   
$gambar = $namafolder . basename($_FILES['file']['name']);             
   if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {          
 $query = "UPDATE t_surat_keluar SET 
 tujuan 			= '$tujuan',
 no_surat 		= '$no_surat',
 tgl_surat	= '$tgl_surat',
 isi_ringkas 	= '$isi_ringkas',
 file 			= '$gambar' WHERE id_surat = '$id_surat'"; 
}}}
 $hasil = mysql_query($query); 
 if ($hasil) { 
  echo "<script>alert('berhasil disimpan')</script>";
    echo '<script type="text/javascript">window.location="suratkeluar.php"</script>';

}
else { 
                    die($sql . " => " . mysql_error()); 
                }
            }
?>
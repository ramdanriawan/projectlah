<?php 
include '../koneksi.php'; 
if (isset($_POST['simpan'])) { 
//mengambil nilai dari form di bawah 
	$id_surat			= $_POST['id_surat'];
	$dari 				= $_POST['dari']; 
	$no_surat 			= $_POST['no_surat'];
	$tgl_surat 		= $_POST['tgl_surat'];
	$isi_ringkas 		= $_POST['isi_ringkas'];
$namafolder="../upload/surat_masuk/"; //tempat menyimpan file 
if (!empty($_FILES["file"]["tmp_name"])) {     
$jenis_gambar=$_FILES['file']['type'];     
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")    
	{                   
$gambar = $namafolder . basename($_FILES['file']['name']);             
   if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {          
 $query = "UPDATE t_surat_masuk SET 
 dari 			= '$dari',
 no_surat 		= '$no_surat',
 tgl_surat	= '$tgl_surat',
 isi_ringkas 	= '$isi_ringkas',
 file 			= '$gambar' WHERE id_surat = '$id_surat'"; 
}}}
 $hasil = mysql_query($query); 
 if ($hasil) { 
  echo "<script>alert('berhasil disimpan')</script>";
    echo '<script type="text/javascript">window.location="suratmasuk.php"</script>';

}
else { 
                    die($sql . " => " . mysql_error()); 
                }
            }
?>
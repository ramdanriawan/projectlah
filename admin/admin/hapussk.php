<?php
  if(isset($_GET['id_surat']))
  {
      include("../koneksi.php");
      $id_surat = $_GET["id_surat"];
      $hapus = mysql_query("DELETE FROM t_surat_keluar WHERE id_surat ='$id_surat'");
      if($hapus)
		  
 echo "<script>alert('Berhasil Dihapus')</script>";
    echo '<script type="text/javascript">window.location="suratkeluar.php"</script>';
}
	else {
	  echo "<script>alert('Gagal Dihapus')</script>";
	    echo '<script type="text/javascript">window.location="suratkeluar.php"</script>';
	}
       
?>
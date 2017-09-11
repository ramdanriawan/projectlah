<?php
  if(isset($_GET['id_admin']))
  {
      include("../koneksi.php");
      $id_admin = $_GET["id_admin"];
      $hapus = mysql_query("DELETE FROM user WHERE id_admin ='$id_admin'");
      if($hapus)
		  
 echo "<script>alert('Berhasil Dihapus')</script>";
    echo '<script type="text/javascript">window.location="user.php"</script>';
}
	else {
	  echo "<script>alert('Gagal Dihapus')</script>";
	    echo '<script type="text/javascript">window.location="user.php"</script>';
	}
       
?>
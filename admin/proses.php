<?php
session_start();
mysql_connect("localhost","root","") or die("Tidak bisa konek");
mysql_select_db("db_surat");//sesuaikan dengan nama database anda
$username = $_POST['username'];
$password = $_POST['password'];
$redirect = $_GET['redirect'];

if($redirect=="in"){
    $cek = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
		$_SESSION['id_admin'] = $c['id_admin'];
        $_SESSION['username'] = $c['username'];
		$_SESSION['nama'] = $c['nama'];
        $_SESSION['level'] = $c['level'];
		$_SESSION['foto'] = $c['foto'];
        if($c['level']=="admin"){
			echo '<script language="javascript">alert("Welcome Admin "); document.location="admin/home.php";</script>';
		}else {
         echo "<script>document.location='index.php?error=login';</script>";
    }
}
}
?>

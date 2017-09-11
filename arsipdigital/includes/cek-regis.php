<?php
session_start(); 
include "config.php";

$kode = $_POST["kode"];
 
$sql=$conn->query("SELECT id_proses FROM ad_proses WHERE id_proses='$kode'");
$row=$sql->num_rows;
$r=$sql->fetch_assoc();
 
    if ( $row > 0 ){
		unset($_SESSION['folder']);
		unset($_SESSION['kode']);
        $_SESSION["folder"] = $r['id_proses'];
		$_SESSION["kode"] = $kode;
		echo "ok";
    }
?>
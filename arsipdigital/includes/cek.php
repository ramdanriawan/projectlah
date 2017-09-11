<?php
session_start(); 
include "config.php";
 
$username = $_POST["userid"];
$pass = $_POST["password"];
 
$sql=$conn->query("SELECT * FROM ad_user WHERE userid='$username' AND password='$pass' AND status='1'");
$row=$sql->num_rows;
$r=$sql->fetch_assoc();
 
    if ( $row > 0 ){

        $_SESSION["pengguna"] = $r['userid'];
		$_SESSION["nama"]	  = $r['username'];
		$_SESSION["level"]    = $r['level'];
		echo "ok";
    }
?>
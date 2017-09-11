
<?php
       if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $dbserver="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="db_surat";
    mysql_connect($dbserver,$dbusername,$dbpassword) or die(mysql_error());
    mysql_select_db($dbname) or die (mysql_error());
?>

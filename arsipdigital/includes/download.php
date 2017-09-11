<?php
if (isset($_GET['download']) && $_GET['download'] == 'true') {
	$file = "../php/files/".$_GET['id']."/".$_GET['src'];
	header("Content-disposition: attachment; filename=".$_GET['src']);
	header("Content-type: application/pdf");
    readfile($file);
}
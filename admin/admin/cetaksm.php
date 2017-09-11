<?php
 // Define relative path from this script to mPDF
$nama_dokumen='PDF With MPDF'; //Beri nama file PDF hasil.
define('_MPDF_PATH','MPDF57/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>
<?php
mysql_connect ("localhost","root","");
mysql_select_db("db_surat");
include"../tanggal.php";
$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir =$_POST['tgl_akhir'];
$tgl1 = tgl_indo($tgl_awal);
$tgl2 = tgl_indo($tgl_akhir);
$cari = mysql_query ("select * t_surat_masuk where tgl_surat between '$tgl_awal' and '$tgl_akhir'");
{
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" /><title>MANAJEMEN SURAT</title>
<link href='../img/ico.png' rel='shortcut icon'>
<link rel="stylesheet" href="../css/demo.css" type="text/css" media="all">
<link   href="../css/bootstrap.css" rel="stylesheet">
</head>
<style type="text/css" media="print">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
	td { padding: 10px 7px; font-size: 12px}
	th {
		font-family:Arial;
		color:black;
		font-size: 12px;
		background-color:lightgrey;
        padding: 12px 9px;
	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color: #999;
		padding: 8px 0;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<body onLoad="window.print()">
	<center><h2 align="center" style="font-size: 20px"><b>DAFTAR SURAT MASUK SMA N 4 BANGKO PUSAKO <BR> TAHUN PELAJARAN 2016/2017</h2><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<i><?php echo "$tgl1"; ?> sampai dengan <?php echo "$tgl2"; ?></i></center>
<br>
<table border=1><br/>
<tr>
	<tr>
					<th width="3%"><center>NO</center></th>
		            <th width="40%"><center>ASAL SURAT</center></th>
					<th width="30%"><center>NOMOR SURAT</center></th>
					<th width="5%"><center>TANGGAL TERIMA</center></th>
</tr>
<?php
$no=1;
$cari=mysql_query("select*from t_surat_masuk where tgl_surat between '$tgl_awal' and '$tgl_akhir'");
while($baca=mysql_fetch_array($cari)){
	
	$tgl = tgl_indo($baca['tgl_surat']);
	$tgl1 = tgl_indo($baca['tgl_diterima']);
	
echo "<tr valign=top>
<td><center>$no</center></td>
<td><center>$baca[dari]</center></td>
<td><center>$baca[no_surat]</center></td>
<td><center>$tgl</center></td>

</tr>";
$no++;
}
echo "</table>";
}

?>
<br/>
</body>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>

<?php 
session_start();
include "../includes/config.php";
$bulan = $_GET['bulan'];
$user = $_SESSION['pengguna'];
$sql = $conn->query("SELECT * FROM ad_kategori");

$sqlpim = $conn->query("SELECT pimpinan FROM ad_user WHERE userid = '$user'");
$rpim = $sqlpim->fetch_assoc();

function bulan($bln){
$bulan = $bln;
Switch ($bulan){
 case 1 : $bulan="Januari";
 Break;
 case 2 : $bulan="Februari";
 Break;
 case 3 : $bulan="Maret";
 Break;
 case 4 : $bulan="April";
 Break;
 case 5 : $bulan="Mei";
 Break;
 case 6 : $bulan="Juni";
 Break;
 case 7 : $bulan="Juli";
 Break;
 case 8 : $bulan="Agustus";
 Break;
 case 9 : $bulan="September";
 Break;
 case 10 : $bulan="Oktober";
 Break;
 case 11 : $bulan="November";
 Break;
 case 12 : $bulan="Desember";
 Break;
 }
return $bulan;
}
?>
<style type="text/css">
<!--
.style3 {font-size: x-large; font-weight: bold; }

.font {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
table[border="1"] {
  border-collapse:collapse;
  font:normal normal 11px Verdana,Arial,Sans-Serif;
  color:#0000000;
}
.hed {
	font-size: 14px;
}
.hed {
	font-family: Arial, Helvetica, sans-serif;
}
.hed {
	font-size: 14px;
}
.style9 {font-size: 27px; font-weight: bold; }
-->

</style>
<script type="text/javascript">
window.print();
window.onfocus=function(){ window.close();}
</script>
<table width="853" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td width="110" rowspan="3" align="center" valign="middle"><img src="../img/kop.jpg" /></td>
    <td height="27" colspan="3" align="center" valign="middle"><span class="style3">PEMERINTAH KABUPATEN LANDAK </span></td>
  </tr>
  <tr>
    <td height="27" colspan="3" align="center" valign="middle"><span class="style9">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL </span></td>
  </tr>
  <tr>
    <td height="27" colspan="3" align="center" valign="middle" class="style3">NGABANG</td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="top"><img src="../img/icon-file/kop.jpg" height="8"/></td>
  </tr>
  <tr>
    <td height="46" colspan="4" align="center" valign="middle"><strong>REKAPITULASI PELAYANAN  PER PELAYANAN </strong></td>
  </tr>
  <tr>
    <td height="52" colspan="4"><table width="200" border="0" cellpadding="0" cellspacing="0" class="font">
      <tr>
        <td width="66"><strong>BULAN</strong></td>
        <td width="10"><strong>:</strong></td>
        <td width="124"><strong><?php echo bulan($_GET['bulan']).' '.date('Y');?></strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="128" colspan="4" align="center" valign="top">
	<table cellpadding="3" cellspacing="0" width="100%" class="font" border=1>
      <thead>
        <tr>
          <th width="3%" bgcolor="#CCCCCC">NO</th>
          <th width="51%" align="left" bgcolor="#CCCCCC"> JENIS PELAYANAN </th>
		  <th width="16%" bgcolor="#CCCCCC">TOTAL PELAYANAN </th>
          <th width="14%" align="center" bgcolor="#CCCCCC">SUDAH SCAN </th>
          <th width="16%" bgcolor="#CCCCCC">BELUM SCAN </th>
          </tr>
      </thead>
      <tbody>
        <?php 
		$no=0;
		while($r=$sql->fetch_assoc()){
		$no++;
		$id = $r['id_kategori'];
		$sql2 = $conn->query("SELECT COUNT( id_kategori ) AS total, COUNT( 
							  CASE WHEN status_arsip =  'Belum Scan'
							  THEN 1 
							  ELSE NULL 
							  END ) AS BelumScan, COUNT( 
							  CASE WHEN status_arsip =  'Sudah Scan'
							  THEN 1 
							  ELSE NULL 
							  END ) AS SudahScan
							  FROM ad_arsip WHERE id_kategori = '$id' AND MONTH(tgl_proses) = '$bulan'");
		$t=$sql2->fetch_assoc();
		?>
        <tr>
          <td align="center" valign="middle"><?php echo $no;?></td>
          <td valign="middle"><?php echo $r['nama_kategori'];?></td>
		  <td align="center" valign="middle"><?php echo $t['total'];?> Pelayanan</td>
          <td align="center" valign="middle"><?php echo $t['SudahScan'];?> Arsip</td>
          <td align="center" valign="middle"><?php echo $t['BelumScan'];?> Arsip</td>
          </tr>
        <?php 
			}
		?>
      </tbody>
    </table></td>
  </tr>
  
  <tr>
    <td height="27" colspan="2">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><strong>Mengetahui,</strong><br /> 
    Kasi Pelayanan
</td>
  </tr>
  <tr>
    <td height="113" colspan="2">&nbsp;</td>
    <td width="371" align="center">&nbsp;</td>
    <td width="330" align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
    <p><u><strong><?php echo $rpim['pimpinan'];?></strong></u></p></td>
  </tr>
</table>

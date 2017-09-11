<?php 
session_start();
include "../includes/config.php";
$day = $_GET['tgl'];
$user = $_SESSION['pengguna'];
$sql = $conn->query("SELECT a.id_proses,a.nik,a.nama,a.telp,a.id_kategori,a.id_sub_kategori,a.tgl_proses,a.nik_termohon,b.nama_kategori,c.nama_sub_kategori
						FROM ad_proses a
						JOIN ad_kategori b ON a.id_kategori = b.id_kategori
						JOIN ad_sub_kategori c ON a.id_sub_kategori = c.id_sub_kategori 
						WHERE DAY(a.tgl_proses) = '$day'
						ORDER BY a.id_proses ASC");

$sqlpim = $conn->query("SELECT pimpinan FROM ad_user WHERE userid = '$user'");
$rpim = $sqlpim->fetch_assoc();
?>
<style type="text/css">
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


</style>
<script type="text/javascript">
window.print();
window.onfocus=function(){ window.close();}
</script>
<table width="853" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td width="110" rowspan="3" align="center" valign="middle"><img src="../img/kop.jpg" /></td>
    <td height="27" colspan="3" align="center" valign="middle"><span class="style3">PEMERINTAH KABUPATEN SAROLANGUN </span></td>
  </tr>
  <tr>
    <td height="27" colspan="3" align="center" valign="middle"><span class="style9">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL </span></td>
  </tr>
  <tr>
    <td height="27" colspan="3" align="center" valign="middle" class="style3">KABUPATEN SAROLANGUN</td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="top"><img src="../img/icon-file/kop.jpg" height="8"/></td>
  </tr>
  <tr>
    <td height="46" colspan="4" align="center" valign="middle"><strong>REKAPITULASI PELAYANAN  HARIAN </strong></td>
  </tr>
  <tr>
    <td height="52" colspan="4"><table width="200" border="0" cellpadding="0" cellspacing="0" class="font">
      <tr>
        <td width="66"><strong>Tanggal</strong></td>
        <td width="10"><strong>:</strong></td>
        <td width="124"><strong><?php echo $day;?></strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="104" colspan="4" align="center" valign="top">
	<table cellpadding="3" cellspacing="0" width="100%" class="font" border=1>
      <thead>
        <tr>
          <th width="4%" bgcolor="#CCCCCC">NO</th>
          <th width="13%" align="left" bgcolor="#CCCCCC"> REGISTRASI</th>
		  <th width="15%" bgcolor="#CCCCCC">NIK TERMOHON</th>
          <th width="20%" align="left" bgcolor="#CCCCCC">NAMA PEMOHON</th>
          <th width="6%" bgcolor="#CCCCCC">NO BLANGKO</th>
          <th width="13%" bgcolor="#CCCCCC">PELAYANAN</th>
          <th width="17%" bgcolor="#CCCCCC">SUB PELAYANAN</th>
          <th width="12%" bgcolor="#CCCCCC">TANGGAL</th>
         
        </tr>
      </thead>
      <tbody>
        <?php 
		$no=0;
		while($r=$sql->fetch_assoc()){$no++
		?>
        <tr>
          <td align="center"><?php echo $no;?></td>
          <td><?php echo $r['id_proses'];?></td>
		  <td align="center"><?php echo $r['nik_termohon'];?></td>
          <td><?php echo $r['nama'];?></td>
          <td align="center"><?php echo $r['telp'];?></td>
          <td align="center"><?php echo $r['nama_kategori'];?></td>
          <td align="center"><?php echo $r['nama_sub_kategori'];?></td>
          <td align="center"><?php echo date('d-m-Y', strtotime($r['tgl_proses']));?></td>
          
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

<?php
session_start();
$idproses		= $_GET['id_proses'];
$idkategori 	= $_GET['id_kategori'];
$idsubkategori	= $_GET['id_sub_kategori'];
$nik			= $_GET['nik'];
$tgl_estimasi	= $_GET['tgl_estimasi'];
$user			= $_SESSION['pengguna'];
$pengguna		= $_SESSION['nama'];
include "config.php";
$sql = $conn->query("SELECT a.nama_kategori,b.nama_sub_kategori FROM ad_kategori a JOIN ad_sub_kategori b ON a.id_kategori = b.id_kategori AND b.id_kategori = '$idkategori' AND b.id_sub_kategori='$idsubkategori'");
$r = $sql->fetch_assoc();

$namakat = $r['nama_kategori'];
$namasub = $r['nama_sub_kategori'];

$sqlpim = $conn->query("SELECT pimpinan FROM ad_user WHERE userid = '$user'");
$rpim = $sqlpim->fetch_assoc();
?>
<html>
<head>
<title>Bukti Registrasi <?php echo $idproses;?></title>
<style type="text/css">
.page-break	{ display: block; page-break-before: always; }
.font {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.tables[border="1"] {
  border-collapse:collapse;
  color:#0000000;
}
.style1 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style9 {font-size: 27px; font-weight: bold; }
.style10 {font-size: x-large}
</style>
<script type="text/javascript">
window.print();
window.onfocus=function(){ window.close();}
</script>
</head>
<body>
<table width="803" align="center">
  <tr>
    <td width="92" rowspan="4" align="center"><img src="../img/kop.jpg" /></td>
    <td width="695" align="center"><span class="style10">SURAT KENDALI KK / e-KTP </span></td>
  </tr>
  <tr>
    <td align="center"><span class="style9">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</span></td>
  </tr>
  <tr>
    <td align="center"><span class="style10">PEMERINTAH KABUPTEN SAROLANGUN</span></td>
  </tr>
  <tr>
    <td align="center"><em>Komplek. Perkantoran Gunung Kembang Kode Pos. (37481) </em></td>
  </tr>
  <tr>
    <td height="22" colspan="2" align="center" valign="top"><img src="../img/icon-file/kop.jpg" height="8"/></td>
  </tr>
  <tr>
    <td height="256" colspan="2" valign="top"><table height="266" border="0" align="center" class="font" style="width:100%">
      <tr>
        <td width="28%" height="21" align="left" valign="top"><strong>NO. REGISTRASI </strong></td>
        <td width="44%" align="left" valign="top"> : <?php echo $idproses;?></td>
        <td width="28%" rowspan="6" align="right" valign="top"><table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
          <tr>
            <td width="105" class="font">LOKET</td>
            <td width="98" class="font">&nbsp;</td>
          </tr>
        </table>
          <br>
          <table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
            <tr>
              <td width="106" class="font">PARAF<br>
                VERIFIKATOR</td>
              <td width="97" class="font">&nbsp;</td>
            </tr>
          </table>
          <br>
          <table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
            <tr>
              <td width="106" class="font">PARAF<br>
                OPERATOR</td>
              <td width="97" class="font">&nbsp;</td>
            </tr>
          </table>
          <br>
          <table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
            <tr>
              <td width="105" class="font">PARAF KABID </td>
              <td width="98" class="font">&nbsp;</td>
            </tr>
          </table>
          <p><img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo $idproses;?>&choe=UTF-8"></p></td>
      </tr>
      <tr>
        <td height="21" align="left" valign="top"><strong>NIK PEMOHON </strong></td>
        <td align="left" valign="top">: <?php echo $nik;?></td>
        </tr>
      <tr>
        <td height="21" align="left" valign="top"><strong>KATEGORI LAYANAN </strong></td>
        <td align="left" valign="top"> : <?php echo $namakat;?></td>
        </tr>
      <tr>
        <td height="21" align="left" valign="top"><strong>SUB LAYANAN</strong></td>
        <td align="left" valign="top"> : <?php echo $namasub;?></td>
        </tr>
      <tr>
        <td height="20" align="left" valign="top"><strong>TANGGAL MASUK </strong></td>
        <td align="left" valign="top"> : <?php echo date('d-m-Y');?></td>
        </tr>
      <tr>
        <td height="148" align="left" valign="top"><strong>ESTIMASI PROSES</strong></td>
        <td align="left" valign="top"> : <?php echo date('d-m-Y', strtotime($tgl_estimasi));?></td>
        </tr>
      
    </table>
        <p><br>
      </p></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p align="center">-----------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<p align="center">&nbsp;</p>
<table width="803" align="center">
  <tr>
    <td width="92" rowspan="4" align="center"><img src="../img/kop.jpg" alt="kop" /></td>
    <td width="695" align="center"><span class="style10">SURAT KENDALI KK / e-KTP </span></td>
  </tr>
  <tr>
    <td align="center"><span class="style9">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</span></td>
  </tr>
  <tr>
    <td align="center"><span class="style10">PEMERINTAH KABUPTEN SAROLANGUN</span></td>
  </tr>
  <tr>
    <td align="center"><em>Komplek. Perkantoran Gunung Kembang Kode Pos. (37481) </em></td>
  </tr>
  <tr>
    <td height="22" colspan="2" align="center" valign="top"><img src="../img/icon-file/kop.jpg" alt="kop" height="8"/></td>
  </tr>
  <tr>
    <td height="256" colspan="2" valign="top"><table height="288" border="0" align="center" class="font" style="width:100%">
      <tr>
        <td width="28%" height="21" align="left" valign="top"><strong>NO. REGISTRASI </strong></td>
        <td width="44%" align="left" valign="top"> : <?php echo $idproses;?></td>
        <td width="28%" rowspan="7" align="right" valign="top"><table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
            <tr>
              <td width="105" class="font">LOKET</td>
              <td width="98" class="font">&nbsp;</td>
            </tr>
          </table>
            <br>
            <table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
              <tr>
                <td width="106" class="font">PARAF<br>
                  VERIFIKATOR</td>
                <td width="97" class="font">&nbsp;</td>
              </tr>
            </table>
          <br>
            <table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
              <tr>
                <td width="106" class="font">PARAF<br>
                  OPERATOR</td>
                <td width="97" class="font">&nbsp;</td>
              </tr>
            </table>
          <br>
            <table width="230" height="35" border="1" cellpadding="3" cellspacing="3" bordercolor="#FF0000">
              <tr>
                <td width="105" class="font">PARAF KABID </td>
                <td width="98" class="font">&nbsp;</td>
              </tr>
            </table>
          <p><img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo $idproses;?>&choe=UTF-8"></p></td>
      </tr>
      <tr>
        <td height="21" align="left" valign="top"><strong>NIK PEMOHON </strong></td>
        <td align="left" valign="top">: <?php echo $nik;?></td>
      </tr>
      <tr>
        <td height="21" align="left" valign="top"><strong>KATEGORI LAYANAN </strong></td>
        <td align="left" valign="top"> : <?php echo $namakat;?></td>
      </tr>
      <tr>
        <td height="21" align="left" valign="top"><strong>SUB LAYANAN</strong></td>
        <td align="left" valign="top"> : <?php echo $namasub;?></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><strong>TANGGAL MASUK </strong></td>
        <td align="left" valign="top"> : <?php echo date('d-m-Y');?></td>
        </tr>
      <tr>
        <td height="20" align="left" valign="top"><strong>ESTIMASI PROSES</strong></td>
        <td align="left" valign="top"> : <?php echo date('d-m-Y', strtotime($tgl_estimasi));?></td>
        </tr>
      <tr>
        <td height="148" align="left" valign="bottom">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table>
      <p><br>
      </p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="page-break">
  <table width="803" align="center">
    <tr>
      <td width="92" rowspan="4" align="center"><img src="../img/kop.jpg" alt="kop" /></td>
      <td width="695" align="center"><span class="style10">SURAT KENDALI KK / e-KTP </span></td>
    </tr>
    <tr>
      <td align="center"><span class="style9">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</span></td>
    </tr>
    <tr>
      <td align="center"><span class="style10">PEMERINTAH KABUPTEN SAROLANGUN</span></td>
    </tr>
    <tr>
      <td align="center"><em>Komplek. Perkantoran Gunung Kembang Kode Pos. (37481) </em></td>
    </tr>
    <tr>
      <td height="22" colspan="2" align="center" valign="top"><img src="../img/icon-file/kop.jpg" alt="kop" height="8"/></td>
    </tr>
  </table>
  <table width="376" border="0">
  <tr>
    <td width="126" height="28" class="font"><strong>JENIS PELAYANAN </strong></td>
    <td width="10" class="font">:</td>
    <td width="226" class="font"><?php echo $namakat;?></td>
  </tr>
  <tr>
    <td class="style1">SUB LAYANAN </td>
    <td class="font">:</td>
    <td class="font"><?php echo $namasub;?></td>
  </tr>
</table>
<br>
<br>
<p align="center" class="font"><u><strong>SYARAT BERKAS PELAYANAN </strong></u><br>
  <br>
</p>
<table border="1" class="tables" cellpadding="3" cellspacing="1" style="width:100%">

<tr>
  <td width="3%" align="center" class="font"><strong>NO</strong></td>
  <td width="82%" class="font"><strong>KETERANGAN</strong></td>
  <td width="15%" align="center" class="font"><strong>STATUS</strong></td>
</tr>
<?php 
$nom =0;
$sqlsyarat = $conn->query("SELECT * FROM ad_syarat WHERE id_sub_kategori = '$idsubkategori'");
while($t=$sqlsyarat->fetch_assoc()){ $nom++;
?>
<tr>
  <td align="center" class="font"><?php echo $nom;?></td>
<td class="font"><?php echo $t['nama_syarat'];?></td>
<td class="font"> </td>
</tr>
<?php
}
?>
</table>
</div>
</body>
</html>
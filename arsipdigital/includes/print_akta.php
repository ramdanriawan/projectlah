<?php 
session_start();
$idproses		= $_GET['id_proses'];
$idkategori 	= $_GET['id_kategori'];
$idsubkategori	= $_GET['id_sub_kategori'];
$nik			= $_GET['nik'];
$namapemohon	= $_GET['nmpemohon'];
$tgl_estimasi	= $_GET['tgl_estimasi'];
$nmibu			= $_GET['namaibu'];
$namatermohon	= $_GET['nmtermohon'];
$tltermohon		= $_GET['tmpltermohon'];
$tgltermohon	= $_GET['tgltermohon'];
$anakke			= $_GET['anaktermohon'];
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
<style type="text/css">

.style10 {font-size: x-large}
.style9 {font-size: 27px; font-weight: bold; }

.font {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.tables[border="1"] {
  border-collapse:collapse;
  color:#0000000;
}
.style1 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
.style9 {font-size: 27px; font-weight: bold; }
.style10 {font-size: x-large}
</style>
<script type="text/javascript">
window.print();
window.onfocus=function(){ window.close();}
</script>
<table width="803" align="center">
  <tr>
    <td width="92" rowspan="3" align="center"><img src="../img/kop.jpg" /></td>
    <td width="695" align="center"><span class="style10">PEMERINTAH KABUPATEN SAROLANGUN </span></td>
  </tr>
  <tr>
    <td align="center"><span class="style9">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</span></td>
  </tr>
  
  <tr>
    <td align="center"><em>Komplek. Perkantoran Gunung Kembang Kode Pos. (37481) </em></td>
  </tr>
  <tr>
    <td height="10" colspan="2" align="center" valign="top"><img src="../img/icon-file/kop.jpg" height="8"/></td>
  </tr>
  <tr>
    <td height="54" colspan="2" align="center" valign="middle" class="style1"><u class="style2">TANDA TERIMA BERKAS PERMOHONAN AKTA LAHIR</u> </td>
  </tr>
  <tr>
    <td height="135" colspan="2" align="left" valign="top" class="font"><table border="0" cellpadding="4" cellspacing="4" style="width:100%">
      <tr>
        <td width="22%" align="left" valign="top" class="font">Nomor Permohonan </td>
        <td width="37%" align="left" valign="top">: <?php echo $idproses;?></td>
        <td width="17%" align="left" valign="top" class="font">Tempat Lahir </td>
        <td width="24%" align="left" valign="top">: <?php echo $tltermohon;?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Tanggal Permohonan </td>
        <td align="left" valign="top">: <?php echo date('d-m-Y');?></td>
        <td align="left" valign="top" class="font">Tanggal Lahir </td>
        <td align="left" valign="top">: <?php echo $tgltermohon;?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Nama Pemohon </td>
        <td align="left" valign="top">: <?php echo $namapemohon;?></td>
        <td align="left" valign="top" class="font">Kecamatan</td>
        <td align="left" valign="top">_____________________</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Nama Anak </td>
        <td align="left" valign="top">: <?php echo $namatermohon;?></td>
        <td align="left" valign="top" class="font">Nomor Blangko AKTE </td>
        <td align="left" valign="top">_____________________</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Anak Ke </td>
        <td align="left" valign="top">: <?php echo $anakke;?></td>
        <td align="left" valign="top" class="font">Jenis Permohonan </td>
        <td align="left" valign="top">_____________________</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Nama Ibu </td>
        <td align="left" valign="top">: <?php echo $nmibu;?></td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="62" align="left" valign="top" class="font">Catatan Pemeriksaan </td>
        <td align="left" valign="top" class="font">___________________________</td>
        <td align="left" valign="top" class="font">&nbsp;</td>
        <td align="left" valign="top" class="font">&nbsp;</td>
      </tr>
      <tr>
        <td class="font">&nbsp;</td>
        <td class="font">&nbsp;</td>
        <td colspan="2" class="font"><table style="width:100%" border="0">
          <tr>
            <td width="112" align="right" class="font">Sarolangun,</td>
            <td width="211" class="font"> <?php echo date('d F Y');?> </td>
          </tr>
          <tr>
            <td class="font">&nbsp;</td>
            <td class="font">&nbsp;</td>
          </tr>
          <tr>
            <td class="font">&nbsp;</td>
            <td class="font">&nbsp;</td>
          </tr>
          <tr>
            <td class="font">&nbsp;</td>
            <td class="font"><strong>Nama</strong></td>
          </tr>
        </table>          </td>
        </tr>
    </table></td>
  </tr>
</table>
<p align="center">---------------------------------------------------------------------------------------------------------------------------------------------</p>
<table width="803" height="596" align="center">
  <tr>
    <td width="92" rowspan="3" align="center"><img src="../img/kop.jpg" /></td>
    <td width="695" height="38" align="center"><span class="style10">PEMERINTAH KABUPATEN SAROLANGUN </span></td>
  </tr>
  <tr>
    <td height="33" align="center"><span class="style9">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</span></td>
  </tr>
  <tr>
    <td height="21" align="center"><em>Komplek. Perkantoran Gunung Kembang Kode Pos. (37481) </em></td>
  </tr>
  <tr>
    <td height="10" colspan="2" align="center" valign="top"><img src="../img/icon-file/kop.jpg" height="8"/></td>
  </tr>
  <tr>
    <td height="38" colspan="2" align="center" valign="middle" class="style1"><u class="style2">KARTU KENDALI BERKAS PERMOHONAN AKTA LAHIR</u> </td>
  </tr>
  <tr>
    <td height="38" colspan="2" align="center" valign="middle" class="style1"><table border="0" cellpadding="4" cellspacing="4" style="width:100%">
      <tr>
        <td width="22%" align="left" valign="top" class="font">Nomor Permohonan </td>
        <td width="37%" align="left" valign="top">: <?php echo $idproses;?></td>
        <td width="17%" align="left" valign="top" class="font">Tempat Lahir </td>
        <td width="24%" align="left" valign="top">: <?php echo $tltermohon;?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Tanggal Permohonan </td>
        <td align="left" valign="top">: <?php echo date('d-m-Y');?></td>
        <td align="left" valign="top" class="font">Tanggal Lahir </td>
        <td align="left" valign="top">: <?php echo $tgltermohon;?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Nama Pemohon </td>
        <td align="left" valign="top">: <?php echo $namapemohon;?></td>
        <td align="left" valign="top" class="font">Kecamatan</td>
        <td align="left" valign="top">_____________________</td>
      </tr>
      <tr>
        <td class="font">&nbsp;</td>
        <td class="font">&nbsp;</td>
        <td colspan="2" class="font">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="312" colspan="2" align="center" valign="middle" class="style1"><table height="393" border="1" cellpadding="4" cellspacing="0" class="tables" style="width:100%">
      <tr>
        <td height="77" class="tables">&nbsp;</td>
        <td class="tables">&nbsp;</td>
      </tr>
      <tr>
        <td height="77" class="tables">&nbsp;</td>
        <td class="tables">&nbsp;</td>
      </tr>
      <tr>
        <td height="77" class="tables">&nbsp;</td>
        <td class="tables">&nbsp;</td>
      </tr>
      <tr>
        <td height="160" class="tables">&nbsp;</td>
        <td class="tables">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="865" border="0" align="center" cellpadding="4" cellspacing="4">
  <tr>
    <td width="818" class="font"><strong>&copy; <?php echo date('y');?> DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KABUPATEN SAROLANGUN </strong></td>
  </tr>
</table>
<p align="center">&nbsp;</p>

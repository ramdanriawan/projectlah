<?php
session_start();
$idproses		= $_GET['id_proses'];
$idkategori 	= $_GET['id_kategori'];
$idsubkategori	= $_GET['id_sub_kategori'];
$nik			= $_GET['nik'];
$nikt			= $_GET['nikt'];
$namat			= $_GET['nmtermohon'];
$agama			= $_GET['agama'];
$namapasangan	= $_GET['namapasangan'];
$namap			= $_GET['nmpemohon'];
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
$pimpinan = $rpim['pimpinan'];
?>
<style type="text/css">
.style10 {font-size: x-large}
.style9 {font-size: 27px; font-weight: bold; }

.font {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.tables[border="1"] {
  border-collapse:collapse;
  color:#0000000;
}
.tr[border="0"] {

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
    <td height="135" colspan="2" align="left" valign="top" class="font"><table border="0" cellpadding="4" cellspacing="4" style="width:100%">
      <tr>
        <td width="22%" align="left" valign="top" class="font"></td>
        <td width="37%" align="left" valign="top"></td>
        <td width="14%" align="left" valign="top" class="font">No. Registrasi </td>
        <td width="24%" align="left" valign="top">_____________________</td>
      </tr>
	  <tr >
		<td height="100" colspan="4" align="center" valign="middle" class="style1">
			<table  height="50" border="2" cellpadding="10" cellspacing="0"  class="tables" style="width:100%">
				<tr>
					<td>
					<table height="" cellpadding="" cellspacing="1"  class="tables" style="width:40%">
						<tr>
							<td  align="left" valign="top" class="style1">DATA PELAPOR </td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">NAMA</td>
							<td  class="font" style="padding-left:50;"> : <?php echo $namap; ?> </td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">Tgl LAPOR</td>
							<td valign="top" class="font" style="padding-left:50;"> : <?php echo date('d-m-Y');?></td>
						</tr>
					</table>
					</td>
				</tr>
				
			</table>
		</td>
	  </tr>
	  <tr >
		<td height="100" colspan="4" align="center" valign="middle" class="style1">
			<table  height="50" border="2" cellpadding="10" cellspacing="0"  class="tables" style="width:100%">
				<tr>
					<td>
					<table height="50" cellpadding="1" cellspacing="1"  class="tables" style="width:40%">
						<tr>
							<td  align="left" valign="top" class="style1">DATA PASANGAN </td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">SUAMI</td>
							<td  class="font" style="padding-left:50;"> : <?php echo $namap; ?> </td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">ISTRI</td>
							<td  class="font" style="padding-left:50;"> : <?php echo $namapasangan; ?> </td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">AGAMA</td>
							<td  class="font" style="padding-left:50;"> : <?php echo $agama; ?> </td>
						</tr>
					</table>
					</td>
				</tr>
				
			</table>
		</td>
	  </tr>
	  
	  <tr >
	  <tr><td class="style1"><b>CATATAN	:</b></td></tr>
		<td height="100" colspan="4" align="center" valign="middle" class="style1">
			<table  height="100" border="2" cellpadding="10" cellspacing="0"  class="tables" style="width:100%">
				<tr height="100">
				</tr>
			</table>
		</td>
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
            <td class="font"><strong><?php echo $pengguna; ?></strong></td>
          </tr>
        </table>          </td>
        </tr>
    </table></td>
  </tr>
</table>
<p align="center">---------------------------------------------------------------------------------------------------------------------------------------------</p>
<table width="803" height="596" align="center">
  
  <tr>
    <td height="38" colspan="2" align="center" valign="middle" class="style1"><table border="0" cellpadding="4" cellspacing="4" style="width:100%">
      <tr>
        <td width="22%" align="left" valign="top" class="font">Nomor Register </td>
        <td width="37%" align="left" valign="top" class="font" >: <?php echo $idproses; ?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Jam Lapor</td>
        <td align="left" valign="top" class="font"> : <?php echo time('mm:ss'); ?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="font">Tanggal Lapor </td>
        <td align="left" valign="top" class="font"> : <?php echo date('d-m-Y');?></td>
      </tr>
	  <tr>
        <td align="left" valign="top" class="font">Nama Pelapor </td>
        <td align="left" valign="top" class="font">:  <?php echo $namap; ?></td>
      </tr>
      <tr>
        <td class="font">&nbsp;</td>
        <td class="font">&nbsp;</td>
        <td colspan="2" class="font">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr >
		<td height="100" colspan="4" align="center" valign="middle" class="style1">
			<table  height="50" border="2" cellpadding="10" cellspacing="0"  class="tables" style="width:100%">
				<tr>
					<td>
					<table height="50" cellpadding="1" cellspacing="1"  class="tables" style="width:40%">
						<tr>
							<td  align="left" valign="top" class="style1"><u>DATA PASANGAN</u></td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">SUAMI</td>
							<td  class="font" style="padding-left:50;"> : <?php echo $namap; ?> </td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">ISTRI</td>
							<td  class="font" style="padding-left:50;"> : <?php echo $namapasangan; ?> </td>
						</tr>
						<tr>
							<td  align="left" valign="top" class="font" style="padding-left:50;">AGAMA</td>
							<td  class="font" style="padding-left:50;"> : <?php echo $agama; ?> </td>
						</tr>
					</table>
					</td>
				</tr>
				
			</table>
		</td>
	  </tr>
  <tr>
    <td height="250" colspan="2" align="center" valign="middle" class="style1"><table height="250" border="1" cellpadding="4" cellspacing="0" class="tables" style="width:100%">
      <tr>
      	<td width="5%" align="center">1</td>
        <td height="77" width="40%" class="tables font" valign="top" align="center">
        	<table>
        		<tr>
        			<td height="55" class="font" align="center" valign="top">PENERIMA BERKAS</td>
        		</tr>
        		<tr>
        			<td class="font" align="center" valign="bottom"><strong><u><?php echo $pengguna; ?></u></strong></td>
        		</tr>
        	</table>
        </td>
        <td class="tables font" valign="top" align="center"><span>Catatan Penerima Berkas</span></td>
        
      </tr>
      <tr>
      	<td width="5%" align="center">2</td>
        <td height="77" width="40%" class="tables font" valign="top" align="center">
        	<table>
        		<tr>
        			<td height="55" class="font" align="center" valign="top">DIENTRY OLEH</td>
        		</tr>
        		<tr>
        			<td class="font" align="center" valign="bottom"><strong><u><?php echo $pengguna; ?></u></strong></td>
        		</tr>
        	</table>
        </td>
        <td class="tables">&nbsp;</td>
      </tr>
      <tr>
      	<td width="5%" align="center">3</td>
        <td height="77" width="40%" class="tables font" valign="top" align="center">
        	<table>
        		<tr>
        			<td height="55" class="font" align="center" valign="top">PETUGAS REGISTRASI</td>
        		</tr>
        		<tr>
        			<td class="font" align="center" valign="bottom">_____________</td>
        		</tr>
        	</table>
        </td>
        <td class="tables">&nbsp;</td>
      </tr>
      <tr>
      	<td width="5%" align="center">4</td>
        <td height="77" width="40%" class="tables font" valign="top" align="center">
        	<table>
        		<tr>
        			<td height="55" class="font" align="center" valign="top">KABID PENCATATAN SIPIL</td>
        		</tr>
        		<tr>
        			<td class="font" align="center" valign="bottom"><strong><u><?php echo $pimpinan; ?></u></strong></td>
        		</tr>
        	</table>
        </td>
       <td height="77" class="tables font" valign="top" align="center"><span>Catatan Verifikasi KaBid</span></td>
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

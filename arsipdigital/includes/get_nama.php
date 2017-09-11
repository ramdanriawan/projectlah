<?php
include("../includes/config.php");
	$layanan = $_POST['layanan'];
	$nik = $_POST['nik'];


//Layanan 101
if($layanan == '101'){
    $query = "SELECT * FROM BIODATA_WNI,DATA_KELUARGA WHERE BIODATA_WNI.NIK = DATA_KELUARGA.NIK_KK AND biodata_wni.nik ='$nik'";
	$parsed = oci_parse($conn2,$query);
	oci_execute($parsed);
	$data=oci_fetch_array($parsed);
?>
<div class="form-group">
    <<label>Nama Termohon</label>
    <div class="span7"><input type="text" value="<?php echo $data['NAMA_LGKP'];?>" id="nmtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>Alamat Termohon</label>
    <div class="span7"><input type="text" value="<?php echo $data['ALAMAT'];?>" id="almtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>No Blangko</label>
    <div class="span7"><input type="text" value="" id="telptermohon" class="form-control" readonly="true"/></div>
</div>


<?php
//Layanan 102
}elseif($layanan == '102'){
    $query = $conn->query("SELECT a.nama_penduduk,a.tmpt_lahir,a.tgl_lahir,a.nama_lgkp_ibu,b.alamat,b.no_hp, DAY(a.tgl_lahir) as tanggal, MONTH(a.tgl_lahir) as bulan, YEAR(a.tgl_lahir) as tahun FROM biodata_wni a JOIN data_keluarga b ON a.nik = b.nik AND a.nik ='$nik'");
    $data = $query->fetch_assoc();
?>
<div class="form-group">
    <<label>Nama Termohon</label>
    <div class="span7"><input type="text" value="<?php echo $data['nama_penduduk'];?>" id="nmtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>Alamat Termohon</label>
    <div class="span7"><input type="text" value="<?php echo $data['alamat'];?>" id="almtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>No Blangko</label>
    <div class="span7"><input type="text" value="<?php echo $data['no_hp'];?>" id="telptermohon" class="form-control" readonly="true"/></div>
</div>


<?php
//Layanan 103 dan seterusnya
}elseif($layanan == '103'){
$query = "SELECT a.NAMA_LGKP,a.TMPT_LHR,a.TGL_LHR,a.NAMA_LGKP_IBU,b.ALAMAT, a.TGL_LHR FROM BIODATA_WNI a JOIN DATA_KELUARGA b ON a.NIK = b.NIK_KK AND a.NIK ='$nik'";
$parsed = oci_parse($conn2,$query);
oci_execute($parsed);
$data=oci_fetch_array($parsed);

	$dateValue = $data['TGL_LHR'];
	$time=strtotime($dateValue);
	$tgl_lahir = date('d',$time);
	//$bln_lahir = $data['bulan'];
	$bln_lahir = date('m',$time);
	$thn_lahir = date('Y',$time);
	$tgllahir  = date('d-m-Y',$time);

	$tanggal_today = date('d');
	$bulan_today=date('m');
	$tahun_today = date('Y');

	$harilahir=gregoriantojd($bln_lahir,$tgl_lahir,$thn_lahir);
	//menghitung jumlah hari sejak tahun 0 masehi
	$hariini=gregoriantojd($bulan_today,$tanggal_today,$tahun_today);
	//menghitung jumlah hari sejak tahun 0 masehi
	$umur=$hariini-$harilahir;
	//menghitung selisih hari antara tanggal sekarang dengan tanggal lahir
	$tahun=$umur/365;//menghitung usia tahun
	$sisa=$umur%365;//sisa pembagian dari tahun untuk menghitung bulan
	$bulan=$sisa/30;//menghitung usia bulan
	$hari=$sisa%30;//menghitung sisa hari

	$lahir= "$tgl_lahir-$bln_lahir-$thn_lahir";
	$today= "$tanggal_today-$bulan_today-$tahun_today";

	$umur_termohon =  "Umur Termohon Akta <b style='color: #ff0000'>".floor($tahun)." </b> tahun <b style='color: #ff0000'>".floor($bulan)."</b> bulan <b style='color: #ff0000'> $hari </b> hari.";


	?>
<div class="form-group">
    <<label>Nama Termohon</label>
    <div class="span9"><input type="text" value="<?php echo $data['NAMA_LGKP'];?>" id="nmtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>TT Lahir</label>
    <div class="span5"><input type="text" value="<?php echo $data['TMPT_LHR'];?>" id="tltermohon" class="form-control" readonly="true"/></div>
	<div class="span4"><input type="text" value="<?php echo $tgllahir;?>" id="tgltermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>Alamat</label>
    <div class="span9"><input type="text" value="<?php echo $data['ALAMAT'];?>" id="almtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>Nama Ibu</label>
    <div class="span9"><input type="text" value="<?php echo $data['NAMA_LGKP_IBU'];?>" id="ibutermohon" class="form-control" name="namaibu" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>Anak Ke</label>
    <div class="span2"><input type="text" id="anakketermohon" class="form-control" value=""/></div>
</div>
<div class="form-group">
	<<label>Perhitungan</label>
	<div class="span9">
    Tgl Lahir <?php echo $lahir;?> <br>
    Tgl Sekarang <?php echo $today;?><br>
    <?php echo $umur_termohon;?><br><br>
    *** Jumlah hari sampai hari ini <b style="color: #ff0000"><?php echo $umur; ?> </b> Hari ***

	</div>
</div>
<?php
}elseif($layanan > 103){
$query = "SELECT a.NAMA_LGKP,a.AGAMA,b.ALAMAT,c.DESCRIP
			FROM BIODATA_WNI a
			JOIN DATA_KELUARGA b ON a.NIK = b.NIK_KK
			JOIN AGAMA_MASTER c ON a.AGAMA = c.NO
			AND a.NIK ='$nik'";
$parsed = oci_parse($conn2,$query);
oci_execute($parsed);
$data=oci_fetch_array($parsed);
?>
<div class="form-group">
    <<label>Nama Suami</label>
    <div class="span9"><input type="text" value="<?php echo $data['NAMA_LGKP'];?>" id="nmtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>Alamat</label>
    <div class="span9"><input type="text" value="<?php echo $data['ALAMAT'];?>" id="almtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>AGAMA</label>
    <div class="span9"><input type="text" value="<?php echo $data['DESCRIP'];?>" id="agamatermohon" class="form-control" readonly="true"/></div>
</div>
<?php
}elseif($layanan == 110){
$query = "SELECT a.NAMA_LGKP,a.TMPT_LHR,a.TGL_LHR,a.NAMA_LGKP_IBU,b.SUAMI_NIK,b.ISTRI_NIK,b.ISTRI_NAMA_LGKP,c.DESCRIP,d.ALAMAT
			FROM BIODATA_WNI a
			JOIN CAPIL_KAWIN b ON a.NIK = b.SUAMI_NIK
			JOIN AGAMA_MASTER c ON b.KAWIN_AGAMA = c.NO
			JOIN DATA_KELUARGA d ON a.NIK = d.NIK_KK
			AND a.NIK ='$nik'";
$parsed = oci_parse($conn2,$query);
oci_execute($parsed);
$data=oci_fetch_array($parsed);
?>
<div class="form-group">
    <<label>Nama Termohon</label>
    <div class="span9"><input type="text" value="<?php echo $data['NAMA_LGKP'];?>" id="nmtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>NIK ISTRI</label>
    <<label><input type="text" value="<?php echo $data['ISTRI_NIK'];?>" id="nikistri" class="form-control" readonly="true"/></div>
    <div class="span2">NAMA ISTRI</div>
	<div class="span4"><input type="text" value="<?php echo $data['ISTRI_NAMA_LGKP'];?>" id="istritermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>Alamat</label>
    <div class="span9"><input type="text" value="<?php echo $data['ALAMAT'];?>" id="almtermohon" class="form-control" readonly="true"/></div>
</div>
<div class="form-group">
    <<label>AGAMA</label>
    <div class="span9"><input type="text" value="<?php echo $data['DESCRIP'];?>" id="agamatermohon" class="form-control" readonly="true"/></div>
</div>
<?php
}
?>

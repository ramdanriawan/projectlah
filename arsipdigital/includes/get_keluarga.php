<?php
include("../includes/config.php");
$nik = $_POST['nik'];
$query = "SELECT * FROM BIODATA_WNI,DATA_KELUARGA WHERE BIODATA_WNI.NIK = DATA_KELUARGA.NIK_KK AND biodata_wni.nik ='$nik'";
$parsed = oci_parse($conn2,$query);
oci_execute($parsed);
$data=oci_fetch_array($parsed);
?>
<div class="form-group">
    <label>Nama</label>
    <div class="span9"><input type="text" value="<?php echo $data['NAMA_LGKP'];?>" class="form-control" name="namapemohon" id="namapasangan" readonly="true"/></div>
</div>

<?php

include("../includes/config.php");
$nik = $_POST['nik'];
//$query = "SELECT * FROM BIODATA_WNI,DATA_KELUARGA WHERE BIODATA_WNI.NIK = DATA_KELUARGA.NIK_KK AND biodata_wni.nik ='$nik'";
//$parsed = oci_parse($conn2,$query);
//oci_execute($parsed);
//$data=oci_fetch_array($parsed);

$sql = $conn->query("SELECT * FROM BIODATA_WNI,DATA_KELUARGA WHERE BIODATA_WNI.NIK = DATA_KELUARGA.NIK AND biodata_wni.nik ='$nik'");
$data=$sql->fetch_assoc();
?>
<div class="form-group">
    <label>Nama</label>
    <div class="span9"><input type="text" value="<?php echo $data['nama_penduduk'];?>" name="namapemohon" id="namapemohon" class="form-control" readonly="true"/></div>
</div>

<div class="form-group">
    <label>Alamat</label>
    <div class="span9"><input type="text" value="<?php echo $data['alamat'];?>" name="alamat" id="alamat" class="form-control" readonly="true"/></div>
</div>

<div class="form-group">
    <label>No Blangko</label>
    <div class="span9"><input type="text" value="<?php echo $data['no_hp'];?>" name="No Blangko" id="telp" class="form-control" readonly="true"/></div>
</div>

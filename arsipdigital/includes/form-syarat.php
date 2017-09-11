<?php
include "../includes/config.php";
$subkategori = $_POST['subkategori'];
$no=0;
$sqltotal  = $conn->query("SELECT COUNT(id_syarat) AS total FROM ad_syarat WHERE id_sub_kategori='$subkategori'");
$total	   = $sqltotal->fetch_assoc();

$sqlsyarat = $conn->query("SELECT * FROM ad_syarat WHERE id_sub_kategori='$subkategori'");
?>


<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Syarat Layanan</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<div class="box-body">

					<div class="form-group">
						<label>Jumlah Syarat</label>
						<div class="span1"><input type="text" id="jumlah" name="jumlah" readonly="true" class="form-control" value="<?php echo $total['total'];?>"/></div>
					</div>
					<?php
					while($syarat=$sqlsyarat->fetch_assoc()){ $no++
						?>
						<div class="form-group">
                            <div class="span10"><?php echo $no;?>. <?php echo $syarat['nama_syarat'];?></div>
                            <div class="span2">
                                <label class="checkbox inline" style="margin-left:30px;">
                                    <input type="checkbox" name="chk[]" class="chk" value="<?php echo $syarat['id_syarat'];?>" id="chk-<?php echo $no;?>"/> &nbsp;Ada
                                </label>
                            </div>
                        </div>
						<?php
					}
					?>

    </div>

		<div class="box-footer">
			<input type="button" onClick="proses_layanan();popup_print();" class="btn btn-primary" value="Simpan Perubahan">
			<input type="button" onClick="awal();" class="btn btn-danger" value="Kembali">
		</div>
</div>

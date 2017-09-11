<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Data Pemohon</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form">
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputNik">NIK :</label>
				<input type="text" name="nik" id="nik" class="form-control" onblur="get_pemohon();" placeholder="Tekan TAB Setelah memasukkan NIK..."/>
			</div>
			<div id="form-pemohon">
				<div class="form-group">
					<label for="exampleInputNama">Nama :</label>
					<input type="text" readonly="true" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="exampleInputAlamat">Alamat :</label>
					<input type="text" readonly="true" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="exampleInputNoBlangko">NoBlangko :</label>
					<input type="text" readonly="true" class="form-control"/>
				</div>
			</div>
		</div>
		<!-- /.box-body -->

	</form>
</div>



<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Kategori Layanan</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form">
		<div class="box-body">
			<div class="form-group">

				<label for="exampleInputKat">Pilih Kategori Layanan :</label>
						<select name="select" id="kategori" onChange="tampil_form();" class="form-control">
								<option value="0">Pilih Kategori Layanan...</option>
								<?php
								include "../includes/config.php";
								$sql = $conn->query("SELECT * FROM ad_kategori");
								while($r=$sql->fetch_assoc()){
								?>
									<option value="<?php echo $r['id_kategori'];?>"><?php echo $r['nama_kategori'];?></option>
								<?php
								}
								?>
						</select>

			</div>

		</div>
		<!-- /.box-body -->

	</form>
</div>

<!--
<div class="block">
	<input type="button" onClick="tampil_form();" class="btn btn-warning" value="Lanjutkan ke tahap berikutnya">
</div>
-->

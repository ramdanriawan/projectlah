<?php
include "../engine/phpqrcode/qrlib.php";
$layanan = $_POST['layanan'];
$nik	 = $_POST['nik'];
$random	 = date('dmY')."".rand(0,100);
?>

			<div class="row-fluid">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Detail Registrasi akta Pengesahan Anak</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div class="box-body">
                        <div class="form-group">
                            <label>Kode Register akta</label>
                            <div class="span3"><input type="text" value="<?php echo $random;?>" id="kode" class="form-control" class="form-control" readonly="true"/></div>
							<div class="span6" align="right">
							<?php
							//QRcode::png($random,"../image.png","H",4,4);
							//echo "<img src='image.png'>";
							echo "<img src='https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=$random&choe=UTF-8'>";
							?></div>
                        </div>
						<div class="form-group">
                            <label>Nik Pemohon</label>
                            <div class="span9"><input type="text" id="pemohon" class="form-control" name="pemohon" class="form-control" readonly="true"/></div>
                        </div>
						<div class="form-group">
                            <label>Nama Pemohon</label>
                            <div class="span9"><input type="text" id="nmpemohon" class="form-control" name="nmpemohon" class="form-control" readonly="true"/></div>
                        </div>
						<div class="form-group">
                            <label>Alamat</label>
                            <div class="span9"><input type="text" id="almpemohon" class="form-control" name="almpemohon" class="form-control" readonly="true"/></div>
                        </div>
						<div class="form-group">
                            <label>No Blangko</label>
                            <div class="span9"><input type="text" id="telppemohon" class="form-control" name="telppemohon" class="form-control" readonly="true"/></div>
                        </div>
						<div class="form-group">
                            <label>Kategori Pelayanan</label>
                            <div class="span9"><input type="text" id="kategori" class="form-control" value="<?php echo $layanan;?>" class="form-control" readonly="true"/></div>
                        </div>

                    </div>
				</div>

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Input Data Registrasi Akta</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div class="box-body">
						<div class="form-group">
                            <label>NIK Termohon</label>
                            <div class="span7"><input type="text" id="nik_regis" class="form-control" placeholder="Tekan TAB setelah memasukkan NIK ..." onblur="get_nama();"/></div>
                        </div>
						<div id="form-nama">
						<div class="form-group">
                            <label>Nama Termohon</label>
                            <div class="span7"><input type="text" readonly="true" class="form-control"/></div>
                        </div>
						</div>
						<!-- Ajax Form -->
						<div class="form-group">
                            <label>NIK ISTRI</label>
                            <div class="span4"><input type="text" id="nik_pasangan" class="form-control" placeholder="Tekan TAB setelah memasukkan NIK ..." onblur="get_pasangan();"/></div>
                        </div>
                        <div id="form-pasangan">
						<div class="form-group">
                            <label>Nama Termohon</label>
                            <div class="span7"><input type="text" readonly="true" class="form-control"/></div>
                        </div>
						</div>

						<div class="form-group">
							<label>Estimasi Pelayanan</label>
							<div class="span6"><input type="text" id="tgl_estimasi" name="tgl_estimasi" class="form-control" required/></div>
						</div>

						<?php
						include "../includes/config.php";
						$sqlcari = $conn->query("SELECT * FROM ad_sub_kategori WHERE id_kategori='$layanan'");
						?>
						<div class="form-group">
                            <label>Pilih Sub Pelayanan</label>
                            <div class="span7">
                                <select name="select" name="subkategori" id="subkategori" onchange="tampil_syarat();" class="form-control">
                                        <option value="0">Pilih Sub Kategori Layanan..</option>
                                        <?php
										while($row=$sqlcari->fetch_array()){
											?>
											    <option value="<?php echo $row['id_sub_kategori'];?>"><?php echo $row['nama_sub_kategori'];?></option>
											<?php
										}
										?>

                                </select>
                            </div>
                        </div>

                    </div>
                </div>
			</div>

			<div class="row-fluid">
				<div id="form-syarat" class="span12">

				</div>
      </div>

			<script type="text/javascript" src="js/custom/date.js"></script>

<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Profil Operator</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Profil Operator</li>
	</ol>
</section>

		<?php
		//error_reporting(0);
		include "includes/config.php";
		if (empty($_GET['id'])) {
			echo"
				<script>
					window.location.href = 'index.php';
				</script>
			";
		}

		$id = $_GET['id'];
		$sql=$conn->query("SELECT * FROM ad_user WHERE userid='$id'");
		$r=$sql->fetch_assoc();
		$level = $r['level'];
		$status = $r['status'];

		if($level == 1){
			$levelop = "Admin";
		}else{
			$levelop = "Staf";
		}


		?>

		<section class="content">

			<form method="post" enctype="multipart/form-data" id="fileinfo" name="fileinfo" onsubmit="return ubah_profil();">
			<div id="info"></div>
			<div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
					<div id="sukses"></div>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Konfigurasi Profil</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Konfigurasi Kantor</a></li>
              <li class="pull-left header"><i class="fa fa-th"></i> Konfigurasi Aplikasi</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
										<div class="form-group">
		                  <label>ID Operator</label>
		                  <input type="text" class="form-control" name="kode" value="<?php echo $_GET['id'];?>" id="kode" readonly="true" placeholder="Enter ...">
		                </div>
										<div class="form-group">
		                  <label>Nama Operator</label>
		                  <input type="text" class="form-control" name="nama" value="<?php echo $r['username'];?>" id="nama" placeholder="Username ...">
		                </div>

										<div class="form-group">
											<label>Level</label>
													<select name="level" id="level" name="level" required class="form-control" >
														<option value="<?php echo $r['level'];?>"><?php echo $levelop;?></option>
														<option value="">Pilih Level....</option>
														<option value="1">Admin</option>
														<option value="2">Staf</option>
													</select>
										</div>

										<div class="form-group">
												<label>Tanggal Terdaftar</label>
												<input type="text"  name="tanggal" value="<?php echo $r['tgl_daftar'];?>" readonly="readonly" class="form-control" />
										</div>

										<div class="form-group">
												<label>Password</label>
												<input type="password" name="password" value="<?php echo $r['password'];?>" class="form-control" />
										</div>

										<div class="form-group">
												<label>Avatar</label><br>
													<img src="img/users/<?php echo $r['avatar'];?>" class="img-polaroid" width="200" height="200" class="img-responsive"><br><br>
													<input type="file" name="file" id="file" required/>
										</div>

										<div class="row-form clearfix">
												<label>Status</label>
												<div class="span9">
											<?php
											if($status == 1){
												?>
														<label class="checkbox inline">
																<input type="radio" name="status" id="status" value="1" checked="checked"/> Aktif
														</label>
														<label class="checkbox inline">
																<input type="radio" name="status" id="status" value="0"/> Tidak Aktif
														</label>
												<?php
											}else{
												?>
														<label class="checkbox inline">
																<input type="radio" name="status" id="status" value="1"/> Aktif
														</label>
														<label class="checkbox inline">
																<input type="radio" name="status" id="status" value="0" checked="checked"/> Tidak Aktif
														</label>
												<?php
											}
											?>
												</div>
										</div>

										<div class="block">
										<br>
											<input type="button" onClick="ubah_profil();" id="smButton" class="btn btn-primary" value="Simpan Perubahan" style="float:right;">
											<br><br>
										</div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_2-2">
								<div class="form-group">
		                <label>Nama Bagian / Seksi</label>
		                <input type="text" name="namainstansi" id="namainstansi" value="<?php echo $r['bagian'];?>" class="form-control"/>
		            </div>

								<div class="form-group">
		                <label>Pimpinan</label>
		                <input type="text" name="pimpinan" id="pimpinan" value="<?php echo $r['pimpinan'];?>" class="form-control"/>
		            </div>
								<div class="block">
								<br>
									<input type="button" onClick="simpan_instansi();" id="smButton" class="btn btn-primary" value="Simpan Perubahan" style="float:right;">
								<br><br>
								</div>
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

        </section>



		<script type="text/javascript" src="js/custom/operator.js"></script>
		<script type="text/javascript" src="js/custom/konfigurasi.js"></script>

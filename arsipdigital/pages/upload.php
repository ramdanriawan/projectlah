<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Daftar Upload File Arsip</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">DaftarUpload File Arsip</li>
	</ol>
</section>

<section class="content">
		<div id="info"></div>

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Upload File Arsip</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<div class="box-body">

		<div class="workplace">

			<div class="row-fluid">

                <div class="span12">
                    <div class="head clearfix">
                        <div class="isw-documents"></div>
                        <h1>Data Registrasi</h1>
                    </div>
                    <div class="block-fluid">

                        <div class="row-form clearfix">
                            <label>Nomor Registrasi</label>
							<?php
							if(isset($_SESSION['kode'])){
								?>
								<div class="span3"><input type="text" name="kode" id="kode" class="form-control" value="<?php echo $_SESSION['kode'];?>" readonly="true"></div>
								<?php
							}else{
								?>
								<div class="span3"><input type="text" name="kode" id="kode" class="form-control" placeholder="Masukkan Nomor Registrasi..." value="<?php if(isset($_GET['kode'])){echo $_GET['kode'];}?>"/></div>
								<?php
							}
                            ?>
                        </div>
						<?php
						if(!isset($_SESSION['kode'])){
						?>
						<div class="block">
						<input type="button" onClick="tampil_form();" id="smButton" class="btn btn-primary" value="Cari Data">
						</div>
						<?php
						}
						?>
                </div>
				</div>
			</div>
			<?php
			if(isset($_SESSION['folder'])){
				?>
				<div class="row-fluid" id="tampil-form">

                <div class="span12">
                    <div class="head clearfix">
                        <div class="isw-download"></div>
                        <h1>Upload File</h1>
                    </div>
                    <div class="block-fluid">
                        <div class="row-form clearfix">
							<div id="images"></div>
                        </div>
						<div class="block">
							<input type="button" onclick="scanToJpg();" id="smButton" class="btn btn-default" value="Scan Document">
						</div>
                	</div>
					<script src="js/scannerjs/scanner.js" type="text/javascript"></script>






                    <!-- <div class="block-fluid"> -->
                        <!-- <div id="uploader_v5"><center>Browser don't support a HTML5</center></div> -->
                    <!-- </div> -->
                </div>

				</div>
				<div class="row-fluid">
                <div class="span12">

					<div class="block">
						<input type="button" onClick="ubah_status();" id="smButton" class="btn btn-primary" value="Selesai dan Menuju ke Daftar Arsip">
					</div>

				</div>
				</div>
				<?php
			}
			?>

		</div>
	</div>
</div>

</section>

		<div class="dr"><span></span></div>

		<script type="text/javascript" src="js/custom/upload.js"></script>
		<script type="text/javascript" src="js/custom/scan.js"></script>

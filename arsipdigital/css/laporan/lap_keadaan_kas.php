

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li class="active">
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="<?php echo base_url(); ?>">Beranda</a> / Laporan Keadaan Kas
					</li>
				</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<span id="clocktimeday"></span>
				</div><!-- /.nav-search -->
			</div>

			<div class="page-content">
				<div class="page-header">
					<h1>
						Beranda
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							Laporan Keadaan Kas
						</small>
					</h1>
				</div><!-- /.page-header -->

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="alert alert-block alert-success">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>

							<i class="ace-icon fa fa-book green"></i>


							<strong class="green">
								Laporan Keadaan Kas
							</strong>

						</div>

						<div class="row">

							<form action="" method="post" target="_blank">
									&nbsp;&nbsp;&nbsp;
									<label>Tahun</label>
											<select class="md-input" name="tahun" id="tahun">
												<?php
												$max = date('Y');
												for ($i=2013; $i <= $max; $i++) {
												?>
													<option value="<?php echo $i; ?>" <?php if ($i == $thn) { echo "selected";} ?>><?php echo $i; ?></option>
												<?php
												} ?>
											</select>

									<label>Bulan</label>
											<select class="md-input" name="bulan" id="bulan">
												<option value="">-</option>
												<?php
												for ($i=1; $i <= 12 ; $i++) {
													if ($i < 10) {
														$i = "0".$i;
													}
												?>
													<option value="<?php echo $i; ?>" <?php if ($i == $bln) { echo "selected";} ?>><?php echo $i; ?></option>
												<?php
												} ?>
											</select>

											<button type="submit" name="btncek" class="btn btn-primary" style="padding-top:0px;padding-bottom:0px;">Cetak</button>

							</form>


						</div>

						<!-- /.row -->


						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

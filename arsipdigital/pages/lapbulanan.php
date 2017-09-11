<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Laporan Harian</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Laporan Harian</li>
	</ol>
</section>

<section class="content">

			<!--
            <ul class="buttons">
                <li>
                    <a href="#" class="link_bcPopupSearch"><span class="icon-search"></span><span class="text">Search</span></a>

                    <div id="bcPopupSearch" class="popup">
                        <div class="head clearfix">
                            <div class="arrow"></div>
                            <span class="isw-zoom"></span>
                            <span class="name">Cari Data</span>
                        </div>
                        <div class="body search">
                            <input type="text" id="filter" placeholder="Masukkan No. Registrasi..." name="search" onblur="filterdata();"/>
                        </div>
                        <div class="footer">
                            <button class="btn" type="button">Search</button>
                            <button class="btn btn-danger link_bcPopupSearch" type="button">Close</button>
                        </div>
                    </div>
                </li>
            </ul>
			-->

			<div class="workplace">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-book"></i> Filter Preview</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">

                    <div class="block-fluid">

                        <div class="row-form clearfix">
                            <label>Periode Bulan</label>
                            <div class="span2">
															<select name="bulan" id="bulan" onchange="filterdata();" class="form-control">
																<option value="">--- Pilih Bulan ---</option>
																<option value="1">Januari</option>
																<option value="2">Februari</option>
																<option value="3">Maret</option>
																<option value="4">April</option>
																<option value="5">Mei</option>
																<option value="6">Juni</option>
																<option value="7">Juli</option>
																<option value="8">Agustus</option>
																<option value="9">September</option>
																<option value="10">Oktober</option>
																<option value="11">November</option>
																<option value="12">Desember</option>
															</select>
														</div>
														<div class="span6"><font color="red">*Jika Periode Bulan tidak dipilih, Secara otomatis akan memilih bulan saat ini.</font></div>
											</div>
                </div>
          </div>
					<div class="box-footer">
						<div class="span2" align="right"><button class="btn btn-primary" href="#" onclick="popup_print();" type="button">Cetak Rekap</button></div>
					</div>
      </div>

			<div id="workplace">

			</div>

			<div class="dr"><span></span></div>

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-book"></i> Filter Sub Pelayanan</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

                    <div class="block-fluid">

                        <div class="row-form clearfix">
                            <div class="span2">Detail Pelayanan</div>
                            <div class="span2">
															<select name="bulan" id="subkategori" onchange="filtersub();" class="form-control">
															<option value="">--- Pilih Detail Pelayanan ---</option>
																<?php
																include "includes/config.php";
																$sql=$conn->query("SELECT * FROM ad_kategori");
																while($r=$sql->fetch_assoc()){
																	?>
																	<option value="<?php echo $r['id_kategori'];?>"><?php echo $r['nama_kategori'];?></option>
																	<?php
																}
																?>
															</select>
														</div>
														<div class="span6"><font color="red">*Silahkan Pilih Kategori terlebih dahulu sebelum melakukan cetak laporan.</font></div>
												</div>
                  	</div>
        </div>
				<div class="box-footer">
					<div class="span2" align="right"><button class="btn btn-primary" href="#" onclick="popup_printsub();" type="button">Cetak Rekap</button></div>
				</div>
      </div>

				<div id="workplacedetail">

				</div>
			</div>




<script type="text/javascript" src="js/custom/bulanan.js"></script>

</section>

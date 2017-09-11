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

				<div class="row-container">
					<div id="sukses"></div>
					<br>
                    <div class="form-group" style="float:left;">
														<label>Filter Preview </label>
														<input type="text" id="tgl_filter" name="tgl_filter" placeholder="Pilih Tanggal..."/>
														<button class="btn btn-mini" onClick="filterdata();" type="button">Preview Data</button>
                    </div>

										<div style="float:right;">
											<button class="btn btn-mini btn-default" onClick="popup_print();" type="button">Cetak Laporan</button>
										</div>

        </div>

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

			<br>
			<div id="workplace">

			</div>



<script type="text/javascript" src="js/custom/harian.js"></script>


</section>

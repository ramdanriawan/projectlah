<?php
if(isset($_SESSION['folder'])){
	unset($_SESSION['folder']);
	unset($_SESSION['kode']);
}
?>

<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Daftar Arsip Status</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Daftar Arsip Status</li>
	</ol>
</section>

<section class="content">

				<div class="row-container">
					<div id="sukses"></div>
					<br>
                    <div class="form-group" style="float:left;">
														<label>Filter Status</label>
															<select name="status" id="status" onchange="filterdata();">
																<option value="">--- Pilih Status ---</option>
																<option value="Sudah Scan">Sudah Scan</option>
																<option value="Belum Scan">Belum Scan</option>
															</select>

														<button class="btn btn-mini" onClick="viewdata();" type="button">Reset</button>
                    </div>
										<div style="float:right;"><button class="btn btn-mini btn-default" onClick="location.href='index.php?page=upload'" type="button">Scan dan Upload Arsip</button></div>

        </div>


			<div class="workplace">
				<br>
			<div id="tampil">

			</div>

            <div class="dr"><span></span></div>
			</div>

</section>


			<script type="text/javascript" src="js/custom/detail.js"></script>

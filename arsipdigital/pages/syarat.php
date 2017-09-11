<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Daftar Syarat Layanan</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Daftar Syarat Layanan</li>
	</ol>
</section>

<section class="content">

				<div class="row-container">
					<div id="sukses"></div>
					<br>
                    <div class="form-group" style="float:right;">
                        <label>Cari Data : </label>
                            <input type="text" id="filter" placeholder="Masukkan Nama Syarat..." name="search" onblur="filterdata();"/>

                            <button class="btn btn-default" type="button">Search</button>
                    </div>
        </div>

		<div id="workplace"></div>

	<!-- Modal untuk tambah kategori---------------->
	<div class="modal fade" id="tambah">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header callout callout-info" style="border-radius:1px;margin-bottom:-5px;">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

						<h4><b>Tambah Syarat Pelayanan</b></h4>
						<p>Form ini digunakan untuk melakukan penambahan data syarat pelayanan.</p>

				</div>
				<div class="modal-body">
					<div id="info"></div>
            <div class="block-fluid">
								<div class="form-group">
                    <div class="span3">ID Persyaratan</div>
                    <div class="span9"><input type="text" name="kode" id="kode" class="form-control"/></div>
                </div>
                <div class="form-group">
                    <div class="span3">Nama Persyaratan</div>
                    <div class="span9"><input type="text" id="nama" name="nama" class="form-control" required/></div>
                </div>
								<div class="form-group">
                    <div class="span3">Sub Kategori Layanan</div>
                    <div class="span3">
                        <select name="subkategori" id="subkategori" class="form-control" required>
                            <option value="">Pilih Sub Kategori...</option>
														<?php
														include "includes/config.php";
														$sql = $conn->query("SELECT * FROM ad_sub_kategori");
														while($r=$sql->fetch_assoc()){
															?>
																 <option value="<?php echo $r['id_sub_kategori'];?>"><?php echo $r['nama_sub_kategori'];?></option>
															<?php
														}
														?>
                        </select>
										</div>
								</div>
                <div class="form-group">
                    <div class="span3">Keterangan</div>
                    <div class="span9"><textarea name="keterangan" id="keterangan" class="form-control"></textarea></div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button onclick="simpan_syarat();" class="btn btn-primary" aria-hidden="true">Simpan Perubahan</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
        </div>
    	</div>
		</div>
	</div>
	<!-- Akhir Modal Tambah --->

	<!-- Modal Edit Kategori --->
	<div class="modal fade" id="edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header callout callout-info" style="border-radius:1px;margin-bottom:-5px;">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

						<h4><b>Ubah Syarat Pelayanan</b></h4>
						<p>Form ini digunakan untuk melakukan perubahan data syarat pelayanan.</p>

				</div>
				<div class="modal-body">
					<div id="info_edit"></div>
            <div class="block-fluid">
								<div class="row-form clearfix">
                    <div class="span4">ID Persyaratan</div>
                    <div class="span8"><input type="text" name="kode" id="kodenya" class="form-control" readonly="true"/></div>
                </div>
                <div class="row-form clearfix">
                    <div class="span4">Nama Persyaratan</div>
                    <div class="span8"><input type="text" name="nama" id="namanya" class="form-control" required/></div>
                </div>
								<div class="row-form clearfix">
                    <div class="span4">Sub Kategori Layanan</div>
                    <div class="span3">
                        <select name="subkategori" id="subkategorinya" class="form-control" required>
                            <option value="">Pilih Kategori...</option>
														<?php
														include "includes/config.php";
														$sql = $conn->query("SELECT * FROM ad_sub_kategori");
														while($r=$sql->fetch_assoc()){
															?>
																 <option value="<?php echo $r['id_sub_kategori'];?>"><?php echo $r['nama_sub_kategori'];?></option>
															<?php
														}
														?>
				               </select>
									</div>
								</div>
                <div class="row-form clearfix">
                    <div class="span4">Keterangan</div>
                    <div class="span8"><textarea name="keterangan" id="keterangannya" class="form-control"></textarea></div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button onclick="ubah_syarat();" class="btn btn-warning" aria-hidden="true">Lanjutkan Perubahan</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
        </div>
    	</div>
		</div>
	</div>

	<!-- Akhir Modal Edit -->

<script type="text/javascript" src="js/custom/syarat.js"></script>

</section>

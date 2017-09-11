<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Daftar Sub Kategori</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Daftar Sub Kategori</li>
	</ol>
</section>

<section class="content">

				<div class="row-container">
					<div id="sukses"></div>
					<br>
                    <div class="form-group" style="float:right;">
                        <label>Cari Data : </label>
                            <input type="text" id="filter" placeholder="Masukkan Nama Sub Kategori..." name="search" onblur="filterdata();"/>

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

						<h4><b>Tambah Sub Kategori Pelayanan</b></h4>
						<p>Form ini digunakan untuk melakukan penambahan data kategori pelayanan.</p>

				</div>
				<div class="modal-body">
					<div id="info"></div>
            <div class="block-fluid">
                <div class="form-group">
                    <div class="span3">Kode Sub ID</div>
                    <div class="span9"><input type="text" id="kode" name="kode" class="form-control" required/></div>
                </div>
                <div class="form-group">
                    <div class="span3">Nama Sub Kategori</div>
                    <div class="span9"><input type="text" id="nama" name="nama" class="form-control" required/></div>
                </div>
								<div class="form-group">
				           <div class="span3">Kategori</div>
				           <div class="span3">
				             <select name="kategori" id="kategori" class="form-control" required>
				                  <option value="">Pilih Kategori...</option>
													<?php
													include "includes/config.php";
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
                <div class="form-group">
                    <div class="span3">Keterangan</div>
                    <div class="span9"><textarea name="keterangan" id="keterangan" class="form-control"></textarea></div>
                </div>
            </div>

				</div>
				<div class="modal-footer">
					<button onclick="simpan_subkategori();" class="btn btn-primary" aria-hidden="true">Simpan Perubahan</button>
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Akhir Modal Tambah --->

	<!-- Modal Edit Kategori --->
	<div class="modal fade" id="edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header callout callout-info" style="border-radius:1px;margin-bottom:-5px;">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

						<h4><b>Tambah Sub Kategori Pelayanan</b></h4>
						<p>Form ini digunakan untuk melakukan perubahan data kategori pelayanan.</p>

				</div>
				<div class="modal-body">
					<div id="info_edit"></div>
	            <div class="block-fluid">
	                <div class="form-group">
	                    <div class="span3">Kode ID</div>
	                    <div class="span9"><input type="text" name="kode" id="kodenya" class="form-control" disabled/></div>
	                </div>
	                <div class="form-group">
	                    <div class="span3">Nama Sub Kategori</div>
	                    <div class="span9"><input type="text" name="nama" id="namanya" class="form-control" required/></div>
	                </div>
									<div class="form-group">
	                    <div class="span3">Kategori</div>
	                    <div class="span3">
	                        <select name="kategori" id="kategorinya" class="form-control" required>
	                            <option value="">Pilih Kategori...</option>
															<?php
															include "includes/config.php";
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
	                <div class="form-group">
	                    <div class="span3">Keterangan</div>
	                    <div class="span9"><textarea name="keterangan" id="keterangannya" class="form-control"></textarea></div>
	                </div>
	            </div>
	      </div>

        <div class="modal-footer">
            <button onclick="ubah_subkategori();" class="btn btn-primary" aria-hidden="true">Lanjutkan Perubahan</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
        </div>
	    </div>
		</div>
	</div>

	<!-- Akhir Modal Edit -->

<script type="text/javascript" src="js/custom/subkategori.js"></script>

</section>

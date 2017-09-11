<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Daftar Kategori</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Daftar Kategori</li>
	</ol>
</section>

<section class="content">

				<div class="row-container">
					<div id="sukses"></div>
					<br>
                    <div class="form-group" style="float:right;">
                        <label>Cari Data : </label>
                            <input type="text" id="filter" placeholder="Masukkan Nama Kategori..." name="search" onblur="filterdata();"/>

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

						<h4><b>Tambah Kategori Pelayanan</b></h4>
						<p>Form ini digunakan untuk melakukan penambahan data kategori pelayanan.</p>

				</div>
				<div class="modal-body">
					<div id="info"></div>
					<div class="block-fluid">
							<div class="form-group">
									<div class="span3">Kode ID</div>
									<div class="span9"><input type="text" id="kode" name="kode" class="form-control" required/></div>
							</div>
							<div class="form-group">
									<div class="span3">Nama Kategori</div>
									<div class="span9"><input type="text" id="nama" name="nama" class="form-control" required/></div>
							</div>
							<div class="form-group">
									<div class="span3">Keterangan</div>
									<div class="span9"><textarea name="keterangan" id="keterangan" class="form-control" ></textarea></div>
							</div>
					</div>

				</div>
				<div class="modal-footer">
					<button onclick="simpan_kategori();" class="btn btn-primary" aria-hidden="true">Simpan Perubahan</button>
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

						<h4><b>Tambah Kategori Pelayanan</b></h4>
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
									<div class="span3">Nama Kategori</div>
									<div class="span9"><input type="text" name="nama" id="namanya" class="form-control" required/></div>
							</div>
							<div class="form-group">
									<div class="span3">Keterangan</div>
									<div class="span9"><textarea name="keterangan" id="keterangannya" class="form-control"></textarea></div>
							</div>
					</div>

				</div>
				<div class="modal-footer">
					<button onclick="ubah_kategori();" class="btn btn-primary" aria-hidden="true">Simpan Perubahan</button>
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Akhir Modal Edit -->

<script type="text/javascript" src="js/custom/kategori.js"></script>

</section>

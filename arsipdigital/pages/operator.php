<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Daftar Operator</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Daftar Operator</li>
	</ol>
</section>

<section class="content">

				<div class="row-container">
					<div id="sukses"></div>
					<br>
                    <div class="form-group" style="float:right;">
                        <label>Cari Data : </label>
                            <input type="text" id="filter" placeholder="Masukkan Nama Operator..." name="search" onblur="filterdata();"/>

                            <button class="btn btn-default" type="button">Search</button>
                    </div>
        </div>

		<div id="workplace"></div>
    <!-- Modal untuk tambah operator---------------->

		<div class="modal fade" id="tambah">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header callout callout-info" style="border-radius:1px;margin-bottom:-5px;">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>

							<h4><b>Tambah Operator</b></h4>
							<p>Form ini digunakan untuk melakukan penambahan data operator.</p>

					</div>
					<div class="modal-body">
						<div id="info"></div>
						<div class="row-fluid">
		            <div class="block-fluid">
									  <div class="form-group">
		                    <div class="span3">ID Operator</div>
		                    <div class="span9"><input type="text" id="kode" name="kode" required class="form-control"/></div>
		                </div>
		                <div class="form-group">
		                    <div class="span3">Nama Operator</div>
		                    <div class="span9"><input type="text" id="nama" name="nama" required class="form-control"/></div>
		                </div>
		                <div class="form-group">
		                    <div class="span3">Level</div>
		                    <div class="span9">
		                        <select name="level" id="level" required class="form-control">
		                            <option value="">Pilih Level...</option>
		                            <option value="1">Admin</option>
		                            <option value="2">Operator</option>
																<option value="3">Staff</option>
		                        </select>
		                		</div>
										</div>
										<div class="form-group">
		                    <div class="span3">Password</div>
		                    <div class="span9"><input type="password" id="password" name="password" required class="form-control"/></div>
		                </div>
										<div class="form-group">
		                    <div class="span3">Ulang Password</div>
		                    <div class="span9"><input type="password" id="password1" name="password1" required class="form-control"/></div>
		                </div>
		            </div>

		        </div>

					</div>
					<div class="modal-footer">
						<button onclick="simpan_operator();" class="btn btn-primary" aria-hidden="true">Simpan Perubahan</button>
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

	<!-- Akhir Modal Tambah --->


    <!-- Modal untuk edit operator---------------->

		<div class="modal fade" id="edit">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header callout callout-info" style="border-radius:1px;margin-bottom:-5px;">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>

							<h4><b>Ubah Operator</b></h4>
							<p>Form ini digunakan untuk melakukan pengubahan data operator.</p>

					</div>
					<div class="modal-body">
						<div id="info_edit"></div>
						<div class="row-fluid">
		            <div class="block-fluid">
									  <div class="form-group">
		                    <div class="span3">ID Operator</div>
		                    <div class="span9"><input type="text" id="kodenya" name="kode" disabled class="form-control"/></div>
		                </div>
		                <div class="form-group">
		                    <div class="span3">Nama Operator</div>
		                    <div class="span9"><input type="text" id="namanya" name="nama" required class="form-control"/></div>
		                </div>
		                <div class="form-group">
		                    <div class="span3">Level</div>
		                    <div class="span9">
		                        <select name="level" id="levelnya" required class="form-control">
		                            <option value="">Pilih Level...</option>
		                            <option value="1">Admin</option>
		                            <option value="2">Operator</option>
																<option value="3">Staff</option>
		                        </select>
		                		</div>
										</div>
										<div class="form-group">
		                    <div class="span3">Password</div>
		                    <div class="span9"><input type="password" id="passwordnya" name="password" required class="form-control"/></div>
		                </div>
										<div class="form-group">
		                    <div class="span3">Ulang Password</div>
		                    <div class="span9"><input type="password" id="password1nya" name="password1" required class="form-control"/></div>
		                </div>
		            </div>

		        </div>

					</div>
					<div class="modal-footer">
						<button onclick="edit_operator();" class="btn btn-primary" aria-hidden="true">Simpan Perubahan</button>
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	<!-- Akhir Modal Edit --->


<script type="text/javascript" src="js/custom/operator.js"></script>


</section>

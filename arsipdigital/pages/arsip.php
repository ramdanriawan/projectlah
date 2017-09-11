<?php
if(isset($_SESSION['folder'])){
	unset($_SESSION['folder']);
	unset($_SESSION['kode']);
}
?>

<section class="content-header">
	<h1>
		Aplikasi Arsip Digital
		<small>Daftar Arsip</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
		<li class="active">Daftar Arsip</li>
	</ol>
</section>

<section class="content">
			<div id="info"></div>
			<div class="workplace">

						<button class="btn btn-mini btn-primary" onClick="location.href='index.php?page=pemohon'" type="button">Tambah Pelayanan Baru</button>
            <button onclick="hapus_arsip();" class="btn btn-mini btn-danger" type="button">Hapus</button><br><br>

						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title"><i class="fa fa-th"></i> Daftar Kategori Pelayanan</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">


                    <?php
					include "includes/config.php";
					$sql = $conn->query("
						SELECT a.id_proses,a.nik,a.tgl_proses,a.nama,a.nik_termohon,a.status,a.userid,c.nama_kategori,d.nama_sub_kategori
						FROM ad_proses a
						JOIN ad_kategori c ON a.id_kategori = c.id_kategori
						JOIN ad_sub_kategori d ON a.id_sub_kategori = d.id_sub_kategori
						ORDER BY a.id_proses ASC");
					?>

						<table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
								<thead>
										<tr style="background-color:#222D32;color:#f1f1f1;">
                        <th width="2%"><input type="checkbox" name="checkall" onClick="toggle(this)"/></th>
                        <th width="10%">REGISTRASI ID</th>
												<th>NIK PEMOHON</th>
												<th>NAMA PEMOHON</th>
                        <th>LAYANAN DAN STATUS SYARAT</th>
												<th>NIK TERMOHON</th>
												<th>TANGGAL</th>
												<th>OLEH</th>
                        <th width="2%"></th>
                    </tr>
                </thead>
								<tbody>
								<?php
								$no=0;
								while($r=$sql->fetch_assoc()){$no++;
								$status = $r['status'];
								?>
										<tr>
                        <td><input type="checkbox" name="chk" class="chk" value="<?php echo $r['id_proses'];?>" id="chk-<?php echo $no;?>"/></td>
                        <td><a href="#" id="<?php echo $r['id_proses'];?>" class="tampil_detail"><?php echo $r['id_proses'];?></a></td>
												<td><?php echo $r['nik'];?></td>
												<td><?php echo $r['nama'];?></td>
                        <td><?php echo $r['nama_sub_kategori']." (".$r['status'].")";?></td>
												<td><?php echo $r['nik_termohon'];?></td>
												<td><?php echo date('d-m-Y', strtotime($r['tgl_proses']));?></td>
												<td><?php echo $r['userid'];?></td>
                        <td>
													<?php
													if($status == "Belum Lengkap"){
														?>
														<a href="#edit" data-toggle="modal" data-target="#edit" data-id="<?php echo $r['id_proses'];?>" class="edit-data tip" title="Lengkapi"><span class="fa fa-edit"></span></a>
														<?php
													}else{
														?>
														<a href="#" id="<?php echo $r['id_proses'];?>" class="tampil_detail tip" title="Lihat"><span class="fa fa-search"></span></a>
														<?php
													}
													?>
												</td>
                    </tr>
							<?php
							}
							?>
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
            <div class="dr"><span></span></div>

			<div id="tampil-folder">

			</div>

			</div>
	<!--
	Form untuk melakukan perubahan kelengkapan dokumen
	-->
	<div class="modal fade" id="edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header callout callout-info" style="border-radius:1px;margin-bottom:-5px;">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

						<h4><b>Perubahan Status Kelengkapan Dokumen</b></h4>
						<p>Form ini digunakan untuk melakukan perubahan data kelengkapan dokumen.</p>

				</div>
				<div class="modal-body">
					<div id="info_edit"></div>
	        <div class="row-fluid">
	            <div class="block-fluid">
								<div class="row-form clearfix">
								<label>No. Registrasi</label>
									<div class="span9">
										<input type="text" name="idproses" id="idproses" class="form-control" readonly="true">
									</div>
								</div>
	              <div class="row-form clearfix">
								<label>Status Kelengkapan</label>
									<div class="span9">
									<select id="status" class="form-control">
										<option value="">--- Pilih Status ---</option>
										<option value="Lengkap">Lengkap</option>
										<option value="Belum Lengkap">Belum Lengkap</option>
									</select>
								</div>
	               </div>

	            </div>
	        </div>
				</div>
        <div class="modal-footer">
            <button onclick="ubah_status();" class="btn btn-primary" aria-hidden="true">Lanjutkan Perubahan</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
        </div>
    </div>
	</div>
</div>
	<!--
	Akhir Form
	-->
</section>
	<script type="text/javascript" src="js/custom/detail.js"></script>

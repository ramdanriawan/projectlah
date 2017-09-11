<div class="row-fluid">
  <br>
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-th"></i> Daftar status arsip</h3>
                  </div>
                    <?php
					include "../../includes/config.php";
					if(isset($_POST['filter'])){
						$filter = $_POST['filter'];
						$sql = $conn->query("
						SELECT a.id_proses,a.nik,a.id_kategori,a.nama,a.telp,a.id_sub_kategori,a.tgl_proses,a.nik_termohon,a.status,a.userid,b.nama_kategori,c.nama_sub_kategori,d.status_arsip
						FROM ad_proses a
						JOIN ad_kategori b ON a.id_kategori = b.id_kategori
						JOIN ad_sub_kategori c ON a.id_sub_kategori = c.id_sub_kategori
						JOIN ad_arsip d ON a.id_proses = d.id_proses
						WHERE d.status_arsip = '$filter'
						ORDER BY a.id_proses ASC");
					}else{
						$sql = $conn->query("
						SELECT a.id_proses,a.nik,a.id_kategori,a.nama,a.telp,a.id_sub_kategori,a.tgl_proses,a.nik_termohon,a.status,a.userid,b.nama_kategori,c.nama_sub_kategori,d.status_arsip
						FROM ad_proses a
						JOIN ad_kategori b ON a.id_kategori = b.id_kategori
						JOIN ad_sub_kategori c ON a.id_sub_kategori = c.id_sub_kategori
						JOIN ad_arsip d ON a.id_proses = d.id_proses
						ORDER BY a.id_proses ASC");
					}

					?>
					<div class="box-body">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
                            <thead>
                                <tr style="background-color:#222D32;color:#f1f1f1;">
                                    <th width="2%">No</th>
                                    <th width="10%">REGISTRASI ID</th>
									                  <th>NIK PEMOHON</th>
									                  <th>NAMA PEMOHON</th>
                                    <th>LAYANAN DAN STATUS ARSIP</th>
									                  <th>NIK TERMOHON</th>
									                  <th>TANGGAL PROSES</th>
									                  <th>OLEH</th>
                                </tr>
                            </thead>
              							<tbody>
              							<?php
              							$no=0;
              							while($r=$sql->fetch_assoc()){$no++;
              							$status = $r['status'];
              							?>
              								<tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $r['id_proses'];?></td>
									                  <td><?php echo $r['nik'];?></td>
									                  <td><?php echo $r['nama'];?></td>
                                    <td><?php echo $r['nama_sub_kategori']." (".$r['status_arsip'].")";?></td>
									                  <td><?php echo $r['nik_termohon'];?></td>
									                  <td><?php echo date('d-m-Y', strtotime($r['tgl_proses']));?></td>
									                 <td><?php echo $r['userid'];?></td>
                              </tr>
              							<?php
              							}
              							?>
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>

			<script>
			$("#tabel").dataTable({"sPaginationType": "full_numbers"});
			</script>

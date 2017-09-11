<?php
include "../../includes/config.php";

$sql = $conn->query("SELECT * FROM ad_kategori");

?>

                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title"><i class="fa fa-th"></i> Jumlah Pelayanan Bulanan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
                            <thead>
                                <tr style="background-color:#222D32;color:#f1f1f1;">
                                    <th width="2%">No</th>
                                    <th>JENIS PELAYANAN</th>
                                    <th width="15%">TOTAL PELAYANAN</th>
                                    <th width="15%">SUDAH SCAN</th>
                                    <th width="15%">BELUM SCAN</th>
                                </tr>
                            </thead>
              							<tbody>
              							<?php
              							$no=0;
              							while($r=$sql->fetch_assoc()){
              								$no++;
              								$id = $r['id_kategori'];
              								$now   = date('m');
              								if(isset($_POST['filter'])){
              								$bulan = $_POST['filter'];
              								$sql2 = $conn->query("SELECT COUNT( id_kategori ) AS total, COUNT(
              													  CASE WHEN status_arsip =  'Belum Scan'
              													  THEN 1
              													  ELSE NULL
              													  END ) AS BelumScan, COUNT(
              													  CASE WHEN status_arsip =  'Sudah Scan'
              													  THEN 1
              													  ELSE NULL
              													  END ) AS SudahScan
              													  FROM ad_arsip WHERE id_kategori = '$id' AND MONTH(tgl_proses) = '$bulan'");

              								}else{
              								$sql2 = $conn->query("SELECT COUNT( id_kategori ) AS total, COUNT(
              													  CASE WHEN status_arsip =  'Belum Scan'
              													  THEN 1
              													  ELSE NULL
              													  END ) AS BelumScan, COUNT(
              													  CASE WHEN status_arsip =  'Sudah Scan'
              													  THEN 1
              													  ELSE NULL
              													  END ) AS SudahScan
              													  FROM ad_arsip WHERE id_kategori = '$id' AND MONTH(tgl_proses) = '$now'");
              								}
              								$t=$sql2->fetch_assoc();
              							?>
              								<tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $r['nama_kategori'];?></td>
                                    <td><?php echo number_format($t['total']);?> Pelayanan</td>
                                    <td><?php echo number_format($t['SudahScan']);?> Arsip</td>
									                  <td><?php echo number_format($t['BelumScan']);?> Arsip</td>
									            </tr>
                							<?php
                							}
                							?>
                            </tbody>
                        </table>
                    </div>

                </div>
                 

<script type="text/javascript" src="js/custom/date.js"></script>

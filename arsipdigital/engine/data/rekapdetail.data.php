<?php
include "../../includes/config.php";
if(isset($_POST['filtersub'])){
$kategori = $_POST['filtersub'];
$sql = $conn->query("SELECT * FROM ad_sub_kategori WHERE id_kategori = '$kategori'");

?>

            <div class="row-fluid">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> Jumlah Sub Pelayanan Bulanan</h3>
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
								$id = $r['id_sub_kategori'];
								$bulan = $_POST['bulan'];
								$sql2 = $conn->query("SELECT COUNT( id_sub_kategori ) AS total, COUNT(
													  CASE WHEN status_arsip =  'Belum Scan'
													  THEN 1
													  ELSE NULL
													  END ) AS BelumScan, COUNT(
													  CASE WHEN status_arsip =  'Sudah Scan'
													  THEN 1
													  ELSE NULL
													  END ) AS SudahScan
													  FROM ad_arsip WHERE id_sub_kategori = '$id' AND MONTH(tgl_proses) = '$bulan'");
								$t=$sql2->fetch_assoc();
							?>
								<tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $r['nama_sub_kategori'];?></td>
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

            </div>
<?php
}
?>
<script type="text/javascript" src="js/custom/date.js"></script>

        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-th"></i> Daftar Operator</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

                    <?php
					include "../includes/config.php";
					$sql = $conn->query("SELECT * FROM ad_user ORDER BY userid ASC");
					?>
          <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
              <thead>
                  <tr style="background-color:#222D32;color:#f1f1f1;">
                                    <th width="2%"><input type="checkbox" name="checkall"/></th>
                                    <th width="15%">ID OPERATOR</th>
                                    <th width="25%">NAMA OPERATOR</th>
									<th>LEVEL</th>
                                    <th width="10%">AKSI</th>
                                </tr>
                            </thead>
							<tbody>
							<?php
							$no=0;
							while($r=$sql->fetch_assoc()){$no++;
							$level = $r['level'];
							if($level == 1){
								$levelop = "Admin";
							}else{
								$levelop = "Staf";
							}
							?>
								<tr>
                                    <td><input type="checkbox" name="chk[]" class="chk" value="<?php echo $r['userid'];?>" id="chk-<?php echo $no;?>"/></td>
                                    <td><?php echo $r['userid'];?></td>
                                    <td><?php echo $r['username'];?></td>
									<td><?php echo $levelop;?></td>
                                    <td><a href="#edit" data-toggle="modal" class="edit-data tip"
									data-id="<?php echo $r['userid'];?>"
									data-nama="<?php echo $r['username'];?>"
									data-level="<?php echo $r['level'];?>" title="Ubah Data Operator"><span class="icon-edit"></span></a>
									<a href="index.php?page=profile&id=<?php echo $r['userid'];?>" class="tip" title="Lihat Data Profil"><span class="icon-zoom-in"></span></a></td>
                                </tr>
							<?php
							}
							?>
                            </tbody>
                        </table>
                    </div>
                </div>

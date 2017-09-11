<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="home/tambah_user" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                  </h3>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                     <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($data->result() as $row):
                        ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($row->nip)?></td>
                        <td><?php echo ucwords($row->nama)?></td>
                        <td><?php echo ucwords($row->jabatan)?></td>
                        <td><?php echo ucwords($row->username)?></td>
                        <td><?php echo ucwords($row->password)?></td>
                        <td><?php if($row->level ==1){ echo "Admin"; }else{ echo "user";} ?></td>
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="home/edit_user/<?php echo $row->id_admin ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="home/hapus_user/<?php echo $row->id_admin ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </td>                     
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
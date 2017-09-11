<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a id="admin" href="home/tambah_surat_masuk" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
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
                        <th>No. Delegasi</th>
                        <th>Tgl Terima</th>
                        <th>Proses (hari)</th>
                        <th>No. & Tgl Surat</th>
                        <th>Asal Surat</th>
                        <th>Status Surat</th>
                        <th>Pelaksana</th>
                        <th id="admin">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($data->result() as $row):
                        ?>
                      <tr>
                        <td><?php echo ucwords($row->no_delegasi)?></td>
                        <td><?php echo ucwords($row->tgl_terima)?></td>
                        <td><?php echo ucwords($row->proses_hari)?></td>
                        <td><?php echo ucwords($row->no_tgl)?></td>
                        <td><?php echo ucwords($row->asal_surat)?></td>
                        <td><?php echo ucwords($row->status_surat)?></td>
                        <td><?php echo ucwords($row->pelaksana)?></td>
                        <td align="center" id="admin">
                          <div class="btn-group" role="group">
                            <a href="home/edit_surat_masuk/<?php echo $row->id_surat_masuk ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="home/hapus_surat_masuk/<?php echo $row->id_surat_masuk ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
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

           <?php 

            if(!$this->session->userdata('username')){
              ?>
                <style type="text/css">
                  #admin{
                    display: none;
                  }
                </style>
              <?php
            }

           ?>
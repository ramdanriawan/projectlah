<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a id="admin" href="home/tambah_surat_keluar" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
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
                        <th>No. Surat</th>
                        <th>Tgl Surat</th>
                        <th>No. ASM</th>
                        <th>Prihal</th>
                        <th>Sifat</th>
                        <th>Lampiran</th>
                        <th>Nama Pengirim</th>
                        <th>Status</th>
                        <th>Tanggal Penyerahan</th>
                        <th id="admin">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($data->result() as $row):
                        ?>
                      <tr>
                        <td><?php echo ucwords($row->no_surat)?></td>
                        <td><?php echo ucwords($row->tgl_surat)?></td>
                        <td><?php echo ucwords($row->no_asm)?></td>
                        <td><?php echo ucwords($row->prihal)?></td>
                        <td><?php echo ucwords($row->jenis)?></td>
                        <td><?php echo ucwords($row->lampiran)?></td>
                        <td><?php echo ucwords($row->nama)?></td>
                        <td><?php echo ucwords($row->status)?></td>
                        <td><?php echo ucwords($row->tanggal_penyerahan)?></td>
                        <td align="center" id="admin">
                          <div class="btn-group" role="group">
                            <a href="home/edit_surat_keluar/<?php echo $row->id_surat_keluar ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="home/hapus_surat_keluar/<?php echo $row->id_surat_keluar ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
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
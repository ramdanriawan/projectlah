<div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit Jenis</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php foreach ($data->result() as $key => $value) {
                  # code...
                } ?>
                <form action="home/proses_edit_jenis" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis</label>
                      <input type="hidden" class="form-control" name="id_jenis" value="<?php echo $value->id_jenis ?>" placeholder="Nama User"/>
                      <input type="text" class="form-control" name="jenis" value="<?php echo $value->jenis ?>" placeholder="Nama User"/>
                </div>
               
                  <a href="home/data_user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
                </form>                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
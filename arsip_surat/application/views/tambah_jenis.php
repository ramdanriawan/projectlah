<div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Jenis Surat</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <form action="home/proses_tambah_jenis" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis</label>
                      <input type="text" class="form-control" name="jenis" placeholder="Jenis Surat"/>
                </div>
               
                  <a href="home/data_user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </form>                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
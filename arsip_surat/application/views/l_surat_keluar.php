
    <script type="text/javascript" src="http://localhost/rainkidstore/assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/rainkidstore/assets/ckeditor/contents.css">
<div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Laporan Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('home/cari_surat_keluar') ?>

                 
                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl. Surat</label>
                      <input type="text" class="form-control" id="datepicker" name="tgl_surat" placeholder="Jenis Surat"/>
                </div>

                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Cari</button>
                  <a href="home/surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                </form>                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
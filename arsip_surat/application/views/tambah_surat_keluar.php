
    <script type="text/javascript" src="http://localhost/rainkidstore/assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/rainkidstore/assets/ckeditor/contents.css">
<div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Surat</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('home/proses_tambah_surat_keluar') ?>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select class="form-control" name="id_kategori">
                    <?php $sql = $this->db->query("SELECT * FROM tbl_kategori"); foreach ($sql->result() as $key => $value) {
                      ?>
                      <option value="<?php echo $value->id_kategori ?>"><?php echo $value->kategori ?></option>

                      <?php
                    } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" placeholder="Jenis Surat"/>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl. Surat</label>
                      <input type="text" class="form-control" id="datepicker" name="tgl_surat" placeholder="Jenis Surat"/>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">No Asm</label>
                      <input type="text" class="form-control" name="no_asm" placeholder="Jenis Surat"/>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Prihal</label>
                    <textarea name="prihal" class="form-control"></textarea>
                </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Sifat</label>
                    <select class="form-control" name="id_jenis">
                    <?php $sql = $this->db->query("SELECT * FROM tbl_jenis"); foreach ($sql->result() as $key => $value) {
                      ?>
                      <option value="<?php echo $value->id_jenis ?>"><?php echo $value->jenis ?></option>

                      <?php
                    } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lampiran</label>
                     <textarea name="lampiran" id="news"></textarea>        
        <script type="text/javascript">
                                  var editor = CKEDITOR.replace('news');  
                                </script>    
                </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengirim</label>
                      <input type="text" class="form-control"   value="<?php echo $this->session->userdata('username') ?>" />
                      <input type="hidden" class="form-control" name="id_admin"  value="<?php echo $this->session->userdata('id_admin') ?>" />
                </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Penyerahan</label>
                      <input type="text" class="form-control" name="tanggal_penyerahan"   />
                </div>

                

               
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                  <a href="home/surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                </form>                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
<div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Surat Masuk</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('home/proses_edit_surat_masuk') ?>
                  <?php foreach ($data->result() as $key => $row) {
                    
                  } ?>
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
                    <label for="exampleInputEmail1">No Delegasi</label>
                      <input type="text" class="form-control" name="no_delegasi" value="<?php echo $row->no_delegasi ?>" placeholder="No Delegasi"/>
                      <input type="hidden" class="form-control" name="id_surat_masuk" value="<?php echo $row->id_surat_masuk ?>" placeholder="No Delegasi"/>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl. Terima</label>
                      <input type="text" class="form-control" id="datepicker" value="<?php echo $row->tgl_terima ?>" name="tgl_terima" placeholder="Tgl Terima"/>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Proses Hari</label>
                      <input type="text" class="form-control" name="proses_hari" value="<?php echo $row->proses_hari ?>"/>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat / Tanggal</label>
                      <input type="text" class="form-control" name="no_tgl" value="<?php echo $row->no_tgl ?>" placeholder="No Surat & Tangal"/>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Asal Surat</label>
                      <input type="text" class="form-control" name="asal_surat" value="<?php echo $row->asal_surat ?>" placeholder="Asal Surat"/>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Pelaksana</label>
                      <input type="text" class="form-control" name="pelaksana" value="<?php echo $row->pelaksana ?>" placeholder="Pelaksana"/>
                </div>

               
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                  <a href="home/surat_masuk" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                </form>                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
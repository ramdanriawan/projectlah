<div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Jenis Surat</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <form action="home/proses_tambah_user" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip" placeholder="Nip"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama User"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" name="password" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Level</label>
                    <select class="form-control" name="level">
                      <option value="1">Admin</option>
                      <option value="2" >User</option>
                      <option>7</option>
                    </select>
                </div>



                  <a href="home/data_user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </form>                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
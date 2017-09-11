<div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit User</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php foreach ($data->result() as $key => $value) {
                  # code...
                } ?>
                <form action="home/proses_edit_user" method="post" accept-charset="utf-8">
                 <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip" value="<?php echo $value->nip ?>" placeholder="Nip"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="hidden" class="form-control" name="id_admin" value="<?php echo $value->id_admin ?>" placeholder="Nama User"/>
                      <input type="text" class="form-control" name="nama" value="<?php echo $value->nama ?>" placeholder="Nama User"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $value->username ?>" placeholder="Username"/>
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $value->username ?>" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" name="password" value="<?php echo $value->password ?>" placeholder="Password"/>
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
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
                </form>                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
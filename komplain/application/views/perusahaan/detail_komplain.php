<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Komplain | Detail </title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-user.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 header">
          <a href="">
            <div class="logo"></div>
          </a>
          <div>
            <b>Selamat datang <?php echo $nama_perusahaan; ?> di Website Kompla.in </b>
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-sm-12">
              <div class="panel-menu">
                <a href="<?php echo base_url(); ?>perusahaan/dashboard" class="list">
                  <span class="glyphicon glyphicon-dashboard"></span>
                  <b>Beranda</b>
                </a>
                <a href="#" class="list">
                  <span class="glyphicon glyphicon-send"></span>
                  <b>Kirim Komplain</b>
                </a>
                <a href="#" class="list">
                  <span class="glyphicon glyphicon-envelope"></span>
                  <b>Lihat Komplain</b>
                </a>
                <a href="<?php echo base_url(); ?>login/logout_perusahaan" class="list pull-right">
                  <span class="glyphicon glyphicon-user"></span>
                  <b>Logout</b>
                </a>
              </div>
            </div>
          </div>
      <div class="row">
        <div class="col-md-8 field">
          <div class="box-body">
            <h3>Detail Komplain</h3>
            <p><?php echo $komplain->judul_komplain ?></p>
            <p><?php echo $komplain->isi_komplain ?></p>
            <br>
            <h3>Komentar</h3>
            <form method="POST" action="<?php echo base_url(); ?>perusahaan/insert_komentar">
              <table width="100%" border="0">
                <tbody>
                  <tr>
                    <td>Nama</td><td>:</td>
                    <td>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" size="41">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td><td>:</td>
                    <td>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="email" size="41">
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Website</td><td>:</td>
                    <td>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="website" size="41">      
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Komentar</td><td>:</td>
                    <td>
                        <div class="col-sm-8">
                          <textarea class="ckeditor" name="komentar" rows="10" cols="31"></textarea>    
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td></td><td></td>
                    <td>
                      <div class="col-sm-4">
                        <input type="hidden" name="id_komplain" value="<?php echo $komplain->id_komplain; ?>">
                        <button type="submit" name="kirim">Kirim</button>
                      </div>
                    </td>
                  </tr>
                </tbody></table>
                
              </form><br>
              <?php foreach ($komentar as $data) { ?>
              <p><strong><?php echo $data->nama; ?></strong></p>
              <p><?php echo $data->komentar; ?></p>
              <?php } ?>
              
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12 footer">
              <!--<div class="top-footer">
                <img src="<?php echo base_url();?>assets/images/top-footer.png" class="img-responsive">
              </div> -->
              <div class="mid-footer">
                <div class="in-footer">
                  <a href="">
                    <div class="logo-footer"></div>
                  </a>
                  <ul class="ul">
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                  </ul>
                  <ul class="ul">
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                  </ul>
                  <ul class="ul">
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                    <li><a href="" class="li-footer">Hubungi Kami</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/ckeditor/ckeditor.js"></script>
      </body>
    </html>
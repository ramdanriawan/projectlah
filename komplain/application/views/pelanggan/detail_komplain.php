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
            <b></b>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel-menu">
            <a href="<?php echo base_url(); ?>pelanggan/dashboard" class="list">
              <span class="glyphicon glyphicon-dashboard"></span>
              <b>Beranda</b>
            </a>
            <a href="<?php echo base_url(); ?>insert" class="list">
              <span class="glyphicon glyphicon-send"></span>
              <b>Kirim Komplain</b>
            </a>
            <a href="<?php echo base_url(); ?>list" class="list">
              <span class="glyphicon glyphicon-envelope"></span>
              <b>Lihat Komplain</b>
            </a>
            <a href="<?php echo base_url(); ?>login/logout_pelanggan" class="list pull-right">
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
            
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-8 field">
          <div class="box-body">
          <h3>Komentar</h3>
            <form action="<?php echo base_url()?>pelanggan/insert_komentar" class="form-horizontal" id="quick-category" method="post">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" id="exampleInputEmail1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" placeholder="Email" id="exampleInputEmail1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Website</label>
                    <input type="text" name="website" placeholder="website" id="exampleInputEmail1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                    <label for="name">Komentar</label>
                    <textarea class="ckeditor" name="komentar"></textarea>
                  </div>
                </div>
                
              </div>
              
              <div class="box-footer">
                <input type="hidden" name="id_komplain" value="<?php echo $komplain->id_komplain; ?>">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
              
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-8">
              <?php foreach ($komentar as $data) { ?>
              <p><strong><?php echo $data->nama; ?></strong></p>
              <p><?php echo $data->komentar; ?></p>
              <?php } ?>
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
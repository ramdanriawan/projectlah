<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Komplain | Insert </title>
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
            <form action="<?php echo base_url()?>pelanggan/insert_keluhan" class="form-horizontal" id="quick-category" method="post">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Kategori</label>
                <div class="col-sm-3">
                  <select name="id_kategori" class="form-control">
                    <option value=""></option>
                    <?php foreach($listKategori as $kategori) { ?>
                    <option value="<?php echo $kategori->id_kategori;?>" <?php if(!empty($anakasuh->id_kategori)) echo $anakasuh->id_kategori ==  $kategori->id_kategori ? 'selected' : '' ?>><?php echo $kategori->kategori?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Perusahaan</label>
                <div class="col-sm-3">
                  <select name="id_perusahaan" class="form-control">
                    <option value=""></option>
                    <?php foreach($listPerusahaan as $perusahaan) { ?>
                    <option value="<?php echo $perusahaan->id_perusahaan;?>" <?php if(!empty($anakasuh->id_perusahaan)) echo $anakasuh->id_perusahaan ==  $perusahaan->id_perusahaan ? 'selected' : '' ?>><?php echo $perusahaan->nama_perusahaan?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Judul Keluhan</label>
                <div class="col-sm-6">
                  <input id="judul_komplain" name="judul_komplain" class="form-control" value="" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Keluhan</label>
                <div class="col-sm-6">
                  <textarea class="ckeditor" name="isi_komplain"></textarea>
                </div>
              </div>
          
            <div class="row">
              <div class="box-footer">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <button class="btn btn-info pull-right" type="submit">Submit</button>
                  <button class="btn btn-default" type="submit">Cancel</button>
                </div>
              </div>
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
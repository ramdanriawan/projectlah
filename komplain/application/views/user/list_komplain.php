<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Komplain | List Komplain </title>
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
            <b>Selamat datang di Website Kompla.in </b>
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
          <a href="<?php echo base_url(); ?>login/logout" class="list pull-right">
            <span class="glyphicon glyphicon-user"></span>
            <b>Logout</b>
          </a>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-8 field">
          <div class="box-body">
            <b>List Komplain<b>
            <?php
            $i = 1;
            if ($list_komplain) {
            foreach ($list_komplain as $komplain ) {
            ?>
            
            <p><?php echo $i++;?>. <a href="<?php echo base_url(); ?>site/komplain/<?=$komplain->id_komplain?>" class="list"><?php echo $komplain->judul_komplain ?></a></p>
            <?php }
            }?>
            
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
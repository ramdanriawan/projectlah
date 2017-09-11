<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home | Komplain </title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-user.css" />
    <style>
    .wrapper{
    width: 80%;
    margin: 1% 10%;
    background: #C3E6EC none repeat scroll 0% 0%;
    padding-right: 30px;
    padding-bottom: 2%;
    }
    .box {
    border-style: groove;
    text-align: center;
    width: 100%;
    }
    .panel-pencarian{
    background-color: #4DC697;
    padding: 10px 10px 20px 10px;
    border-radius: 10px;
    margin: 10px;
    }
    .scroll-komplain{
      background: #FFFFFF;
      padding: 10px;
      overflow: scroll;
      height: 300px;
    }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="header">
            <div class="col-md-2" style="padding-right: 0px;">
                <img " src="<?php echo base_url(); ?>assets/images/kompla.png" alt="">
              </div>
            <div class="col-md-4" style="padding-right: 0px; padding-left:0px;">
              <h2><strong>
				Kompla.in
					</strong>
			  </h2>
            </div>
            <div class="col-md-4" style="padding-right: 0px; padding-left:0px;">
				<h2><strong>
				Moto Kompla.in
					</strong>
			  </h2>
              <!--<div class="box" style="height:50px">
                Input Moto di sini
              </div>-->
            </div>
            <div class="col-md-2" style="padding-right: 0px; padding-left:0px;" >
              <a href="<?php echo base_url(); ?>login" class="list">
              <span class="glyphicon glyphicon-user"></span>
              <b>Akun Saya</b>
            </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-pencarian">
          <div class="header" style="margin-top: 10px;">
            <form class="form-inline form">
            <div class="form-group input">
              <label class="sr-only" for="exampleInputAmount"></label>
              <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Semua Provinsi">
              </div>
            </div>
            <div class="form-group input">
              <label class="sr-only" for="exampleInputAmount"></label>
              <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                <input type="text" style="width:250px;" class="form-control" id="exampleInputAmount" placeholder="Masukan Kata Kunci">
              </div>
            </div>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari </button>
          </form>
          </div>
          </div>
        </div>

        <div class="row">
          <div class="content" style="margin-top: 10px;">
            <div class="col-md-3">
              <div class="scroll-komplain">
                <center><b>5 Komplain terakhir<b></center>
              <?php
              $i = 1;
              if ($list_komplain) {
              foreach ($list_komplain as $komplain ) {
              ?>
              
              <p><?php echo $i++;?>. <a href="#" class="list"><?php echo $komplain->judul_komplain ?></a></p>
            <?php }
            }?>
              </div>
            </div>
            <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">
              <div class="box">
                Kategori Utama Produk
              </div>
              <div class="box">
                <div class="row">
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/mobil.png" alt="">
                  </div>
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/motor.png" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/properti.png" alt="">
                  </div>
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/pribadi.png" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/gadget.png" alt="">
                  </div>
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/bola.png" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/furnitur.png" alt="">
                  </div>
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/perlengkapan_bayi.png" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/perkakas.png" alt="">
                  </div>
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/jasa.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">
              <div class="box">
                Kategori Utama Pelayanan
              </div>
              <div class="box">
                <div class="row">
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/public.png" alt="">
                  </div>
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/service.png" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/pendidikan.png" alt="">
                  </div>
                  <div class="col-xs-6">
                    <img class="img-circle" height="50px" width="50px" src="<?php echo base_url(); ?>assets/img/kesehatan.png" alt="">
                  </div>
                </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="box" style="height:200px;">
                Rating
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 footer" style="margin-top: 10px;">
            <div class="top-footer">
              <div class="col-md-8" style="padding-left: 0px;padding-right: 0px;">
                <div class="box">
                  About Us
                </div>
              </div>
              <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;">
                <div class="box">
                  Contact Us
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
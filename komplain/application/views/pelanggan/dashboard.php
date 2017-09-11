<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home | Komplain </title>
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
            <b>Selamat datang <?php echo $nama; ?> di Website Kompla.in </b>
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
          <a href="<?php echo base_url(); ?>pelanggan/insert" class="list">
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
      <div class="col-md-2 content">
        <table class="table table-bordered tbl">
          <tr>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
            <td>
              <a href="" class="list">
                <img src="<?php echo base_url();?>assets/images/kompla.png" class="img-responsive img">
                <!--<p class="lead center">Mobil</p>-->
              </a>
            </td>
          </tr>
        </table>
        
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 footer">
        <div class="top-footer">
          <!--<img src="<?php echo base_url();?>assets/images/top-footer.png" class="img-responsive">-->
        </div>
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
</body>
</html>
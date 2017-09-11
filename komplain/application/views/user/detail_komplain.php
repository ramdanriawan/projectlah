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
        <div class="col-md-8 field">
          <div class="box-body">
            <h3>Detail Komplain</h3>
            <p><?php echo $komplain->judul_komplain ?></p>
            <p><?php echo $komplain->isi_komplain ?></p>
            <br>
            <h3>Komentar</h3>
            
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
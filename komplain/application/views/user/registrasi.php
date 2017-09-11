<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Komplain | Registration </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link href="<?php echo base_url() ?>assets/css/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Registrasi</b>Pelanggan</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrasi member baru</p>

    <form action="<?php echo site_url(); ?>registrasi/insert" method="post" >
      <div class="form-group has-feedback">
        <input type="text" name="nama" class="form-control" placeholder="Nama">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="password" class="form-control" placeholder="Password">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="ktp" class="form-control" placeholder="No KTP">
        <span class="form-control-feedback"></span>
      </div>

      <br>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo base_url(); ?>login" class="text-center">Saya sudah memiliki keanggotaan</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/js/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

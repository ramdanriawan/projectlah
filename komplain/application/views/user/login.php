<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo (isset($title)) ? $title : 'Login | Komplain'; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap 3.3.4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons 2.0.0 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link href="<?php echo base_url() ?>assets/css/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
<!-- Morris chart -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b>Komplain</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!--<p class="login-box-msg"><?php echo $msg; ?></p>-->

    <p class="login-box-msg"><?php echo $this->session->flashdata('message');?></p>
    <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo site_url()?>login/proses">
      <div class="form-group has-feedback">
        <input type="username" name="username" placeholder="Username" class="form-control">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" placeholder="Password" class="form-control">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <a href="<?php echo base_url(); ?>registrasi" class="btn btn-success btn-block btn-flat">Sign Up</a>
        </div>
        <div class="col-xs-4">
        
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button class="btn btn-primary btn-block btn-flat" type="submit">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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

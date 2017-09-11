<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Arsip Digital - Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script type='text/javascript' src='js/jquery.min.js'></script>
      <script type="text/javascript" src="js/login.js"></script>
</head>
<body class="hold-transition login-page">
<br><br>
  <div class="login-logo" style="color:#222;font-size:20px;">
    <img src="img/logoo.png" width="200px">
    <br>
        <b style="color:white;">DINAS KEPENDUDUKAN <br/>
        DAN PENCATATAN SIPIL KABUPATEN OGAN ILIR</b></h4>
  </div>

  <div class="login-box" style="margin-top:-10px;">

    <!-- /.login-logo -->
    <div id="info"></div>
    <div class="login-box-body" style="background-color:#222;">
      <p class="login-box-msg"><img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/></p>

      <form method="post" action="#">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="User" name="userid" id="userid">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label class="checkbox" style="margin-left:20px;color:#f1f1f1;">
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="button" class="btn btn-primary btn-block btn-flat" id="btnLogin" onclick="check_login();">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
  </div>


</body>

</html>

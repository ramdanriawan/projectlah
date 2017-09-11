<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include "includes/config.php";
if(isset($_SESSION['pengguna'])){
	?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->

    <title>Aplikasi Arsip Digital</title>

    <link rel="icon" type="image/ico" href="favicon.ico"/>

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
	  <!-- AdminLTE Skins. Choose a skin from the css/skins
	       folder instead of downloading all of them to reduce the load. -->
	  <link rel="stylesheet" href="css/skins/_all-skins.min.css">
	  <!-- Morris chart -->
	  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
	  <!-- jvectormap -->
	  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
	  <!-- Date Picker -->
	  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	  <!-- Daterange picker -->
	  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
	  <!-- bootstrap wysihtml5 - text editor -->
	  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


	  <!-- Google Font -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery-ui.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery.mousewheel.min.js'></script>

    <script type='text/javascript' src='js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>

		<?php
		if (!empty($_GET['page'])) {
			if ($_GET['page'] == "grafikperbulan" or $_GET['page'] == "grafikpertahun") {?>
				<script type='text/javascript' src='js/plugins/bootstrap.min.js'></script>
			<?php
			}
		}?>

    <script type='text/javascript' src='js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.stack.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='js/plugins/charts/jquery.flot.resize.js'></script>

    <script type='text/javascript' src='js/plugins/sparklines/jquery.sparkline.min.js'></script>

    <script type='text/javascript' src='js/plugins/fullcalendar/fullcalendar.min.js'></script>

    <script type='text/javascript' src='js/plugins/select2/select2.min.js'></script>

    <script type='text/javascript' src='js/plugins/uniform/uniform.js'></script>

    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>

    <script type='text/javascript' src='js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>

    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='js/plugins/animatedprogressbar/animated_progressbar.js'></script>

    <script type='text/javascript' src='js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>

    <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>

    <script type='text/javascript' src='js/plugins/dataTables/jquery.dataTables.min.js'></script>

    <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>

	<script type='text/javascript' src='js/plugins/plupload/plupload.js'></script>
    <script type='text/javascript' src='js/plugins/plupload/plupload.gears.js'></script>
    <script type='text/javascript' src='js/plugins/plupload/plupload.silverlight.js'></script>
    <script type='text/javascript' src='js/plugins/plupload/plupload.flash.js'></script>
    <script type='text/javascript' src='js/plugins/plupload/plupload.browserplus.js'></script>
    <script type='text/javascript' src='js/plugins/plupload/plupload.html4.js'></script>
    <script type='text/javascript' src='js/plugins/plupload/plupload.html5.js'></script>
    <script type='text/javascript' src='js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js'></script>

    <script type='text/javascript' src='js/cookies.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>
	<script type='text/javascript' src='js/bootbox.min.js'></script>

	<script src="js/ui/jquery.ui.core.js"></script>
	<script src="js/ui/jquery.ui.widget.js"></script>
	<script src="js/ui/jquery.ui.datepicker.js"></script>
	<script src="js/ui/jquery.ui.timepicker.js"></script>

	<script type="text/javascript" src="js/plugins/elfinder/elfinder.min.js"></script>
	<script type="text/javascript" src="js/custom/konfigurasi.js"></script>


	<script>
		var s5_taf_parent = window.location;
	</script>

	<style type="text/css">
	.loading{position: absolute;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0, 0, 0, 0.56);z-index: 999;display:none;}
	.loading img {margin-top: 20%;margin-left: 50%;}
  .pagination{  margin: 10px;padding-bottom: 10px;padding-top: 10px;}
	/*
	.pagination li{display: inline;padding: 6px 10px 6px 10px;border: 1px solid #ddd;margin-right: -1px;font: 12px/17px Arial, Helvetica, sans-serif;background: #FFFFFF;box-shadow: inset 1px 1px 5px #F4F4F4;}
	.pagination li a{text-decoration:none;color: rgb(89, 141, 235);}
	.pagination li.first {border-radius: 5px 0px 0px 5px;}
	.pagination li.last {border-radius: 0px 5px 5px 0px;}
	.pagination li:hover{background: #CFF;}
	.pagination li.active{background: #F0F0F0;color: #333;}
	*/
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:#222D32;">
    <div id="loading" class="loading"><img src="img/loaders/c_loader_gr.gif"/></div>

		<header class="main-header">
	    <!-- Logo -->
	    <a href="./" class="logo">
	      <!-- mini logo for sidebar mini 50x50 pixels -->
	      <span class="logo-mini">
					<img src="favicon.ico" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel" width="20"/>
				</span>
	      <!-- logo for regular state and mobile devices -->
	      <span class="logo-lg">
					<img src="img/logo-home.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel" width="100%"/>
	      </span>
	    </a>
	    <!-- Header Navbar: style can be found in header.less -->
	    <nav class="navbar navbar-static-top">
	      <!-- Sidebar toggle button-->
	      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	        <span class="sr-only">Toggle navigation</span>
				</a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          <!-- User Account: style can be found in dropdown.less -->
	          <li class="dropdown user user-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <span class="hidden-xs"> Hi, <?php echo ucwords($_SESSION['pengguna']);?>&nbsp; <span class="fa fa-gear"></span></span>
	            </a>
	            <ul class="dropdown-menu">
	              <!-- Menu Footer-->
	              <li class="user-footer">
	                <div class="pull-left">
	                  <a href="index.php?page=profile&id=<?php echo $_SESSION['pengguna'];?>" class="btn btn-default btn-flat">Konfigurasi</a>
	                </div>
	                <div class="pull-right">
	                  <a href="index.php?page=logout" class="btn btn-default btn-flat">Keluar</a>
	                </div>
	              </li>
	            </ul>
	          </li>
	          <!-- Control Sidebar Toggle Button -->
	        </ul>
	      </div>
	    </nav>
	  </header>

    <?php
		include "includes/menu.php";
	?>

<div class="content-wrapper">
       <?php
		if(isset($_REQUEST['page'])){
			  $page = $_REQUEST['page'].".php";
			  $filename = "pages/".$page;
				if(file_exists($filename)) {
					include "pages/".$page;
				}else{
					include "pages/404.php";
				}
		  }else{
			  include "pages/home.php";
		  }
	   ?>
</div>


		<?php
		if (!empty($_GET['page'])) {
			if ($_GET['page'] != "grafikperbulan" and $_GET['page'] != "grafikpertahun") {?>
				<script src="bower_components/jquery/dist/jquery.min.js"></script>
			<?php
			}
		}?>

		<!-- jQuery UI 1.11.4 -->
		<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.7-->
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Morris.js charts -->
		<script src="bower_components/raphael/raphael.min.js"></script>
		<script src="bower_components/morris.js/morris.min.js"></script>
		<!-- Sparkline -->
		<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
		<!-- jvectormap -->
		<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="bower_components/moment/min/moment.min.js"></script>
		<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- datepicker -->
		<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<!-- Slimscroll -->
		<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="bower_components/fastclick/lib/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="js/adminlte.min.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="js/pages/dashboard.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="js/demo.js"></script>
</body>
</html>
<?php
}
else{
	header('location:login.php');
}
?>

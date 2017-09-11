<?php
include '../koneksi.php';
include 'akses.php';
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manajemen Surat SMAN 4 B.Pusako</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../font-awesome/icon.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/filescan.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../bootstrap/css/font.css">
  <link rel="stylesheet" href="../bootstrap/css/font1.css">
  <link rel="stylesheet" href="../plugins/datepicker/jquery-ui.css" type="text/css" />
  <script type="text/javascript" src="../plugins/datepicker/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="../plugins/datepicker/jquery-ui.js"></script>
  <script type="text/javascript" src="../plugins/datepicker/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css" type="text/css">
 	<script type="text/javascript">
$(function() {
	$( "#tgl_awal" ).datepicker({	
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-mm-yy'
	});
	$( "#tgl_akhir" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-mm-yy'
	});
});
</script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SMA</b>4</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Manajemen</b>Surat</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_SESSION['foto']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama']; ?> - Web Developer
                  <small>2016</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat" title="Keluar"><i class="fa fa-power-off"></i></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
        <li class="header">MENU NAVIGASI</li>
		<li class="treeview">
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="suratmasuk.php"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
            <li><a href="suratkeluar.php"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Laporan</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="laporansm.php"><i class="fa fa-circle-o"></i> Laporan Surat Masuk</a></li>
            <li><a href="laporansk.php"><i class="fa fa-circle-o"></i> Laporan Surat Keluar</a></li>
          </ul>
        </li>
		<li class="active treeview">
          <a href="user.php">
            <i class="fa fa-user"></i> <span>Pengguna</span>
          </a>
        </li>
		</ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tabel
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pengguna</li>
      </ol>
    </section><br>
	
<div id="modal_scan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="window">
	<div class="modal-content">
            <img id="img_scan" src="" alt="" />
    </div>
</div>
</div>
    <!-- Main content -->
    <section class="content">
	<div class="modal fade in" id="confirm-delete"  tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" >
            <div class="modal-content" style ="
    left: 90%;
    width: 320;
    top: 150;
">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi Hapus</h4>
              </div>
                <div class="modal-body">
                    Kamu akan menghapus satu dari data surat masuk.</br>
                    Apakah kamu ingin melanjutkannya ?</br>
                    <strong class="debug-url"></strong>
                </div>
                <div class="modal-footer">
                    <a><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button></a>
                    <a href="#" class="btn btn-danger danger"><i class="fa fa-trash"></i> Hapus</a>
                </div>
            
            <!-- /.modal-content -->
          <!-- /.modal-dialog -->
        </div>
		</div>
        <!-- /.modal -->
      </div>
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
	<?php 
	echo"<a href='#' data-toggle='modal' data-target='#tambahakun' class='btn btn-primary' title='Tambah Data'> <i class='fa fa-plus-square'></i></a>";
 ?>

          <div class="box">
     
		
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>Foto</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Username</center></th>
                  <th><center>Password</center></th>
                  <th><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
<?php
	$q = mysql_query("select * from user");
	while ($r= mysql_fetch_array($q))
        
       {
	?>
    
     <tr class="table">
	 
 <td width ="8%"><center><img src="<?php echo $r['foto'] ?>" width="80px" height="80px"></center>
 <td width="30%" style="font-size:35px"><b><center><?php echo $r['nama']?></center></b></td>
 <td width="20%" style="font-size:35px"><b><center><?php echo $r['username']?></center></b></td>
 <td width="20%" style="font-size:35px"><b><center><?php echo $r['password']?></center></b></td>
  <td width="10%"><center>
<?php 
	echo"<a href='#' data-toggle='modal' data-target='#edit_user$r[id_admin]' class='btn btn-default' title='Edit Data'><i class='fa fa-edit fa-fw'></i></a>";
 ?>
   <a class="btn btn-danger"  href="#" name="hapus" data-href="hapususer.php?id_admin=<?php echo $r['id_admin'];?> "data-toggle="modal" data-target="#confirm-delete" title="Hapus"><i class="fa fa-trash"></i></a></center></td>	

  </tr>
  
 <div id="edit_user<?php echo $r['id_admin']?>" class="modal fade" role="dialog">
 <div style="width:100%;" class="font-light">
    <div class="modal-dialog" style="left:0">
    <div class="modal-content row" style="padding: 10px;width: 400;margin-left:100px";>
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class='fa fa-remove fa-fw'></i></button>
            <h4 class="modal-title" id="myModalLabel"><b>Ubah Data Pengguna</b></h4>
            </div>
        <div>
     <form action="ubahakun.php" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload" novalidate>
						<div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="id_admin" value="<?php echo $r['id_admin']?>">
                                <div class="form-group">
                                    <label>Gambar</label><br>
									<img src="<?php echo $r['foto'] ?>" width="380px" height="380px"><br><br>
                                    <input type="file" class="form-control" name="foto" >
                                    <p class="help-block text-danger"></p>
                                </div>                               
								<div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $r['nama']?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $r['username']?>">
                                    <p class="help-block text-danger"></p>
                                </div>                                
								<div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $r['password']?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                         <div class="modal-footer">
                                <div id="success"></div>
                             <button data-dismiss="modal" type="submit" class="btn btn-danger"><i class='fa fa-remove fa-fw'></i>Batal</button>
                                <button type="submit" name="simpan" class="btn btn-primary"><i class='fa fa-edit fa-fw'></i>Edit</button>
        </div>
                </div>
                    </form>
                </div>

            </div>

  </div>
</div>
 
 
<div id="tambahakun" class="modal fade" role="dialog">
 <div style="width:100%;" class="font-light">
    <div class="modal-dialog" style="left:0">
    <div class="modal-content row" style="padding: 10px;width: 400;margin-left:100px";>
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class='fa fa-remove fa-fw'></i></button>
            <h4 class="modal-title" id="myModalLabel"><b>Tambah Data Pengguna</b></h4>
            </div>
        <div>
     <form action="tambahakun.php" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload" novalidate>
						<div class="row">
                            <div class="col-md-12">
				<input type="hidden" name="id_admin" value="<?php echo !empty($id_admin)?$id_admin:'';?>"/>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Pengguna</label>
                  <input name="foto" class="form-control" type="file" id="exampleInputFile" value="<?php echo !empty($foto)?$foto:'';?>" required />              
                </div>                              
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama"class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" value="<?php echo !empty($nama)?$nama:'';?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username"class="form-control" id="exampleInputEmail1" placeholder="Masukan Username" value="<?php echo !empty($username)?$username:'';?>" required>
                </div>                              
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="text" name="password"class="form-control" id="exampleInputEmail1" placeholder="Masukan Password" value="<?php echo !empty($password)?$password:'';?>" required>
                </div>
                            </div>
                        </div>
                         <div class="modal-footer">
                                <div id="success"></div>
                             <button data-dismiss="modal" type="submit" class="btn btn-danger"> <i class="fa fa-remove"></i> Batal</button>
                                <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</button>
        </div>
                </div>
                    </form>
                </div>

            </div>

  </div>
</div> 
  
 
<?php
}?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2016 <a href="http://www.facebook.com/default46">Surya Arfan</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Bootstrap 3.3.6 -->
<!-- FastClick -->
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<!-- page script -->
 <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
            $('.debug-url').html('Delete URL : <strong>' + $(this).find('.danger').attr('href') + '</strong>');
        })
    </script>
  	<script type="text/javascript">
	$(document).ready(function() {
		$('.img_modal').click(function(event) {
			var img_src = $(this).data('scanimg');
			$("#img_scan").attr("src", img_src);
			$('#modal_scan').modal('show');
		});
	});
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>

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
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="suratmasuk.php"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
            <li class="active treeview"><a href="suratkeluar.php"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
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
		<li class="treeview">
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
        <small>Surat Keluar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="#">Surat</a></li>
        <li class="active">Surat Keluar</li>
      </ol>
    </section><br>
	<section class="col-lg-12 connectedSortable">
		
          <!-- Map box -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
			
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Tambah Data" style="margin-right: 5px;">
                 Tambah <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-clone"></i>

              <h3 class="box-title">
              </h3>
            </div>
            <div class="box-body">
  
            <!-- /.box-body-->
            <div class="box-footer no-border" >
    <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
			<form action="tambahsk.php" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
						    <input type="hidden" id="id" name="id_surat" value="<?php echo !empty($id_surat)?$id_surat:'';?>"/>
				<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin']; ?>"/>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tujuan Surat</label>
                  <input type="text" class="form-control" name="tujuan" id="exampleInputEmail1" placeholder="Masukan Tujuan Surat" value="<?php echo !empty($tujuan)?$tujuan:'';?>"required>
                </div>
			<div class="form-group">
                  <label for="exampleInputEmail1">Nomor Surat</label>
                  <input type="text" class="form-control" name="no_surat"id="exampleInputEmail1" placeholder="Masukan Nomor Surat" value="<?php echo !empty($no_surat)?$no_surat:'';?>"required>
                </div>
			<div id="datetimepicker" class="input-append date">	
                  <label for="exampleInputEmail1">Tanggal Surat</label>
		  <input class="form-control" type="text" id="tgl_awal" name="tgl_surat" required/>
		  <span class="add-on">
		  <i class="icon-calendar"></i>
			</span></div><br>
                <div class="form-group">
                  <label for="exampleInputEmail1">Isi Ringkas Surat</label>
                  <textarea class="form-control" rows="3" name="isi_ringkas" placeholder="Masukkan Isian Ringkas Surat" value="<?php echo !empty($isi_ringkas)?$isi_ringkas:'';?>"required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile"required>File Scan</label>
                  <input type="file" class="form-control" id="exampleInputFile" name="file" value="<?php echo !empty($file)?$file:'';?>"/>

                
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</button>
              </div>
            </form>
			
          </div>
             	  </div>
            </div>
          </div>
		  
          <!-- /.box -->
          <!-- solid sales graph -->
          <!-- /.box -->
          <!-- Calendar -->
          <!-- /.box -->

        </section>
		
		
	

	
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
                    Kamu akan menghapus satu dari data surat keluar.</br>
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

          <div class="box">
     
			
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>Isi Ringkas & File</center></th>
                  <th><center>Asal Surat</center></th>
                  <th><center>Nomor Surat</center></th>
                  <th><center>Tanggal</center></th>
                  <th><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
<?php
	$q = mysql_query("select * from t_surat_keluar");
	while ($r= mysql_fetch_array($q))      
       {
	?>
    
     <tr class="table">
	 
  <td><?php echo $r['isi_ringkas']?><br><b>FILE : </b>
 <a href="#modal_scan" class="img_modal" data-scanimg="<?php echo $r['file'];?>">Berkas Scan Surat</td>
 <td width="30%"><?php echo $r['tujuan'];?></td>
 <td width="20%"><?php echo $r['no_surat'];?></td>
 <td width="12%"><center><?php echo $r['tgl_surat'];?></center></td>
  <td width="10%"><center>
  <a class="btn btn-success" href="ubahsk.php?id_surat=<?php echo $r['id_surat'];?>" title="Edit Data"><i class="fa fa-edit"></i></a>&nbsp; 
  <a class="btn btn-danger"  href="#" name="hapus" data-href="hapussk.php?id_surat=<?php echo $r['id_surat'];?> "data-toggle="modal" data-target="#confirm-delete" title="Hapus"><i class="fa fa-trash"></i></a></center></td>	
  </tr>
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
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
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

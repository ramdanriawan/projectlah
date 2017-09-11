<?php
$level = $_SESSION['level'];
?>

<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="img/users/avatars/<?php echo $_SESSION['pengguna'];?>.jpg" class="img-circle" alt="User Image" style="width:40px;height:40px;">
			</div>
			<div class="pull-left info">
				<p><?php echo ucwords($_SESSION['pengguna']);?></p>
				<a href="index.php?page=profile&id=<?php echo $_SESSION['pengguna'];?>"><span class="fa fa-gear text-primary"></span> Konfigurasi</a>
				<a href="index.php?page=logout"><span class="glyphicon glyphicon-off text-primary"></span> Keluar</a>
				<br>
			</div>
		</div>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="active">
				<a href="./">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>

<?php if($level == 1){ ?>
			<li class="active treeview">
				<a href="#">
					<i class="fa fa-list"></i> <span>Data Master Aplikasi</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="index.php?page=operator"><i class="fa fa-users"></i> Data Operator</a></li>
					<li><a href="index.php?page=kategori"><i class="fa fa-th-large"></i> Kategori Pelayanan</a></li>
					<li><a href="index.php?page=subkategori"><i class="fa fa-chevron-right"></i> Sub Kategori Pelayanan</a></li>
					<li><a href="index.php?page=syarat"><i class="fa fa-check-square"></i> Data Syarat Layanan</a></li>
				</ul>
			</li>
<?php } ?>

			<li class="active treeview">
					<a href="#">
							<i class="fa fa-archive"></i><span>Manajemen Arsip</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
					</a>
					<ul class="treeview-menu">
	<?php
	if($level == 2 || $level == 1){ ?>
							<li>
									<a href="index.php?page=pemohon">
											<span class="fa fa-user"></span><span class="text">Proses Pelayanan</span>
									</a>
							</li>
	<?php } ?>
	<?php if($level == 3 || $level == 1){ ?>
							<!-- <li> -->
									<!-- <a href="index.php?page=scan"> -->
											<!-- <span class="icon-file"></span><span class="text">Scan Manajemen</span> -->
									<!-- </a>                   -->
							<!-- </li>    -->
							<li>
									<a href="index.php?page=upload">
											<span class="fa fa-upload"></span><span class="text">Upload File Arsip</span>
									</a>
							</li>
	<?php } ?>
							<li>
									<a href="index.php?page=arsip">
											<span class="fa fa-list-alt"></span><span class="text">Daftar Arsip</span>
									</a>
							</li>
							<li>
									<a href="index.php?page=arsip-status">
											<span class="fa fa-list-alt"></span><span class="text">Status Arsip</span>
									</a>
							</li>
					</ul>
			</li>

			<li class="active treeview">
					<a href="#">
							<span class="fa fa-book"></span><span class="text">Laporan / Report</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
					</a>
					<ul class="treeview-menu">
							<li>
									<a href="index.php?page=lapharian">
											<span class="fa fa-file"></span><span class="text">Laporan Harian</span>
									</a>
							</li>
							<li>
									<a href="index.php?page=lapbulanan">
											<span class="fa fa-file"></span><span class="text">Rekapitulasi Bulanan</span>
									</a>
							</li>
							<li>
									<a href="index.php?page=grafikperbulan">
											<span class="fa fa-file"></span><span class="text">Grafik Bulanan</span>
									</a>
							</li>
							<li>
									<a href="index.php?page=grafikpertahun">
											<span class="fa fa-file"></span><span class="text">Grafik Tahunan</span>
									</a>
							</li>
					</ul>
			</li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

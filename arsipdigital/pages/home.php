<?php
include "includes/config.php";
$sqlop          = $conn->query("SELECT COUNT(userid) AS totaluser FROM ad_user");
$sqlkategori	= $conn->query("SELECT COUNT(id_kategori) AS totalkategori FROM ad_kategori");
$sqlsubkategori = $conn->query("SELECT COUNT(id_sub_kategori) AS totalsubkategori FROM ad_sub_kategori");
$sqlktp     = $conn->query("
            SELECT count(*) total
            from ad_arsip
            join ad_kategori on ad_arsip.id_kategori=ad_kategori.id_kategori
            where ad_arsip.id_kategori = 101
            ");
$sqlkk      = $conn->query("
            SELECT count(*) total
            from ad_arsip
            join ad_kategori on ad_arsip.id_kategori=ad_kategori.id_kategori
            where ad_arsip.id_kategori = 102
            ");
$sqlkawin   = $conn->query("
            SELECT count(*) total
            from ad_arsip
            join ad_kategori on ad_arsip.id_kategori=ad_kategori.id_kategori
            where ad_arsip.id_kategori = 103
            ");
$sqllahir   = $conn->query("
            SELECT count(*) total
            from ad_arsip
            join ad_kategori on ad_arsip.id_kategori=ad_kategori.id_kategori
            where ad_arsip.id_kategori = 104
            ");
$sqlmati    = $conn->query("
            SELECT count(*) total
            from ad_arsip
            join ad_kategori on ad_arsip.id_kategori=ad_kategori.id_kategori
            where ad_arsip.id_kategori = 105
            ");
$sqlanak    = $conn->query("
            SELECT count(*) total
            from ad_arsip
            join ad_kategori on ad_arsip.id_kategori=ad_kategori.id_kategori
            where ad_arsip.id_kategori = 106
            ");
$op = $sqlop->fetch_assoc();
$kategori = $sqlkategori->fetch_assoc();
$subkategori = $sqlsubkategori->fetch_assoc();
$ktp = $sqlktp->fetch_assoc();
$kk = $sqlkk->fetch_assoc();
$kawin = $sqlkawin->fetch_assoc();
$lahir = $sqllahir->fetch_assoc();
$mati = $sqlmati->fetch_assoc();
$anak = $sqlanak->fetch_assoc();

?>


  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Aplikasi Arsip Digital
      <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="./"><i class="fa fa-dashboard"></i> Aplikasi Arsip Digital</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-text bg-red" align="center">
            <h1><?php echo $op['totaluser'];?></h1>
            Operator
            <br><br>
          </span>

          <div class="info-box-content">
            <span><b>Meliputi :</b></span><br>
            <span>1. <b>Data Nama Operator</b></span><br>
            <span>2. <b>Data Level Operator</b></span><br>
            <span>3. <b>Tanggal Registrasi</b></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-text bg-green" align="center">
            <h1><?php echo $kategori['totalkategori'];?></h1>
            Kategori Layanan
            <br><br>
          </span>

          <div class="info-box-content">
            <span><b>Meliputi :</b></span><br>
            <span>1. <b>Data Nama Kategori</b></span><br>
            <span>2. <b>Data Keterangan</b></span><br><br>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-text bg-aqua" align="center">
            <h1><?php echo $subkategori['totalsubkategori'];?></h1>
            Sub Kategori Layanan
            <br><br>
          </span>

          <div class="info-box-content">
            <span><b>Meliputi :</b></span><br>
            <span>1. <b>Data Nama Sub Kategori</b></span><br>
            <span>2. <b>Data Keterangan</b></span><br><br>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>


      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-text bg-yellow" align="center">
            <h1><?php echo $kk['total'];?></h1>
            Kartu Keluarga
            <br><br>
          </span>

          <div class="info-box-content">
            <br>
            <br>
            <br><br>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-text bg-blue" align="center">
            <h1><?php echo $ktp['total'];?></h1>
            Kartu Tanda Penduduk
            <br><br>
          </span>

          <div class="info-box-content">
            <br>
            <br>
            <br><br>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-text bg-gray" align="center">
            <h1><?php echo $lahir['total'];?></h1>
            Akte Kelahiran
            <br><br>
          </span>

          <div class="info-box-content">
            <br>
            <br>
            <br><br>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-text bg-black" align="center">
            <h1><?php echo $mati['total'];?></h1>
            Akte kematian
            <br><br>
          </span>

          <div class="info-box-content">
            <br>
            <br>
            <br><br>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

    </div>
  </section>

<!DOCTYPE html>
<html lang="en" class="no-js" >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title>Gerakan SMART Berbagi</title>
        <!-- BOOTSTRAP CORE CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
        <!-- ION ICONS STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet" />
        <!-- FONT AWESOME ICONS STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- FANCYBOX POPUP STYLES -->
        <link href="<?php echo base_url(); ?>assets/js/source/jquery.fancybox.css" rel="stylesheet" />
        <!-- STYLES FOR VIEWPORT ANIMATION -->
        <link href="<?php echo base_url(); ?>assets/css/animations.min.css" rel="stylesheet" />
        <!-- CUSTOM CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style-blue.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style-costum.css" rel="stylesheet" />
        <!-- DATA TABLES -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css"/>
        <!-- Jquery - UI -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
        <style type="text/css">
        .bold {
            font-style: italic;
            font-size: 14px;
            font-weight: bold;
        }
        </style>
    
        <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#menu-section">
        <!--MENU SECTION START-->
        <div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home">
                        Gerakan SMART Berbagi
                    </a>
                </div>

                <?php if ($this->uri->segment(1) == 'donatur' && isset($_SESSION['level_id']) == '2' ){ ?>
                    <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">DASHBOARD DONATUR</a></li>
                        <li><a href="#services">PROFIL</a></li>
                        <li><a href="#donasi">DONASI</a></li>
                        <li><a href="#laporan">LAPORAN KEUANGAN</a></li>
                        <li><a href="<?php echo base_url(); ?>auth/logout">LOGOUT</a></li>
                    </ul>
                </div>
                <?php } else { ?>
                    <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#services">KONSEP DASAR</a></li>
                        <li><a href="#petunjuk">PETUNJUK TEKNIS</a></li>
                        <li><a href="#gallery">GALLERY</a></li>
                        <li><a href="#team">TEAM</a></li>
                        <li><a href="#donatur">DONATUR</a></li>
                        <li><a href="#anakasuh">ANAK ASUH</a></li>
                        <!--<li><a href="#team">TEAM</a></li>-->
                        
                        <li><a href="<?php echo base_url(); ?>login_donatur">LOGIN DONATUR</a></li>
                    </ul>
                </div>
                 <?php } ?>
                
                <!---->
            </div>
        </div>
        <!--MENU SECTION END-->
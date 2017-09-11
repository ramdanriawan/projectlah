<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pelanggan</h1>
            </div>
        </div><!--/.row-->

<div class="box-body">
        <?php if($action=='insert') {?>
        <form action="#" class="form-horizontal" id="quick-category" method="post">
          <?php } else {?>
          <!--<?php echo $message;?>-->
          <form action="<?php echo site_url().'admin/'.$cat.'/update/';?><?php echo !empty($pelanggan) ? $pelanggan->id_pelanggan : "";?>" class="form-horizontal"  method="post">
            <?php  } ?>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Nama</label>
              <div class="col-sm-8">
                <input id="pelanggan" name="nama" class="form-control" value="<?php echo isset($pelanggan) ? $pelanggan->nama : '';?>" type="text" placeholder="pelanggan">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Username</label>
              <div class="col-sm-8">
                <input id="username" name="username" class="form-control" value="<?php echo isset($pelanggan) ? $pelanggan->username : '';?>" type="text" placeholder="username">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Password</label>
              <div class="col-sm-8">
                <input id="password" name="password" class="form-control" value="<?php echo isset($pelanggan) ? $pelanggan->password : '';?>" type="text" placeholder="password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Alamat</label>
              <div class="col-sm-8">
                <input id="alamat" name="alamat" class="form-control" value="<?php echo isset($pelanggan) ? $pelanggan->alamat : '';?>" type="text" placeholder="alamat">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Email</label>
              <div class="col-sm-8">
                <input id="email" name="email" class="form-control" value="<?php echo isset($pelanggan) ? $pelanggan->email : '';?>" type="text" placeholder="email">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">KTP</label>
              <div class="col-sm-8">
                <input id="ktp" name="ktp" class="form-control" value="<?php echo isset($pelanggan) ? $pelanggan->ktp : '';?>" type="text" placeholder="No ktp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label" for="name"></label>
              <div class="col-sm-8">
                <input type="hidden" name="id_pelanggan" id="id_pelanggan" value="<?php echo !empty($pelanggan) ? $pelanggan->id_pelanggan : "";?>">
            <?php if($action=='insert') { ?>
            <button class="btn btn-primary" id="<?php echo $action;?>-category">
            Submit <i class="fa fa-arrow-circle-right"></i>
            <?php } else { ?>
            <input class="btn btn-primary"  value="Submit" type="submit">
            <?php } ?>
            </button>
              </div>
            </div>
          
          </form>

      </div>
      </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- /.content-wrapper -->
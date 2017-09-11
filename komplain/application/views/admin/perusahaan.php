<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Perusahaan</h1>
            </div>
        </div><!--/.row-->

<div class="box-body">
        <?php if($action=='insert') {?>
        <form action="#" class="form-horizontal" id="quick-category" method="post">
          <?php } else {?>
          <!--<?php echo $message;?>-->
          <form action="<?php echo site_url().'admin/'.$cat.'/update/';?><?php echo !empty($perusahaan) ? $perusahaan->id_perusahaan : "";?>" class="form-horizontal"  method="post">
            <?php  } ?>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Nama Perusahaan</label>
              <div class="col-sm-8">
                <input id="nama_perusahaan" name="nama_perusahaan" class="form-control" value="<?php echo isset($perusahaan) ? $perusahaan->nama_perusahaan : '';?>" type="text" placeholder="perusahaan">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Username</label>
              <div class="col-sm-8">
                <input id="username" name="username" class="form-control" value="<?php echo isset($perusahaan) ? $perusahaan->username : '';?>" type="text" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Password</label>
              <div class="col-sm-8">
                <input id="password" name="password" class="form-control" value="" type="password" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Kategori</label>
              <div class="col-sm-4">
                <select name="id_kategori" class="form-control">
                    <option value=""></option>
                    <?php foreach($listKategori as $kategori) { ?>
                    <option value="<?php echo $kategori->id_kategori;?>" <?php if(!empty($perusahaan->id_kategori)) echo $perusahaan->id_kategori ==  $kategori->id_kategori ? 'selected' : '' ?>><?php echo $kategori->kategori?></option>
                    <?php } ?>
                  </select>

              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Nama Produk</label>
              <div class="col-sm-8">
                <input id="nama_produk" name="nama_produk" class="form-control" value="<?php echo isset($perusahaan) ? $perusahaan->nama_produk : '';?>" type="text" placeholder="Nama Produk">
              </div>
            </div>
            
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label" for="name"></label>
              <div class="col-sm-8">
                <input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?php echo !empty($perusahaan) ? $perusahaan->id_perusahaan : "";?>">
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
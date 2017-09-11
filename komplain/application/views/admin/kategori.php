<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
      <li class="active">Icons</li>
    </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Kategori</h1>
      </div>
      </div><!--/.row-->
      
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-solid box-primary">
              
              <div class="box-body">
                <!--<?php echo $message;?>-->
                <?php if($action=='insert') {?>
                <form action="#" class="form-horizontal" id="quick-category" method="post">
                  <?php } else {?>
                  <?php echo $message;?>
                  <form action="<?php echo site_url().'admin/'.$cat.'/update/';?><?php echo !empty($kategori) ? $kategori->id_kategori : "";?>" class="form-horizontal"  method="post">
                    <?php  } ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="name">Kategori</label>
                      <div class="col-sm-8">
                        <input id="kategori" name="kategori" class="form-control" value="<?php echo isset($kategori) ? $kategori->kategori : '';?>" type="text" placeholder="Kategori">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="name">Keterangan</label>
                      <div class="col-sm-10">
                        <textarea name="keterangan" class="textarea" placeholder="keterangan" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo isset($kategori) ? $kategori->keterangan : '';?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer clearfix">
                    <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo !empty($kategori) ? $kategori->id_kategori : "";?>">
                    <?php if($action=='insert') { ?>
                    <button class="pull-right btn btn-default" id="<?php echo $action;?>-category">
                    Submit <i class="fa fa-arrow-circle-right"></i>
                    <?php } else { ?>
                    <input class="pull-right btn btn-default"  value="Submit" type="submit">
                    <?php } ?>
                    </button>
                  </form>
                  
                  </div><!-- /.box-body -->
                  </div><!-- /.box -->
                  </div><!-- /.col -->
                  </div><!-- /.row -->
                  </section><!-- /.content -->
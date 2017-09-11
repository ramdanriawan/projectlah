<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Komplain</h1>
            </div>
        </div><!--/.row-->

<div class="box-body">
        <?php if($action=='insert') {?>
        <form action="#" class="form-horizontal" id="quick-category" method="post">
          <?php } else {?>
          <!--<?php echo $message;?>-->
          <form action="<?php echo site_url().'admin/'.$cat.'/update/';?><?php echo !empty($komplain) ? $komplain->id_komplain : "";?>" class="form-horizontal"  method="post">
            <?php  } ?>
            
            <div class="form-group">
              <label class="col-sm-2 control-label" for="name">Komplain</label>
              <div class="col-sm-8">
                <input id="pelanggan" name="judul_komplain" class="form-control" value="<?php echo isset($komplain) ? $komplain->judul_komplain : '';?>" type="text" placeholder="Komplain">
              </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Isi Komplain</label>
                <div class="col-sm-8">
                  <textarea class="ckeditor" name="isi_komplain"><?php echo isset($komplain) ? $komplain->isi_komplain : '';?></textarea>
                </div>
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label" for="name"></label>
              <div class="col-sm-8">
                <input type="hidden" name="id_komplain" id="id_komplain" value="<?php echo !empty($komplain) ? $komplain->id_komplain : "";?>">
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
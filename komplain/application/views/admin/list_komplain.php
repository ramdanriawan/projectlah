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

<!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid box-primary">
          <div class="box-header with-border">
            <div class="box-tools">
              <a href="<?php echo base_url()?>admin/komplain/insert"><button class="btn btn-info btn-md pull-right" type="submit">Insert</button> </a>
            </div>
          </div>
          <div class="box-body">
            <!--<?php echo $message;?>-->
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Pelanggan</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                if ($listKomplain) {
                foreach ($listKomplain as $komplain ) {
                ?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $komplain->nama ?></td>
                  <td><?php echo $komplain->kategori ?></td>
                  <td><?php echo $komplain->judul_komplain ?></td>
                  <td>
                    <?php //if($this->session->userdata('level_id') ==1) {?>
                    <a href="<?php echo base_url()?>admin/komplain/update/<?=$komplain->id_komplain?>"><button class="btn btn-info btn-md" type="submit">Edit</button> </a>
                    <a href="#" data-toggle="modal" data-target="#confirm-delete-modal" data-href="<?php echo base_url(); ?>admin/komplain/delete/<?=$komplain->id_komplain?>"><button class="btn btn-danger btn-md" type="submit">Delete</button></a>
                  </td>
                </tr>
                <?php }
                }?>
              </tbody>
            </table>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
            </div><!-- /.col -->
            </div><!-- /.row -->
            </section><!-- /.content -->  
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

<!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid box-primary">
          <div class="box-header with-border">
            <div class="box-tools">
              <a href="<?php echo base_url()?>admin/kategori/insert"><button class="btn btn-info btn-md pull-right" type="submit">Insert</button> </a>
            </div>
          </div>
          <div class="box-body">
            <!--<?php echo $message;?>-->
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Keterangan</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                if ($listKategori) {
                foreach ($listKategori as $kategori ) {
                ?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $kategori->kategori ?></td>
                  <td><?php echo $kategori->keterangan ?></td>
                  <td>
                    <?php //if($this->session->userdata('level_id') ==1) {?>
                    <a href="<?php echo base_url()?>admin/kategori/update/<?=$kategori->id_kategori?>"><button class="btn btn-info btn-md" type="submit">Edit</button> </a>
                    <a href="#" data-toggle="modal" data-target="#confirm-delete-modal" data-href="<?php echo base_url(); ?>admin/kategori/delete/<?=$kategori->id_kategori?>"><button class="btn btn-danger btn-md" type="submit">Delete</button></a>
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
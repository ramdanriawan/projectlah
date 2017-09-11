<?php
include "../../includes/config.php";
$item_per_page = 10;

if(isset($_POST["halaman"])){
    $page_number = filter_var($_POST["halaman"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1;
}

if(isset($_POST['filter'])){
	$filter = $_POST['filter'];
	$results = $conn->query("SELECT COUNT(a.id_syarat) FROM ad_syarat a JOIN ad_sub_kategori c ON a.id_sub_kategori = c.id_sub_kategori
							JOIN ad_kategori b ON b.id_kategori = c.id_kategori WHERE b.nama_kategori LIKE '%$filter%'");
}else{
	$results = $conn->query("SELECT COUNT(*) FROM ad_syarat");
}
$get_total_rows = $results->fetch_row();

$total_pages = ceil($get_total_rows[0]/$item_per_page);

$page_position = (($page_number-1) * $item_per_page);

if(isset($_POST['filter'])){
	$sql = $conn->query("SELECT a.id_syarat, a.nama_syarat, c.nama_sub_kategori, c.id_sub_kategori, a.keterangan_syarat
						 FROM ad_syarat a
						 JOIN ad_sub_kategori c ON a.id_sub_kategori = c.id_sub_kategori
						 JOIN ad_kategori b ON b.id_kategori = c.id_kategori
						 WHERE a.nama_syarat LIKE  '%$filter%'
						 ORDER BY a.id_syarat ASC  LIMIT $page_position, $item_per_page");
}else{
	$sql = $conn->query("SELECT * FROM ad_syarat,ad_sub_kategori WHERE ad_syarat.id_sub_kategori = ad_sub_kategori.id_sub_kategori ORDER BY ad_syarat.id_syarat ASC LIMIT $page_position, $item_per_page");
}
?>
			      <button class="btn btn-mini btn-primary" href="#tambah" data-toggle="modal" data-target="#tambah" type="button">Tambah Syarat Layanan</button>
            <button class="btn btn-mini btn-danger" onclick="hapus_syarat();" data-toggle="modal" type="button">Hapus Syarat Layanan</button>

            <br><br>

            <div class="row-fluid">

                        <div class="box">
                          <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-th"></i> Daftar Kategori Pelayanan</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">

                              <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
                                  <thead>
                                      <tr style="background-color:#222D32;color:#f1f1f1;">
                                          <th width="2%"><input type="checkbox" name="checkall" onClick="toggle(this)"/></th>
                                          <th width="5%">NO</th>
                                          <th width="25%">NAMA PERSYARATAN</th>
                                          <th>SUB KATEGORI PELAYANAN</th>
                                          <th width="10%">UBAH</th>
                                      </tr>
                                  </thead>
                    							<tbody class="tbl1">
                    							<?php
                    							$no=0;
                    							while($r=$sql->fetch_assoc()){$no++
                    							?>
                    								<tr>
                                        <td><input type="checkbox" name="chk" class="chk" value="<?php echo $r['id_syarat'];?>" id="chk-<?php echo $no;?>"/></td>
                                        <td><?php echo $r['id_syarat'];?></td>
                                        <td><?php echo $r['nama_syarat'];?></td>
                                        <td><?php echo $r['nama_sub_kategori'];?></td>
                                        <td>
                                          <a href="#edit" data-toggle="modal" data-target="#edit" class="edit-data tip"
                        									data-id="<?php echo $r['id_syarat'];?>"
                        									data-nama="<?php echo $r['nama_syarat'];?>"
                        									data-subkategori="<?php echo $r['id_sub_kategori'];?>"
                        									data-ket="<?php echo $r['keterangan_syarat'];?>"
                        									title="Ubah Kategori"><span class="fa fa-edit"></span>
                                          </a>
                      									</td>
                                    </tr>
                  							<?php
                  							}
                  							?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

<?php

echo '<div align="center">';
echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
echo '</div>';

function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){
        $pagination .= '<ul class="pagination">';

        $right_links    = $current_page + 3;
        $previous       = $current_page - 3;
        $next           = $current_page + 1;
        $first_link     = true;

        if($current_page > 1){
            $previous_link = ($previous==0)?1:$previous;
            $pagination .= '<li class="first"><a href="#" data-page="1" title="First">&laquo;</a></li>';

                for($i = ($current_page-2); $i < $current_page; $i++){
                    if($i > 0){
                        $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                    }
                }
            $first_link = false;
        }

        if($first_link){
            $pagination .= '<li class="first active"><a href="#">'.$current_page.'</a></li>';
        }elseif($current_page == $total_pages){
            $pagination .= '<li class="last active"><a href="#">'.$current_page.'</a></li>';
        }else{
            $pagination .= '<li class="active"><a href="#">'.$current_page.'</a></li>';
        }

        for($i = $current_page+1; $i < $right_links ; $i++){
            if($i<=$total_pages){
                $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){
                $next_link = ($i > $total_pages)? $total_pages : $i;

                $pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" title="Last">&raquo;</a></li>';
        }

        $pagination .= '</ul>';
    }
    return $pagination;
}
?>

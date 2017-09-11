<?php
include "../../includes/config.php";

$item_per_page = 5;

if(isset($_POST["halaman"])){
    $page_number = filter_var($_POST["halaman"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1;
}
$day	= date('d');
if(isset($_POST['filter'])){

	$filter = $_POST['filter'];
	$results = $conn->query("SELECT COUNT(*) FROM ad_proses WHERE id_proses LIKE '%$filter%' AND DAY(tgl_proses) = '$day'");
}else{
	$results = $conn->query("SELECT COUNT(*) FROM ad_proses WHERE DAY(tgl_proses) = '$day'");
}
$get_total_rows = $results->fetch_row();

$total_pages = ceil($get_total_rows[0]/$item_per_page);

$page_position = (($page_number-1) * $item_per_page);

if(isset($_POST['filter'])){
	$sql = $conn->query("SELECT a.id_proses,a.nik,a.nama,a.id_kategori,a.id_sub_kategori,a.telp,a.tgl_proses,a.nik_termohon,b.nama_kategori,c.nama_sub_kategori
						FROM ad_proses a
						JOIN ad_kategori b ON a.id_kategori = b.id_kategori
						JOIN ad_sub_kategori c ON a.id_sub_kategori = c.id_sub_kategori
						WHERE DAY(a.tgl_proses) = '$filter' ORDER BY a.id_proses ASC LIMIT $page_position, $item_per_page");
}else{
	$sql = $conn->query("SELECT a.id_proses,a.nik,a.nama,a.id_kategori,a.telp,a.id_sub_kategori,a.tgl_proses,a.nik_termohon,b.nama_kategori,c.nama_sub_kategori
						FROM ad_proses a
						JOIN ad_kategori b ON a.id_kategori = b.id_kategori
						JOIN ad_sub_kategori c ON a.id_sub_kategori = c.id_sub_kategori
						WHERE DAY(a.tgl_proses) = '$day'
						ORDER BY a.id_proses ASC LIMIT $page_position, $item_per_page");
}
?>

<div class="row-fluid">
  <br>
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-th"></i> Rekapitulasi Pelayanan Hari Ini</h3>
                  </div>

                  <div class="box-body">
                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
                                    <thead>
                                        <tr style="background-color:#222D32;color:#f1f1f1;">
                                          <th width="2%">No</th>
                                          <th width="15%">No. REGISTRASI</th>
                                          <th>PEMOHON</th>
                                          <th>NAMA PEMOHON</th>
                                          <th>NO BLANGKO</th>
                        									<th>JENIS PELAYANAN</th>
                        									<th>SUB PELAYANAN</th>
                        									<th>TGL REGISTRASI</th>
                        									<th>NIK TERMOHON</th>
                                        </tr>
                                    </thead>
                      							<tbody>
                      							<?php
                      							$no=0;
                      							while($r=$sql->fetch_assoc()){$no++
                      							?>
                      								<tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $r['id_proses'];?></td>
                                        <td><?php echo $r['nik'];?></td>
                                        <td><?php echo $r['nama'];?></td>
                      									<td><?php echo $r['telp'];?></td>
                      									<td><?php echo $r['nama_kategori'];?></td>
                      									<td><?php echo $r['nama_sub_kategori'];?></td>
                      									<td><?php echo date('d-m-Y', strtotime($r['tgl_proses']));?></td>
                      									<td><?php echo $r['nik_termohon'];?></td>
                                      </tr>
                      							<?php
                      							}
                      							?>
                                  </tbody>
                        </table>
                    </div>

                </div>

            </div><a href="#">

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

<script type="text/javascript" src="js/custom/date.js"></script>

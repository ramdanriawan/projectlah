<?php
include "../includes/config.php";
$subkategori = $_POST['subkategori'];
$no=0;
$sqltotal  = $conn->query("SELECT COUNT(id_syarat) AS total FROM ad_syarat WHERE id_sub_kategori='$subkategori'");
$total	   = $sqltotal->fetch_assoc();
					
$sqlsyarat = $conn->query("SELECT * FROM ad_syarat WHERE id_sub_kategori='$subkategori'");
?>
			   
				
                    <div class="head clearfix">
                        <div class="isw-documents"></div>
                        <h1>Syarat Layanan</h1>
                    </div>
                    <div class="block-fluid"> 
					
					<div class="row-form clearfix">
						<div class="span10">Jumlah Syarat</div>
						<div class="span1"><input type="text" id="jumlah" name="jumlah" readonly="true" value="<?php echo $total['total'];?>"/></div>   
						<div class="span10">Dasar Keputusan</div>                
					</div>
					<?php
					while($syarat=$sqlsyarat->fetch_assoc()){ $no++
						?>
						<div class="row-form clearfix">
                            <div class="span10"><?php echo $no;?>. <?php echo $syarat['nama_syarat'];?></div>
                            <div class="span2">
                                <label class="checkbox inline">
                                    <input type="checkbox" name="chk[]" class="chk" value="<?php echo $syarat['id_syarat'];?>" id="chk-<?php echo $no;?>"/> &nbsp;Ada
                                </label>
                            </div>
                        </div>  
						<?php
					}
					?>
					
						<div class="block">	
							<input type="button" onClick="proses_layanan();popup_print();" class="btn btn-warning" value="Simpan Perubahan">						
							<input type="button" onClick="awal();" class="btn btn-danger" value="Kembali">
						</div>
                    </div>
		
		
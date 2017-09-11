				<?php
				//error_reporting(0);
				include "../includes/config.php";
				$id = $_POST['id'];
				$sql = $conn->query("SELECT * FROM ad_proses WHERE id_proses='$id'");
				$r = $sql->fetch_assoc();

				$folder= '../php/files/'.$id.'/';
				$dir=opendir($folder);

				$file_array = array();
				while($baca_folder = readdir($dir))
				{
					$file_array[] = $baca_folder;
				}
				?>




				<div class="row-fluid">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">File Pada Registrasi ID : <?php echo $_POST['id'];?></h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<div class="box-body">
												<table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped" id="tSortable">
														<thead>
																<tr style="background-color:#222D32;color:#f1f1f1;">
                                    <th width="1%">No</th>
																		<th width="7%">File</th>
                                    <th width="35%">Nama File</th>
                                    <th width="25%">Size</th>
                                    <th width="35%">Type</th>
                                </tr>
                            </thead>
                            <tbody>
																			<?php
																			$nom = 0;
																			$jumlah_array = count($file_array);

																			function getFileType($files){
																				$path_chunks = explode("/", $files);
																				$thefile = $path_chunks[count($path_chunks) - 1];
																				$dotpos = strrpos($thefile, ".");
																				return strtolower(substr($thefile, $dotpos + 1));
																			}

																			function filesize_formatted($files)
																				{
																					$size = filesize($files);
																					$units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
																					$power = $size > 0 ? floor(log($size, 1024)) : 0;
																				return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
																			}

																			for($i=2; $i<$jumlah_array; $i++)
																			{
																				$nama_file = $file_array;
																				$files = '../php/files/'.$id.'/'.$nama_file[$i];
																				$nom++;

																				$foto = getFileType($files);

																				if($foto == 'pdf'){
																					$icon = 'pdf-icon.png';
																				}elseif($foto == 'png'){
																					$icon = 'jpg-icon.png';
																				}elseif($foto == 'jpg'){
																					$icon = 'jpg-icon.png';
																				}elseif($foto == 'jpeg'){
																					$icon = 'jpg-icon.png';
																				}elseif($foto == 'zip'){
																					$icon = 'zip-icon.png';
																				}elseif($foto == 'rar'){
																					$icon = 'rar-icon.png';
																				}

																			?>
                                <tr>
                                    <td valign="middle"><br><?php echo $nom;?></td>
																		<td valign="middle"><a href="includes/download.php?&src=<?php echo $nama_file[$i];?>&id=<?php echo $id;?>&download=true" target="_blank"><img src="img/icon-file/<?php echo $icon;?>" class="img-polaroid"></a></td>
                                    <td><br><a href="includes/download.php?&src=<?php echo $nama_file[$i];?>&id=<?php echo $id;?>&download=true" target="_blank">&nbsp;&nbsp;<?php echo $nama_file[$i];?></a></td>
                                    <td valign="middle"><br><?php echo filesize_formatted($files);?></td>
                                    <td valign="middle"><br><?php echo getFileType($files);?></td>
                                </tr>
														<?php
														}
														//closedir($folder);
														?>
                            </tbody>
                        </table>
                    </div>
					</div>
				</div>
				</div>

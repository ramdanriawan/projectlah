<table class="table">
	<tr>
		<td>No</td>
		<td>Tgl Surat</td>
		<td>Option</td>
	</tr>
	<?php 
	$no=1;
			foreach ($data->result() as $key => $value) {
?>
<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $value->tgl_surat ?></td>
	<td><a href="home/print_surat_keluar/<?php echo $value->id_surat_keluar ?>" target="_blank">PRINT</a></td>
</tr>
<?php
			}

	 ?>
</table>
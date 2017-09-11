<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laporan Anggota</title>
	</head>
	<body onload="window.print()">
		<center>
			<h2>Laporan Anggota</h2>
			<hr>
			<br>

			<b style="float:left;">
				Jumlah Anggota :
				<?php echo $anggota->num_rows(); ?>
			</b>
			<table width="100%" border="1">
				<tr>
					<td>No</td>
					<td>N I K</td>
					<td>Nama Anggota</td>
					<th>Tempat/Tgl Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Pekerjaan</th>
					<th>Resort</th>
				</tr>
				<?php
				$i = 1;
				foreach ($anggota->result() as $baris) {?>
					<tr>
						<td><?php echo "$i"; ?></td>
						<td><?php echo $baris->nik; ?></td>
						<td><?php echo $baris->nama_anggota; ?></td>
						<td><?php echo $baris->tempat_lahir.", ".$baris->tgl_lahir; ?></td>
						<td><?php echo ucwords($baris->jk); ?></td>
						<td><?php echo $baris->pekerjaan; ?></td>
						<td><?php echo $baris->nama_resort; ?></td>
					</tr>
				<?php
				$i++;
				} ?>
			</table>
		</center>
<br>
<br>
					<div style="float:right;">
						Mengetahui <br>
						Pimpinan Unit <br><br><br><br>


						( Bp. Saipul Anwar )
					</div>

	</body>
</html>

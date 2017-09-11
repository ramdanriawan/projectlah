<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laporan Keadaan Kas Perbulan</title>
	</head>
	<body onload="window.print()">
		<center>
			<h2>Laporan Keadaan Kas</h2>
			<hr>
			<br>

			<?php
			$no = 1;
			$transport  = 110000;
			$belanja	  = 50000;
			$saldo_awal = 2000000;

			foreach ($tampil_tunai as $baris) {
				//$cek_tunai = $this->db->query("SELECT * FROM tbl_tunai WHERE tgl_tunai='$baris->tgl_tunai'")->row();
				$cek_tunai = $this->M_Transaksi->get_sum_tunai($baris->tgl_tunai)->row();

				$cek_tgl 		= date('Y-m-d', strtotime('-1 days', strtotime($baris->tgl_tunai)));
				$cek_tunai2 = $this->M_Transaksi->get_sum_tunai($cek_tgl)->row();
				if ($cek_tunai2->tunai == "") {
						//$cek_tgl 		= date('Y-m-d', strtotime('-1 days', strtotime($cek_tunai2->tgl_tunai)));
						//$cek_tunai2 = $this->M_Transaksi->get_sum_tunai($cek_tgl)->row();
						//if ($cek_tunai2->tgl_tunai == "") {
								$saldo1 		= $saldo_awal;
						//}else{
					//			$saldo1 		= $cek_tunai2->tunai;
						//}
				}else{
						$cek_tgl2 		= date('Y-m-d', strtotime('-2 days', strtotime($cek_tunai->tgl_tunai)));
						$cek_tunai3   = $this->M_Transaksi->get_sum_tunai($cek_tgl2)->row();
						if ($cek_tunai3->tunai == "") {
								$s3 = $saldo_awal;
						}else{
								$s3 = $cek_tunai2->tunai;
						}

						$s1 				= $s3 - ($transport + $belanja + $cek_tunai2->kasbon_pagi);
						$s2			 		= $cek_tunai2->kasbon_kembali + $cek_tunai2->tunai;
						$saldo1 		= $s1 + $s2;
						//$saldo1 		= $cek_tunai2->tunai;
				}

				$a = $saldo1 - ($transport + $belanja + $cek_tunai->kasbon_pagi);
				$b = $cek_tunai->kasbon_kembali + $cek_tunai->tunai;
				$saldo2 = $a + $b;
			}

			$jumlah1 = $saldo1 - $transport - $belanja - $cek_tunai->kasbon_pagi;
			?>

		<table border='0' width='40%'>
			<tr>
				<td>Saldo Sebelumnya</td>
				<td>:&nbsp;<?php echo "Rp. ".number_format($saldo1,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Transport</td>
				<td>:&nbsp;<?php echo "Rp. ".number_format($transport,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Belanja</td>
				<td>:&nbsp;<?php echo "Rp. ".number_format($belanja,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Kasbon Pagi</td>
				<td>:&nbsp;<?php echo "Rp. ".number_format($cek_tunai->kasbon_pagi,0,",","."); ?></td>
			</tr>
			<tr>
				<td></td>
				<th><hr></th>
			</tr>
			<tr>
				<th>Jumlah</th>
				<th>:&nbsp;<?php echo "Rp. ".number_format($jumlah1,0,",","."); ?></th>
			</tr>
			<tr>
				<td>Kasbon Kembali</td>
				<td>:&nbsp;<?php echo "Rp. ".number_format($cek_tunai->kasbon_kembali,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Tunai</td>
				<td>:&nbsp;<?php echo "Rp. ".number_format($cek_tunai->tunai,0,",","."); ?></td>
			</tr>
			<tr>
				<td></td>
				<th><hr></th>
			</tr>
			<tr>
				<th>Jumlah</th>
				<th>:&nbsp;<?php echo "Rp. ".number_format($jumlah1 + $cek_tunai->kasbon_kembali + $cek_tunai->tunai,0,",","."); ?></th>
			</tr>
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

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laporan Keadaan Kas Perbulan</title>
	</head>
	<body onload="window.print()">
		<center>
			<h2>Laporan Keadaan Kas</h2>
			<br>
		<table border="1" width"100%">
			<tr>
				<th width="10">NO</th>
				<th>U R A I A N</th>
				<th>PERINCIAN</th>
				<th>JUMLAH</th>
				<th>NO</th>
				<th>U R A I A N</th>
				<th>PERINCIAN</th>
				<th>JUMLAH</th>
				<th>KETERANGAN</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Saldo Kas Bulan Lalu</td>
				<td>Rp. <?php $saldo1 = 6980000; echo number_format($saldo1,0,",",".");?></td>
				<td></td>
				<td>1</td>
				<td>Kasbon Pasar</td>
				<td>Rp. <?php echo number_format($total_tunai->kasbon_pakai,0,",",".");?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Tunai Pasar</td>
				<td>Rp. <?php echo number_format($total_tunai->tunai,0,",",".");?></td>
				<td></td>
				<td>2</td>
				<td>Biaya Umum</td>
				<td>Rp. <?php $biaya_umum = $total_kas * 50000; echo number_format($biaya_umum,0,",",".");?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Angsuran Bon Panjar</td>
				<td>Rp. <?php echo number_format($total_gaji->bon_panjar,0,",",".");?></td>
				<td></td>
				<td>3</td>
				<td>Transport Pasar</td>
				<td>Rp. <?php $transport_pasar = $total_kas * 110000; echo number_format($transport_pasar,0,",",".");?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Angsuran Bon Pembebanan</td>
				<td>Rp. <?php echo number_format($total_gaji->bon_pembebanan,0,",",".");?></td>
				<td></td>
				<td>4</td>
				<td>Gaji Karyawan/ti</td>
				<td>Rp. <?php echo number_format($total_gaji->gaji_bersih,0,",",".");?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Simpanan Dana Pensiun</td>
				<td>Rp. <?php echo number_format($total_gaji->simpanan_pensiun,0,",",".");?></td>
				<td></td>
				<td>5</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Simpanan Sukarela</td>
				<td>Rp. <?php echo number_format($total_gaji->simpanan_sukarela,0,",",".");?></td>
				<td></td>
				<td>6</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2" align="center">TOTAL</td>
				<td></td>
				<td>Rp. <?php
					$total_masuk = $saldo1 + $total_tunai->tunai + $total_gaji->bon_panjar +$total_gaji->bon_pembebanan + $total_gaji->simpanan_pensiun + $total_gaji->simpanan_sukarela;
					echo number_format($total_masuk,0,",",".");
				?></td>
				<td colspan="2" align="center">TOTAL</td>
				<td>Rp. <?php
					$total_keluar = $total_gaji->gaji_bersih + $transport_pasar + $biaya_umum + $total_tunai->kasbon_pakai;
					echo number_format($total_keluar,0,",",".");
					?></td>
				<td>Rp. <?php echo number_format($total_masuk - $total_keluar,0,",",".");?></td>
				<td></td>
			</tr>
		</table>
<br>

		<table border="0" width"100%">
			<tr>
				<td align="center" width="200">
					Mengetahui <br>
					Pimpinan Unit <br><br><br><br>


					( Bp. Saipul Anwar )
				</td>

				<td width="500"></td>

				<td align="center" width="200">
					Jambi, <?php echo date('d-F-Y'); ?> <br>
					Kasir <br><br><br><br>


					( <?php echo ucwords($this->db->query("SELECT * FROM tbl_karyawan WHERE jabatan='Kasir'")->row()->nama_karyawan); ?> )
				</td>
			</tr>
		</table>
	</body>
</html>

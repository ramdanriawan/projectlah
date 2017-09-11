<?php
include "includes/config.php";
$th = date('Y');
$bulan=array("01","02","03","04","05","06","07","08","09","10","11","12");
				
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Grafik Pelayanan Tahun <?php echo $th;?>'
        },
        subtitle: {
            text: 'Source: demo-arsip.mediainternal.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pemohon (Orang)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:3px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} Org</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            },
			line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [
		<?php 		  
		$sql = $conn->query("SELECT * FROM ad_kategori");
		while($r=$sql->fetch_assoc()){
			$id		  = $r['id_kategori'];
			$kategori = $r['nama_kategori'];
		?>
			{
				name: '<?php echo $kategori;?>',
				data: [
				<?php 
					for ($x=0;$x<=11;$x++){
						$bulannya = $bulan[$x];
						$sql2 = $conn->query("SELECT COUNT(id_proses) AS total FROM ad_proses,ad_kategori WHERE 
											  ad_kategori.id_kategori = ad_proses.id_kategori AND MONTH(ad_proses.tgl_proses) = '$bulannya'
											  AND ad_kategori.id_kategori='$id'");
						$total = $sql2->fetch_assoc();
						echo $total['total'].",";
					}
				?>
				]
			},
		<?php 
		}
		?>
		]
    });
});
		</script>
	</head>
	<body>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>

<div id="container" style="height: 310px;"></div>
		   
	</body>
</html>

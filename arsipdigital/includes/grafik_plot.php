<?php
include "includes/config.php";			
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

    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#container1').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Persentase Layanan Tahun <?php echo date('Y');?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
		<?php 		  
		$sqlplot = $conn->query("SELECT * FROM ad_kategori");
		?>
        series: [{
            name: "Kategori Layanan",
            colorByPoint: true,
            data: [
			<?php 
			while($rplot = $sqlplot->fetch_assoc()){
			$idkat = $rplot['id_kategori'];
			?>
				{
					name: "<?php echo $rplot['nama_kategori'];?>",
					y: <?php 
						$sqltotalplot = $conn->query("SELECT COUNT(id_proses) as totalplot FROM ad_proses WHERE id_kategori='$idkat'");
						$t = $sqltotalplot->fetch_assoc();
						echo $t['totalplot'];
					?>
				}, 
			<?php 
			}
			?>
			]
        }]
    });
});
		</script>
	</head>
	<body>
<script src="js/highcharts.js"></script>

<div id="container1" style="height: 310px;"></div>
		   
	</body>
</html>

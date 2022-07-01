<?php
include '../config/koneksi.php';
$nama = mysqli_query($conn, "SELECT * from keberangkatan");
while($row = mysqli_fetch_array($nama)){
	$nama_bus[] = $row['nama_bus'];

	$query = mysqli_query($conn, "SELECT sum(harga) as harga from keberangkatan where id_berangkat='".$row['id_berangkat']."'");
	$row = $query->fetch_array();
	$jumlah_harga[] = $row['harga'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chart Bus</title>
	<script type="text/javascript" src="chart.js"></script>
</head>
<body>
	<h2><p><center>Bar Chart Bus dan Harga</center></p></h2>
	<hr><br>
		<form class="form-horizontal" method="POST">
	<div style="width: 800px; height: 800px;">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_bus); ?>,
				datasets: [{
					label: 'Harga',
					data: <?php echo json_encode($jumlah_harga);
					?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
</form>
</body>
</html>
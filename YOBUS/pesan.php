<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PESAN YOBUS</title>

	<!-- link css dari bootstrap 5.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css"> -->
</head>

<body>

	<!-- Pilih Jadwal -->
	<div class="container-fluid pilih_jadwal pt-5 pb-5">
		<div class="container">
			<h2 class="display-3 text-center" id="pilih_jadwal">Pilih Jadwal</h2>
			<p class="text-center">
				Yok, Kami Siap Melayani Perjalanan Anda
			</p>
    <br>

	<form class="form-horizontal">
  		<table class="table table-striped">
    		<thead>
      			<tr>
					<th>Kode Bus</th>
					<th>Nama Bus</th>
					<th>Jadwal</th>
					<th>Rute</th>
					<th>Kelas</th>
					<th>Harga</th>
					<th>Pilih Bus</th>
     			</tr>
    		</thead>
    		<tbody>
    			<?php

    				include 'config/koneksi.php';

					$query = mysqli_query($conn, "SELECT * FROM keberangkatan ORDER BY id_berangkat ASC")or die(mysqli_error());
						if(mysqli_num_rows($query) == 0){	
							echo '<tr><td colspan="3" align="center">Tidak ada data!</td></tr>';		
						}
						else
						{	
							// $no = 1;				
							while($data = mysqli_fetch_array($query)){
								echo "<tr>
								<td>$data[0]</td>
								<td>$data[1]</td>
								<td>$data[2]</td>
								<td>$data[3]</td>
								<td>$data[4]</td>
								<td>$data[5]</td>
								<td> 
									<a href='data_diri.php?id_berangkat=".$data[0]."' class= 'btn btn-primary'>YOK</a>
								</tr>";

								// echo "<tr>
								// '<td>'.$no.'</td>';
								// '<td>'.$data['1'].'</td>';
								// '<td>'.$data['2'].'</td>';
								// '<td>'.$data['3'].'</td>';
								// '<td>'.$data['4'].'</td>';
								// '<td>'.$data['5'].'</td>';
								// </tr>";
								// $no++;	
							}

						}
			
				?>
    		</tbody>
  		</table>
	</form>
</div>
</div>

	<!-- link javascript dari bootsrap 5.2 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
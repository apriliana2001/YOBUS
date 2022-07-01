<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YOBUS</title>

	<!-- link css dari bootstrap 5.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<!-- navigasi -->
	<!-- navbar bootstrap 5.2 -->
	<!-- shadow untuk bayangan, fixed untuk posisi tetap -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">YOBUS</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- membuat navigasi berada di sebelah kanan -->
			<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#tentang_kami">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#registrasi">Registrasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="login.php">Login</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#info_bus" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Info Bus
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#jadwal_bus">Jadwal Bus</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#pesan_tiket">Pesan Tiket</a></li>
							<li><a class="dropdown-item" href="#cek_tiket">Cek Tiket</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#hubungi_kami">Hubungi Kami</a>
					</li>
				<!--
					<li class="nav-item">
						<a class="nav-link disabled">Disabled</a>
					</li>
				-->
				</ul>
			<!--
				<form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			-->
			</div>
		</div>
	</nav>

	<!-- banner -->
	<!-- pengaturan banner utama -->
	<!-- fluid = penuh -->
	<div class="container-fluid banner">
		<!-- membuat posisi di tengah -->
		<div class="container text-center">
			<!-- display 1 = paling besar -->
			<h4 class="display-1">Selamat Datang di YOBUS</h4>
			<!-- display 6 semakin kecil -->
			<h3 class="display-6">Yok, Atur Jadwal Perjalanan Anda Bersama Kami ;)</h3>
			<!-- danger = warna merah, lg = ukuran besar -->
			<a href="login.php" button type="button" class="btn btn-danger btn-lg"> Yok, Login </a>
		</div>
	</div>

	<!-- Tentang Kami -->
	<!-- pt=padding-top, pb=padding-bottom -->
	<div class="container-fluid tentang_kami pt-5 pb-5">
		<div class="container">
			<h2 class="display-3 text-center" id="tentang_kami">Tentang Kami</h2>
			<p class="text-center">
				Yok, Kenal YOBUS Lebih Dekat
			</p>
			<div class="clearfix pt-5"><img src = "https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="250"/>
				<p>YOBUS merupakan sebuah website pemesanan tiket bus paling mudah, murah, dan nyaman yang siap mengantarkanmu  ke berbagai kota di Indonesia.</p>
				<p>YOBUS didirikan pada tahun 2022 dengan tujuan untuk merevolusi sistem pemesanan tiket bus yang lebih efisien dan berbasis teknologi. </p>
				<p>Dengan memesan tiket bus melalui YOBUS, kamu pasti akan merasa puas karena sistem kami yang mudah digunakan dan terjamin kemanannya :)</p>
			</div>
		</div>
	</div>

	<!-- Registrasi -->
	<div class="container-fluid registrasi pt-5 pb-5 bg-light">
		<div class="container">
			<h2 class="display-3 text-center" id="registrasi">Registrasi</h2>
			<p class="text-center">
				Yok, Masukkan Data Diri Anda
			</p>
			<form action="simpan_regis.php" method="post">
				<div class="modal-body">
					<input type="hidden" name="action" id="action">

					<div class="form-group row mb-3">
						<label for="address" class="col-sm-2 col-form-label">Username Anda</label>
						<div class="col-sm-10">
							<input type="text" name="username" id="username" class="form-control">
						</div>
					</div>

					<div class="form-group row mb-3">
						<label for="address" class="col-sm-2 col-form-label">Password Anda</label>
						<div class="col-sm-10">
							<input type="Password" name="pw" id="pw" class="form-control">
						</div>
					</div>

					<div class="form-group row mb-3 text-center">
						<label class="col-sm-1 col-form-label"></label>
						<div class="col-sm-10">
							<a href="login.php" button class="btn btn-link">Sudah Punya Akun? Silahkan Login</a>
						</div>
					</div>

					<div class="form-group row mb-3 text-center">
						<label class="col-sm-1 col-form-label"></label>
						<div class="col-sm-10">
							<button class="btn btn-danger">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="container-fluid jadwal_bus pt-5 pb-5">
		<div class="container">
			<h2 class="display-3 text-center" id="jadwal_bus">Jadwal Bus</h2>
			<p class="text-center">
				Yok, Rute dan Harganya Kece-Kece Nihh
			</p>
			<form class="form-horizontal">
  		<table class="table table-striped">
    		<thead>
      			<tr>
					<th>No</th>
					<th>Nama Bus</th>
					<th>Jadwal</th>
					<th>Rute</th>
					<th>Kelas</th>
					<th>Harga</th>	
     			</tr>
    		</thead>
    		<tbody>
    			<?php

    				include 'config/koneksi.php';

					$query = mysqli_query($conn, "SELECT * FROM keberangkatan ORDER BY nama_bus ASC")or die(mysqli_error());
						if(mysqli_num_rows($query) == 0){	
							echo '<tr><td colspan="3" align="center">Tidak ada data!</td></tr>';		
						}
						else
						{	
							$no = 1;				
							while($data = mysqli_fetch_array($query)){	
								echo '<tr>';
								echo '<td>'.$no.'</td>';
								echo '<td>'.$data['nama_bus'].'</td>';
								echo '<td>'.$data['jadwal'].'</td>';
								echo '<td>'.$data['rute'].'</td>';
								echo '<td>'.$data['kelas'].'</td>';
								echo '<td>'.$data['harga'].'</td>';
								$no++;	
							}
						}
			
				?>
    		</tbody>
  		</table>
	</form>
		</div>
	</div>

	<!-- Pesan Tiket -->
	<div class="container-fluid pesan_tiket pt-5 pb-5 bg-light">
		<div class="container">
			<h2 class="display-3 text-center" id="pesan_tiket">Pesan Tiket</h2>
			<p class="text-center">
				Yok, Jangan Ragu-Ragu Klik Tombolnya
			</p>
			<form action="login.php" method="post">
					<br><br><br><br><br>
					<div class="form-group row mb-3 text-center">
						<label class="col-sm-1 col-form-label"></label>
						<div class="col-sm-10">
							<button class="btn btn-danger">Yok, Pesan</button>
						</div>
					</div>
			</form>
		</div>
	</div>

	<!-- Cek Status Tiket -->
	<div class="container-fluid cetak_tiket pt-5 pb-5 bg-light">
		<div class="container">
			<h2 class="display-3 text-center" id="cek_tiket">Cek Tiket</h2>
			<p class="text-center">
				Yok, Cek Status Tiket Perjalanan Anda Disini
			</p>
			<form action="cek_tiket.php" method="post">
					<br><br><br><br><br>
					<div class="form-group row mb-3 text-center">
						<label class="col-sm-1 col-form-label"></label>
						<div class="col-sm-10">
							<button class="btn btn-danger">Yok, Cek</button>
						</div>
					</div>
			</form>
		</div>
	</div>

	<!-- Hubungi Kami -->
	<div class="container-fluid hubungi_kami pt-5 pb-5">
		<div class="container text-center">
			<h2 class="display-3" id="hubungi_kami">Hubungi Kami</h2>
			<p>
				Yok, Jangan Ragu Menghubungi Kami Yaa
			</p>
			<div class="row pt-4">
				<div class="col-md-4">
					<span class="lingkaran"><i class="fa-brands fa-whatsapp fa-5x"></i></span>
					<h3 class="mt-3">WhatsApp</h3>
					<p>
						081234567890
					</p>
				</div>

				<div class="col-md-4">
					<span class="lingkaran1"><i class="fa-brands fa-instagram fa-5x"></i></i></span>
					<h3 class="mt-3">Instagram</h3>
					<p>
						@yobus_tiketbus
					</p>
				</div>

				<div class="col-md-4">
					<span class="lingkaran2"><i class="fa-brands fa-line fa-5x"></i></i></span>
					<h3 class="mt-3">Line</h3>
					<p>
						JlnSamaYobus
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container text-center pt-5 pb-5">
      Copyright &copy; 2022 - YOBUS. All Rights Reserved.
    </div>

	<!-- link javascript dari bootsrap 5.2 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
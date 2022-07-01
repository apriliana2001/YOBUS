<?php
//memanggil koneksi dari database
	include '../config/koneksi.php';
//memulai eksekusi session
	session_start();

	if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; 
	    else $halaman = "index";
//mengambil data sesuai session id_admin dan masuk ke login
	$id_admin=session_id();
	$id_login= $_SESSION['id'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin YOBUS</title>
	<!-- memanggil bootstrap -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<!-- memanggil font -->
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<!-- memanggil bootstrap admin -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/sb-admin.css">
</head>
<body>
	<!-- memanggil tag class denan nama wrapper -->
	<div class="wrapper">
		<!-- class navigasi bar atas dengan warna background -->
		<nav class="navbar navbar-default navbar-fixed-top" rol="navigation" style="background: #DC143C">
			<!-- memanggil class navigasi header -->
			<div class="navbar-header">
				<!-- tompol "button" untuk navigasi atas -->
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    	<!-- tombol navigasi responsif ketika ditekan akan beralih -->
			        <span class="sr-only">Toggle navigation</span>
			        <!-- class icon bar-->
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			    <!-- nama halaman pada pojok kiri atas navigasi dengan warna color #f9ecf2 -->
			    <a class="navbar-brand" style="color: #f9ecf2">Halaman Admin YOBUS</a>
			</div>

			<!-- MENU -->
			<!-- navigasi bar sebelah kanan -->
			<ul class="nav navbar-nav navbar-right">
			    <li>
			    	<!-- menembalikan ke proses logout -->
			        <a href="../config/proses_logout.php" style="color: #f9ecf2"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
			    </li>
			    <li>
			    	<a href=""></a>
			    </li>
			    <li>
			    	<a href=""></a>
			    </li>
			</ul>
			<!-- memanggil bootstrap navigasi bar pada side-navigation -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav" style="background: #DC143C">
					<!-- navigasi untuk pemesanan masuk -->
					<li>
						<a href="admin.php?halaman=pesan_masuk" style="color: #FFFFFF"><span class="glyphicon glyphicon-download-alt">&nbsp;</span>Pemesanan Masuk</a>
					</li>
					<!-- navigasi untuk manajemen -->
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo" style="color: #FFFFFF"><span class="glyphicon glyphicon-list-alt">&nbsp;</span>Manajemen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-triangle-bottom"></span></a>
						<!-- id demo pada class collapse -->
						<ul id="demo" class="collapse">
							<!-- tombol/halaman user pada navigasi manajemen -->
							<li>
								<a href="admin.php?halaman=manajemen_user" style="color: #FFFFFF">User</a>
							</li>
							
							<!-- tombol/halaman keberangkatan pada navigasi manajemen -->
							<li>
								<a href="admin.php?halaman=manajemen_berangkat" style="color: #FFFFFF">Keberangkatan</a>
							</li>
							
						</ul>
					</li>
					<!-- navigasi laporan -->
					<li>
						<a href="admin.php?halaman=laporan" style="color: #FFFFFF"><span class="glyphicon glyphicon-file">&nbsp;</span>Laporan</a>
					</li>
					<!-- navigasi chart -->
					<li>
						<a href="admin.php?halaman=chart" style="color: #FFFFFF"><span class="glyphicon glyphicon-pencil">&nbsp;</span>Chart</a>
					</li>
				</ul>
			</div>
		</nav>
<!-- memanggil div id page-wrapper -->
		<div id="page-wrapper">
			<!-- memanggil div class container-fluid yang berfungsi untuk mengambil seluruh lebar viewport -->
			<div class="container-fluid">
				<!-- mengatur grid layout medium screens dengan 2 grid -->
				<div class="col-md-2">
					
				</div>
				<!-- mengatur grid layout medium screens dengan 10 grid -->
				<div class="col-md-10">
					<?php
						// jika id session tidak ditemukan, maka diarahkan ke halaman login admin
						if (!isset($_SESSION['id']))
						{   
						        header('location:index.php');
						}

						//menu navigasi admin
						//halaman awal
						if ($halaman=='awal')
							include 'awal.php';
						//halaman pesanan masuk
						elseif ($halaman=='pesan_masuk')
							include 'pesanan_masuk.php';
						//halaman manajemen user
						elseif ($halaman=='manajemen_user')
							include 'info_user.php';
						//halaman manajemen bus
						elseif ($halaman=='manajemen_bus')
							include 'info_bus.php';
						//halaman manajemen keberangkatan
						elseif ($halaman=='manajemen_berangkat')
							include 'info_keberangkatan.php';
						//halaman konfirmasi
						elseif ($halaman=='konfirmasi')
							include 'konfirmasi.php';
						//halaman laporan
						elseif ($halaman=='laporan')
							include 'laporan.php';
						//halaman chart
						elseif ($halaman=='chart')
							include 'chart.php';

						//halaman edit
						elseif ($halaman=='edit_user')
							include 'edit_user.php';
						elseif ($halaman=='edit_info')
							include 'edit_info.php';
						elseif ($halaman=='edit_bus')
							include 'edit_bus.php';
						elseif ($halaman=='edit_berangkat')
							include 'edit_berangkat.php';
						

					?>
				</div>
			</div>
		</div>

	</div>
	
	<!-- jQuery -->
	<script src="../bootstrap/js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<!-- Morris Charts JavaScript -->
	<script src="../bootstrap/js/plugins/morris/raphael.min.js"></script>
	<script src="../bootstrap/js/plugins/morris/morris.min.js"></script>
	<script src="../bootstrap/js/plugins/morris/morris-data.js"></script>
</body>
</html>
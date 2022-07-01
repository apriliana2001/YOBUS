<?php
include 'koneksi.php';
if(!isset($_GET['id_berangkat'])){
	header('location: pesan.php');
}
	$id_berangkat = $_GET['id_berangkat'];
	$sql = "SELECT * FROM keberangkatan WHERE id_berangkat=$id_berangkat";
	$qry = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($qry);
    if (mysqli_num_rows($qry) < 1) {
    	die("data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YOK INPUT</title>

	<!-- link css dari bootstrap 5.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css"> -->
</head>

<body>

	<div class="container-fluid pt-5 pb-5 bg-light">
			<div class="container">
				<h2 class="display-3 text-center" id="pesan">Data Diri Penumpang</h2>
				<p class="text-center">
					Yok, Isi Data Diri Dulu Yaa ;)
				</p>
				<br><br>
				<form action="proses_pesan.php" method="post">

					<div class="modal-body">
						<input type="hidden" name="action" id="action">
						<div class="form-group row">
							<!-- <label for="address" class="col-sm-2 col-form-label">Kode Bus</label> -->
							<div class="col-sm-10">
								<input type="hidden" name="id_berangkat" id="id_berangkat" class="form-control" value="<?php echo $row['id_berangkat']?>">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">Nama Anda</label>
							<div class="col-sm-10">
								<input type="text" name="nama" id="nama" class="form-control">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">NIK Anda</label>
							<div class="col-sm-10">
								<input type="text" name="nik" id="nik" class="form-control">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">Usia Anda</label>
							<div class="col-sm-10">
								<input type="number" name="usia" id="usia" class="form-control">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">Nomor Telepon Anda</label>
							<div class="col-sm-10">
								<input type="text" name="telp" id="telp" class="form-control">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">Tanggal Perjalanan</label>
							<div class="col-sm-10">
								<input type="date" name="tgl_pergi" id="tgl_pergi" class="form-control">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label class="col-sm-2 col-form-label"></label>
							<div class="col-sm-10">
								<button class="btn btn-danger">Pesan</button>
							</div>
						</div>

						<!-- <div class="form-group">
	            			<label class="address col-sm-4"></label>
	            			<div class="col-sm-6" align="right">
	                			<button class="btn btn-danger">Update</button>
	            			</div>
	       				</div> -->
					</div>
				</form>
			</div>
		</div>
	<!-- link javascript dari bootsrap 5.2 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
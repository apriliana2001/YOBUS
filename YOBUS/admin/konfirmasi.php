<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: white}

th {
    background-color: #f2375d;
    color: white;
}

	
</style>
<?php

	include '../config/koneksi.php';

	$id	= $_GET['id'];

	$edit   = "SELECT pemesanan.id_berangkat, pemesanan.nama, pemesanan.telp, keberangkatan.nama_bus, keberangkatan.rute,  pemesanan.tgl_pergi, keberangkatan.kelas, keberangkatan.harga FROM keberangkatan, pemesanan WHERE pemesanan.id = '$id' AND pemesanan.id AND pemesanan.id_berangkat = keberangkatan.id_berangkat";
	$hasil  = mysqli_query($conn, $edit)or die(mysqli_error($conn));
	$data   = mysqli_fetch_array($hasil);

?>

<div class="row">
	<div class="col-md-12">
		<center><h2>Daftar Bayar Pemesan</h2></center>
		<div class="col-md-10">
			<br>
			<h4>Nama Pemesan : <?php echo $data['nama']; ?></h4>
			<br><br>
			<form action="../config/update_konfirm.php">
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<table class="table table-striped-bordered">
					<tr>
						<td width="200">No. Hp</td>
						<td width="50">:</td>
						<td><?php echo $data['telp']; ?></td>
					</tr>
					<tr>
						<td width="200">Tanggal pergi</td>
						<td width="50">:</td>
						<td><?php echo $data['tgl_pergi']; ?></td>
					</tr>
					<tr>
						<td width="200">Bus</td>
						<td width="50">:</td>
						<td><?php echo $data['nama_bus']; ?></td>
					</tr>
					<tr>
						<td width="200">Rute</td>
						<td width="50">:</td>
						<td><?php echo $data['rute']; ?></td>
					</tr>
					<tr>
						<td width="200">Tanggal pergi</td>
						<td width="50">:</td>
						<td><?php echo $data['tgl_pergi']; ?></td>
					</tr>
					<tr>
						<td width="200">Kelas</td>
						<td width="50">:</td>
						<td><?php echo $data['kelas']; ?></td>
					</tr>
					<tr>
						<td width="200">Harga</td>
						<td width="50">:</td>
						<td><?php echo $data['harga']; ?></td>
					</tr>
					<tr>
						<td width="200"></td>
						<td><a href="admin.php?halaman=pesan_masuk" class="btn btn-warning">Batal</a></td>
						<td><button type="submit" class="btn btn-danger">Konfirmasi</button></td>
					</tr>
				</table>
				</form>
		</div>
	</div>
</div>
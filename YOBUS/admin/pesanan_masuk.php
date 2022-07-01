	<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #ff1645}

th {
    background-color: #f2375d;
    color: white;
}
</style>
<div class="row">
	<div class="col-md-12">
		<center><h2>Daftar Pesanan Masuk</h2></center>
		<hr><br>
		<form class="form-horizontal" method="GET">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pemesan</th>
						<th>NIK</th>
						<th>Usia</th>
						<th>Telp</th>
						<th>Tanggal pergi</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php

						include '../config/koneksi.php';
						$no = 1;
						$query = mysqli_query($conn, "SELECT id, nama, nik, usia, telp, tgl_pergi, konfirm FROM pemesanan")or die(mysqli_error($conn));
										if(mysqli_num_rows($query) == 0){	
											echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';		
										}
											else
										{			
											while($data = mysqli_fetch_array($query)){ 
					?>

						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['nik']; ?></td>
							<td><?php echo $data['usia']; ?></td>
							<td><?php echo $data['telp']; ?></td>
							<td><?php echo $data['tgl_pergi']; ?></td>
							<td align="center"><?php if ($data['konfirm']==0) echo "Belum Di Konfirmasi";
										elseif ($data['konfirm']==1) echo "Sudah Di Konfirmasi"; 
								?>	
							</td>		 						
					<?php
						echo '<td><a href=admin.php?halaman=konfirmasi&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
						echo "</tr>";
							}
						}			

												
					?>
				</tbody>
			</table>
		</form>
	</div>
</div>
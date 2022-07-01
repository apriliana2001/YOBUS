<div class="row">
  <div class="col-md-12">
    <h2><center>Laporan Penjualan Tiket</h2>
    <hr>
       
<form action="" method="POST">
<table>



<table class="table" style="width:800px;">
    <thead>
      <tbody>
    <tr>
        <th class="bg-info"><center>No</th>
        <th class="bg-info"><center>Tanggal pergi</th>
        <th class="bg-info"><center>Nama</th>
        <th class="bg-info"><center>NIK</th>    
        <th class="bg-info"><center>Telp</th>
        <th class="bg-info"><center>Rute</th>
        <th class="bg-info"><center>Bus</th>
        <th class="bg-info"><center>Harga</th>    
    </tr>

<?php



include '../config/koneksi.php'; 

$no = 1;
     $query1 = "select id, pemesanan.tgl_pergi, pemesanan.nama, pemesanan.nik, pemesanan.telp, keberangkatan.rute, keberangkatan.nama_bus, keberangkatan.harga from pemesanan, keberangkatan WHERE pemesanan.id_berangkat = keberangkatan.id_berangkat";


  $tampil1 = mysqli_query($conn, $query1);


?>


<?php
if(!mysqli_num_rows($tampil1)) {
  echo "No posts yet";

} else {
while($row = mysqli_fetch_array($tampil1)) { ?>
    <tr>
        <td><center><?php echo $no++; ?></td>
        <td><center><?php echo $row['tgl_pergi']; ?></td>
        <td><center><?php echo $row['nama']; ?></td>
        <td><center><?php echo $row['nik']; ?></td>    
        <td><center><?php echo $row['telp']; ?></td>
        <td><center><?php echo $row['rute']; ?></td> 
        <td><center><?php echo $row['nama_bus']; ?></td> 
        <td><center><?php echo $row['harga']; ?></td>    
    </tr>

<?php }

?>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="cetak_report.php?print=1" target ="_blank" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report PDF</a></td>
      <td><a href="cetak_reportexc.php?print=1" target ="_blank" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="excel"></span> Cetak Report EXCEL</a></td>
    </tr>

<?php }
?>



      
</table>
</form>
<!DOCTYPE html>

<html lang="en">

<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/shop-homepage.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<title>Cetak Tiket</title>

<body onload="window.print()">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row-table-bordered">
                
                <br>
                <br>
                <br>
                <div class="col-md-4">
                    <font size="4"><b><p class="text-center">LAPORAN PENJUALAN TIKET</p></font>
                    <font size="3"><b><p class="text-center">YOBUS</p></font>
                </div>
                <style type="text/css">
                  hr.style2 {
                    border-top: 3px double #8c8b8b;
                    }
                </style>
            </div>
        </div>
        <hr class="style2">

        <?php
            
            include '../config/koneksi.php';
            
            error_reporting(0);


            $query1 = "select id, pemesanan.tgl_pergi, pemesanan.nama, pemesanan.nik, pemesanan.telp, keberangkatan.rute, keberangkatan.nama_bus, keberangkatan.harga from pemesanan, keberangkatan WHERE pemesanan.id_berangkat = keberangkatan.id_berangkat";

            $tampil1 = mysqli_query($conn, $query1)or die(mysqli_error($conn));

            $no =1;

        ?>

<body>
<h4><center>Laporan Penjualan</h4>
<table border="1" style="" align="center">
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

</table>

<br>
<br>




</body>
</html>
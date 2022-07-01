<?php
    // convert file ke bentuk excel
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=LAPORAN PENJUALAN TIKET YOBUS.xls");
?>

<h3>LAPORAN PENJUALAN TIKET YOBUS</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Tanggal Pergi</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Telp</th>
        <th>Rute</th>
        <th>Bus</th>
        <th>Harga</th>
    </tr>
    <?php
     include '../config/koneksi.php';
     $no = 1;
     $data = mysqli_query($conn, "select id, pemesanan.tgl_pergi, pemesanan.nama, pemesanan.nik, pemesanan.telp, keberangkatan.rute, keberangkatan.nama_bus, keberangkatan.harga from pemesanan, keberangkatan WHERE pemesanan.id_berangkat = keberangkatan.id_berangkat");
     while($dt = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $dt['tgl_pergi'] ?></td>
        <td><?php echo $dt['nama'] ?></td>
        <td><?php echo $dt['nik'] ?></td>
        <td><?php echo $dt['telp'] ?></td>
        <td><?php echo $dt['rute'] ?></td>
        <td><?php echo $dt['nama_bus'] ?></td>
        <td><?php echo $dt['harga'] ?></td>
    </tr>
    <?php
        }
    ?>
</table>

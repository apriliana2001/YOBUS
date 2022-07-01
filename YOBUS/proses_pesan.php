<?php
//mengoneksikan php dengan database "yobus"
$host = "localhost";
$username = "root";
$password = "";
$dbname = "yobus";

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    //jika koneksi gagal,
    die("Connection failed: " . mysqli_connect_error());
} 

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vid_berangkat=$_POST['id_berangkat'];
$vnama=$_POST['nama'];
$vnik=$_POST['nik'];
$vusia=$_POST['usia'];
$vtelp=$_POST['telp'];
$vtgl_pergi=$_POST['tgl_pergi'];

//memasukkan nilai dalam tabel pemesanan pada database "yobus"
$sql="INSERT INTO pemesanan (id_berangkat, nama, nik, usia, telp, tgl_pergi) VALUES ('$vid_berangkat','$vnama','$vnik','$vusia','$vtelp','$vtgl_pergi')";

//jika koneksi berhasil, maka akan muncul teks "Proses simpan ke database berhasil", akan tetapi jika gagal, maka teks yang akan muncul adalah Proses simpan ke database gagal
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);

echo"";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES PESAN YOBUS</title>

    <!-- link css dari bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container">
            <h2 class="display-3 text-center" id="proses_pesan">Pesan Tiket Berhasil</h2>
            <p class="text-center">
                Yok, Siapkan Diri Anda untuk Menikmati Layanan Terbaik Kami
            </p>
            <br><br>
            <!-- <div class="form-group row mb-3 text-center">
                <label class="col-sm-1 col-form-label"></label>
                    <div class="col-sm-10">
                        <button class="btn btn-success">YEYYY PERJALANAN ANDA BERSAMA YOBUS BERHASIL DIBUAT ;)</button>
                    </div>
            </div> -->

            <form action="index.php#hubungi_kami">
                <div class="form-group row mb-3 text-center">
                    <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <button class="btn btn-info">Kirim Bukti Pembayaran Anda melalui Media Sosial Kami. <br> Anda Dapat Melakukan Pengecekan Konfirmasi Pembayaran pada Tombol di Bawah <br> atau melalui Tab Info Bus pada Halaman Beranda YOBUS. <br>Untuk Informasi mengenai Kontak Kami, Silahkan Klik Disini</button>
                        </div>
                </div>
            </form>
            <br>
            <form action="cek_tiket.php">
                <div class="form-group row mb-3 text-center">
                    <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <button class="btn btn-danger">CEK TIKET DISINI</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <!-- link javascript dari bootsrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
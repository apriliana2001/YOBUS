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
$vusername=$_POST['username'];
$vpw=$_POST['pw'];

//memasukkan nilai dalam tabel registrasi pada database "yobus"
$sql="INSERT INTO registrasi (username, pw) VALUES ('$vusername','$vpw')";

//jika koneksi berhasil, maka akan muncul teks "Proses simpan ke database berhasil", akan tetapi jika gagal, maka teks yang akan muncul adalah Proses simpan ke database gagal
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);

echo"YEYY PROSES REGISTRASI BERHASIL ;)";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPAN REGISTRASI</title>

    <!-- link css dari bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> -->
</head>

<body>
        <form action="login.php" method="post">
            <br><br><br><br><br>
                <div class="form-group row mb-3 text-center">
                    <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <button class="btn btn-danger">Yok, Login</button>
                        </div>
                </div>
        </form>
    <!-- link javascript dari bootsrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
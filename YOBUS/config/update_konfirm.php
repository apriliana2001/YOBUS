<?php

    include 'koneksi.php';

    $id   = $_GET['id'];

    $update     = "UPDATE pemesanan SET konfirm=1 WHERE id='$id'";
    $konfirmasi = mysqli_query($conn, $update)or die(mysqli_error($conn));

    if ($konfirmasi)
        {
            echo "Pesanan Berhasil Dikonfirmasi";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=pesan_masuk">';
        }
    else {
            //echo "<strong><center>Data Gagal Diubah";
            //echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
            print"
                <script>
                    alert(\"Data Gagal Diubah!\");
                    history.back(-1);
                </script>";
        }
?>

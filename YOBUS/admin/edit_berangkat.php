<?php
//memanggil koneksi dari database
include '../config/koneksi.php';
//variabel GET untuk menampung nilai id_berangkat
$id_berangkat  = $_GET['id_berangkat'];

$edit    = "SELECT id_berangkat,nama_bus, jadwal, rute, kelas, harga FROM keberangkatan WHERE id_berangkat = '$id_berangkat'";
//menampilkan data ke mysql
$hasil   = mysqli_query($conn, $edit)or die(mysql_error());
//mengambil data tipe array
$data    = mysqli_fetch_array($hasil);

?>
<!-- mengatur grid layout medium screens dengan 12 grid -->
<div class="col-md-10">
    <h3>
        <!-- membuat text "Edit Info Jadwal Keberangkatan" di tengah  -->
        <div align="center">Edit Info Jadwal Keberangkatan</div>
    </h3>
    <br><br><br>
    <!-- membuat garis horizontal diabwah text dan memanggil action update_berangkat.php dengam method POST -->
    <form class="form-horizontal" action="../config/update_berangkat.php" method="POST">
        
        <input type="hidden" name="id_berangkat" value="<?php echo $id_berangkat ?>">
        <div class="form-group">
            <label class="control-label col-sm-4" for="tujuan">Bus :</label>
            <div class="col-sm-6">
                <input type="bus" class="form-control" name="bus" value="<?php echo $data['nama_bus']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="jadwal">Jadwal :</label>
            <div class="col-sm-6">
                <input type="jadwal" class="form-control" name="jadwal" value="<?php echo $data['jadwal']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="rute">Rute :</label>
            <div class="col-sm-6">
                <input type="rute" class="form-control" name="rute" value="<?php echo $data['rute']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="rute">Kelas :</label>
            <div class="col-sm-6">
                <input type="kelas" class="form-control" name="kelas" value="<?php echo $data['kelas']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="rute">Harga :</label>
            <div class="col-sm-6">
                <input type="harga" class="form-control" name="harga" value="<?php echo $data['harga']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>
<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","yobus");  
 $msg=""; 
 //menyambungkan halaman web dengan database 
 if (isset($_POST['Submit'])) {
     $nik=mysqli_real_escape_string($conn,$_POST['nik']);
     $sql=mysqli_query($conn,"select konfirm from pemesanan where nik='$nik' && konfirm='1'");  
     $num=mysqli_num_rows($sql);
     //jika ditemukan data = $sql 
      if ($num>0) {    
           $row=mysqli_fetch_assoc($sql);

           //menuju ke tiket_pdf.php
           header("location:tiket_sukses.php");
           //jika data tidak ditemukan, maka ...
          }else{  
           $msg="Mohon, Konfirmasi Pembayaran Anda Terlebih Dahulu";  
          } 
 }
?> 

 <!--masuk html-->
 <!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>CETAK TIKET YOBUS</title>

     <!-- link css dari bootstrap 5.2 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css"> -->
</head>

<body>
     <div class="container-fluid pt-5 pb-5 bg-light">
          <div class="container">
               <h2 class="display-3 text-center" id="cetak_tiket">Cek Tiket</h2>
               <p class="text-center">
                    Yok, Kami Tunggu Anda di Bus Andalan Kami
               </p>
               <br><br>
               <form action="" method="post">
                    <div class="modal-body">
                         <input type="hidden" name="action" id="action">

                         <div class="form-group row mb-3">
                              <label for="address" class="col-sm-2 col-form-label">NIK Anda</label required>
                              <div class="col-sm-10">
                                   <input type="text" name="nik" id="nik" class="form-control">
                              </div>
                         </div>

                         <div class="form-group row mb-3 text-center">
                              <label class="col-sm-15 col-form-label"><?php echo $msg ?></label>
                              <!-- <div class="col-sm-10">
                                   <button class="btn btn-link"> </button>
                              </div> -->
                         </div>

                         <div class="form-group row mb-3 text-center">
                              <label class="col-sm-1 col-form-label"></label>
                              <div class="col-sm-10">
                                   <button class="btn btn-danger" name="Submit">CEK</button>
                              </div>
                         </div>

                         <!-- <div class="form-group row mb-3 text-center">
                              <label class="col-sm-1 col-form-label"></label>
                              <div class="col-sm-10">
                                   <a href="index.php#registrasi" button class="btn btn-link">Belum Punya Akun? Silahkan Registrasi Terlebih Dahulu</a>
                              </div>
                         </div> -->
                         <!--jika gagal, menampilkan pesan gagal yang telah ditentukan-->
                         <!-- <div class="error">  
                             
                         </div> -->  
                    </div>
               </form>
               <form action="index.php">
                    <div class="form-group row mb-3 text-center">
                         <label class="col-sm-1 col-form-label"></label>
                         <div class="col-sm-10">
                              <button class="btn btn-link">Kembali ke Halaman Beranda</button>
                         </div>
                    </div>
               </form>
          </div>
     </div>

     <!-- link javascript dari bootsrap 5.2 -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
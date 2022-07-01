<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","yobus");  
 $msg=""; 
 //menyambungkan halaman web dengan database 
 if (isset($_POST['Submit'])) {  
      $username=mysqli_real_escape_string($conn,$_POST['username']);  
      $pw=mysqli_real_escape_string($conn,$_POST['pw']);  
      $sql=mysqli_query($conn,"select * from registrasi where username='$username' && pw='$pw'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0) {  
           //jika login berhasil  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['USER_ID']=$row['id'];  
           $_SESSION['USER_NAME']=$row['username'];  
           header("location:pesan.php");
           //jika login gagal (username/pw tidak sesuai), maka pesan yang akan ditampilkan...
          }else{  
           $msg="Mohon, Masukkan Data yang Valid!";  
          } 
 }
?> 

 <!--masuk html-->
 <!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>LOGIN YOBUS</title>

     <!-- link css dari bootstrap 5.2 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css"> -->
</head>

<body>
     <div class="container-fluid pt-5 pb-5 bg-light">
          <div class="container">
               <h2 class="display-3 text-center" id="login">Login</h2>
               <p class="text-center">
                    Yok, Login Akun Dulu Yaa
               </p>
               <form action="" method="post">
                    <div class="modal-body">
                         <input type="hidden" name="action" id="action">

                         <div class="form-group row mb-3">
                              <label for="address" class="col-sm-2 col-form-label">Username Anda</label>
                              <div class="col-sm-10">
                                   <input type="text" name="username" id="username" class="form-control" required>
                              </div>
                         </div>

                         <div class="form-group row mb-3">
                              <label for="address" class="col-sm-2 col-form-label">Password Anda</label required>
                              <div class="col-sm-10">
                                   <input type="Password" name="pw" id="pw" class="form-control">
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
                                   <button class="btn btn-danger" name="Submit">Send</button>
                              </div>
                         </div>

                         <div class="form-group row mb-3 text-center">
                              <label class="col-sm-1 col-form-label"></label>
                              <div class="col-sm-10">
                                   <a href="index.php#registrasi" button class="btn btn-link">Belum Punya Akun? Silahkan Registrasi Terlebih Dahulu</a>
                              </div>
                         </div>
                         <!--jika gagal, menampilkan pesan gagal yang telah ditentukan-->
                         <!-- <div class="error">  
                             
                         </div> -->  
                    </div>
               </form>
          </div>
     </div>

     <!-- link javascript dari bootsrap 5.2 -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
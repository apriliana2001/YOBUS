<!DOCTYPE html>

<html>

<head>
    <title>Login Admin</title>

    <meta charset="UTF-8">
    <!-- memanggil bootstrap dan font-->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">

    <!-- style css dengan size padding bottom 15px dan padding top 15px -->
    <style type="text/css">
        .row{
            padding-bottom: 15px;
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <br><br><br>
    <!-- membuat text "silahkan login" di tengah  -->
    <h3 align="center">Silahkan Login</h3>
    <br><br><br><br><br><br>
    <!-- mengatur grid layout medium screens dengan 12 grid -->
    <div class="col-md-12">
        <!-- mengatur grid layout medium screens dengan 4 grid -->
        <div class="col-md-4">
            
        </div>
        <!-- mengatur grid layout medium screens dengan 4 grid -->
        <div class="col-md-4">
            <!-- memeanggil proses login admin dari proses_login.php -->
            <form action="../config/proses_login.php" name="admin" method="post" onSubmit="return validasi(hits)">
                <!-- class input username -->
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <!-- input username dengan class form-control bertipe text-->
                    <input class="form-control" type="text" name="username" placeholder="username">
                </div>
                <!-- class input password -->
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <!-- input password dengan class form-control bertipe password-->
                    <input class="form-control" type="password" name="password" placeholder="password">
                </div>
                <br>
                <!-- tombol submit untuk login -->
                <div align="right">
                    <button class='btn btn-danger' type="submit">Login</button>
                </div>
            </form>
        </div>
        <!-- mengatur grid layout medium screens dengan 4 grid -->
        <div class="col-md-4">
            
        </div>

    </div>
    
</body>

</html> 
<?php
session_start();
$conn = mysqli_connect("localhost","root","","gudang5");


//cek login terdaftar apa tidak
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //cocokin dengan database
    $cekdatabase= mysqli_query($conn,"SELECT * FROM login WHERE username='$username'and password='$password'");
    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $ambildatarole = mysqli_fetch_array($cekdatabase);
        $role = $ambildatarole['role'];

        if($role=='admin'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'admin';
            header('location:admin');
    } elseif($role=='toko'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'toko';
            header('location:toko');
    } elseif($role=='pre') {
        $_SESSION['log'] = 'Logged';
        $_SESSION['role'] = 'pre';
        header('location:pre');
    } elseif($role=='gudang') {
        $_SESSION['log'] = 'Logged';
        $_SESSION['role'] = 'gudang';
        header('location:gudang');
    }
} else {
        header('location:index.php');
    
    }

};

    if(isset($_SESSION['admin'])){
        header('location:admin');
    } elseif(isset($_SESSION['toko'])){
        header('location:toko');
    } elseif(isset($_SESSION['pre'])){
        header('location:pre');
    } elseif(isset($_SESSION['gudang'])){
        header('location:gudang');
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mirorim - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row-cols-1">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="post">
                                            <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="username" id="username" placeholder="Enter Username" required>
                                            </div>
                                            <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="password" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block" type="submit" name="login">Login</button>
                                            <hr>
                                    </form>
                                    <button class="btn btn-secondary">
                                        <a href="index.php">
                                        Guest Mode</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
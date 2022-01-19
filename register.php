<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        .in-img {
            background: url("img/index.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <title>Halaman Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container-fluid">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block in-img"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <form method="POST" action="simpan_masyarakat.php" class="user">
                                        <div class="text-center">
                                            <h1 class="h3 text-gray-900 mb-4">REGISTRASI MASYARAKAT</h1>
                                            <p class="mt-4">Masukkan Data anda dengan Benar!</p>
                                            <hr>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukkan Nama " autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="nik" type="text" class="form-control form-control-user" placeholder="Masukkan NIK" required autofocus autocomplete="off">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password " autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="telp" placeholder="Masukkan No Telepon" autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="hidden" class="form-control form-control-user" value="masyarakat" name="level" placeholder="" autocomplete="off">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group"> 
                                            <select name="level" class="form-control dropdown-toggle" required>
                                                <option selected value="masyarakat" class="dropdown-item">Masyarakat</option>
                                            </select>
                                        </div>-->
                                        <button class="btn btn-primary btn-user btn-block" type="submit" value="Daftar!">Register</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p>Already have account?<a class="medium" href="index.php"> Login!</a></p>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>


</body>

</html>
<?php
session_start();
include "./services/koneksi.php";

$notifikasi_login = "";
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $query_users = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    // $query_karyawan = "SELECT * FROM karyawan";
    // $result_karyawan = $conn->query($query_karyawan);

    $query_users = "SELECT users.username, users.password, users.peran, karyawan.nip_karyawan, karyawan.nama_karyawan, karyawan.id
                FROM users 
                JOIN karyawan ON users.username = karyawan.nip_karyawan
                WHERE users.username = '$username' AND users.password = '$password'";
    $result_users = $conn->query($query_users);

    if ($result_users->num_rows > 0) {
        $data_login = $result_users->fetch_assoc();
        $_SESSION['id_karyawan'] = $data_login['id'];
        $_SESSION['nip'] = $data_login['nip_karyawan'];
        $_SESSION['username'] = $data_login['username'];
        $_SESSION['nama_karyawan'] = $data_login['nama_karyawan'];
        $_SESSION["peran"] = $data_login["peran"];
        if ($_SESSION["peran"] === "admin") {
            header("location: ./admin/index.php");
        } else if ($_SESSION["peran"] === "user") {
            header("location: ./user/index.php");
        }
    } else {
        $notifikasi_login = "USERNAME ATAU PASSWORD SALAH!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NET SUN POWER | Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="icon" href="/nsp/storage/nsp.jpg">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline shadow-lg">
            <div class="card-header text-center">
                <i class="h1">Net Sun Power</i>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login Terlebih Dahulu!</p>

                <span class="text-center login-box-msg text-red mb-10"><?= $notifikasi_login ?></span>

                <form action="login.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="row mt-2">
                        <button type="submit" class="btn btn-block btn-primary" name="btn_login">
                            <i class="fab mr-2"></i> LOGIN
                        </button>
                        <span class="mt-2 login-box-msg">Belum Memiliki Akun?<a href="register.php"> Klik
                                Disini Untuk Membuat</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./plugins/jquery/jquery.min.js"></script>
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/js/adminlte.min.js"></script>
</body>

</html>
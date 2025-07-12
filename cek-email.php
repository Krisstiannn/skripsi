<?php
include "./services/koneksi.php";
session_start();

$email = isset($_GET['email']) ? strtolower(trim($_GET['email'])) : '';
$notifikasi = "";

if (!empty($email)) {
    $query = "SELECT * FROM users WHERE username = '$email'";
    $result = $conn->query($query);

    if (!$result) {
        die("QUERY ERROR: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        header("Location: reset_password.php?email=" . urlencode($email));
        exit;
    } else {
        $notifikasi = "Email Tidak Ditemukan";
    }
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NET SUN POWER | CEK EMAIL</title>

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
                <p class="login-box-msg">Silahkan Masukkan Email Anda</p>

                <span class="text-center login-box-msg text-red mb-10"><?= $notifikasi ?></span>

                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?= htmlspecialchars($email)?>" required>
                    </div>
                    <div class="row mt-2 mb-3">
                        <button type="submit" class="btn btn-block btn-primary" name="btn_cek">
                            <i class="fab mr-2"></i> Cek Email
                        </button>
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
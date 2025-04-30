<?php 
include "/xampp/htdocs/siatur/services/koneksi.php";

if (isset($_POST['btn_submit'])) {
    $username_karyawan = $_POST['username_karyawan'];
    $password_karyawan = $_POST['password_karyawan'];
    $peran = $_POST['peran'];

    if (empty($username_karyawan) || empty($password_karyawan) || empty($peran)) {
        echo "<script type= 'text/javascript'>
                alert('Tolong isi data dengan benar!');
                document.location.href = 'tambah-akun.php';
            </script>";
        die();
    } else {
        $query_tambahAkun = "INSERT INTO users (id, username, password, peran) VALUES ('', '$username_karyawan', '$password_karyawan', '$peran')";
        $result_tambahAkun = $conn->query($query_tambahAkun);

        if ($result_tambahAkun) {
            echo "<script type= 'text/javascript'>
                alert('Data Berhasil Disimpan!');
                document.location.href = 'datakaryawan.php';
            </script>";
        } else {
            echo "<script type= 'text/javascript'>
                alert('Data Gagal Disimpan!');
                document.location.href = 'tambah-akun.php';
            </script>";
        }
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun Karyawan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/siatur/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/siatur/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/siatur/dist/css/adminlte.min.css">
    <link rel="icon" href="/siatur/storage/nsp.jpg">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">


        <!-- Navbar -->
        <?php include "/xampp/htdocs/siatur/layouts/header.php"?>
        <!-- Navbar -->

        <!-- Main Sidebar Container -->
        <?php include "/xampp/htdocs/siatur/layouts/sidebar.php"?>
        <!-- END Main Sidebar -->

        <!-- Main Content -->
        <div class="content-wrapper bg-gradient-white">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Registrasi Akun Karyawan</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="content-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registrasi Akun Karayawan</h3>
                        </div>
                        <form action="tambah-akun.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username_karyawan"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" name="password_karyawan"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="peran">Peran</label>
                                    <select class="custom-select" name="peran">
                                        <option>-- Pilih --</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>
                                <a href="datakaryawan.php" type="submit" class="btn btn-danger"
                                    name="btn_cancel">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- END Main Content -->

        <!-- Main Footer -->
        <?php include "/xampp/htdocs/siatur/layouts/footer.php"?>
        <!-- End Footer -->
    </div>

    <script src="/siatur/plugins/jquery/jquery.min.js"></script>
    <script src="/siatur/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/siatur/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/siatur/dist/js/adminlte.js"></script>
    <script src="/siatur/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/siatur/plugins/raphael/raphael.min.js"></script>
    <script src="/siatur/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/siatur/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <script src="/siatur/plugins/chart.js/Chart.min.js"></script>
    <script src="/siatur/dist/js/demo.js"></script>
    <script src="/siatur/dist/js/pages/dashboard2.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
<?php
include "/xampp/htdocs/nsp/services/koneksi.php";
session_start();
$id_karyawan = $_SESSION['id_karyawan'] ?? null;
$query_jumlah = "SELECT COUNT(*) AS total_pekerjaan FROM wo WHERE id_karyawan = '$id_karyawan'";
$result_tampilJumlah = $conn->query($query_jumlah)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/nsp/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/nsp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/nsp/dist/css/adminlte.min.css">
    <link rel="icon" href="/nsp/storage/netsun.jpg">
</head>

<style>
    .center-screen {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 100px);
        padding: 20px;
    }

    .card-profile-wrapper {
        width: 100%;
        max-width: 400px;
    }
</style>


<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include "/xampp/htdocs/nsp/layouts/navbar.php" ?>
        <div class="content-wrapper">
            <div class="container center-screen">
                <div class="card card-primary card-profile-wrapper">
                    <div class="card-body box-profile">
                        <!-- <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="../../dist/img/user4-128x128.jpg"
                                alt="User profile picture">
                        </div> -->

                        <h3 class="profile-username text-center pb-3">Nina Mcintire</h3>
                        <!-- <p class="text-muted text-center">Software Engineer</p> -->

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Jenis Paket</b> <p class="float-right">Paket 3 Perangkat</p>
                            </li>
                            <li class="list-group-item">
                                <b>Kecepatan</b> <p class="float-right">3 Mbps</p>
                            </li>
                            <li class="list-group-item">
                                <b>Status</b> <p class="float-right">Aktif</p>
                            </li>
                            <li class="list-group-item">
                                <b>Jatuh Tempo</b> <p class="float-right">Tanggal 15</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <footer class="main-footer bg-blue" style="text-align: center;">
            <strong>Copyright &copy; 2025 Net Sun Power.</strong> All rights
            reserved.
        </footer>
    </div>



    <script src="/nsp/plugins/jquery/jquery.min.js"></script>
    <script src="/nsp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/nsp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/nsp/dist/js/adminlte.js"></script>
    <script src="/nsp/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/nsp/plugins/raphael/raphael.min.js"></script>
    <script src="/nsp/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/nsp/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <script src="/nsp/plugins/chart.js/Chart.min.js"></script>
    <script src="/nsp/dist/js/demo.js"></script>
    <script src="/nsp/dist/js/pages/dashboard2.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
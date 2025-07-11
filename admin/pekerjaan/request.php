<?php
include "/xampp/htdocs/nsp/services/koneksi.php";

// $query_tampil = "SELECT * FROM psb";
// $result_tampil = $conn->query($query_tampil);
// $query_tampilKaryawan = "SELECT * FROM karyawan";
// $result_tampilkaryawan = $conn->query($query_tampilKaryawan);

// if (isset($_POST['btn_kirim'])) {
//     $id_pekerjaan = $_POST['id_pekerjaan'];
//     $id_karyawan = $_POST['id_karyawan'];


//     $cek_karyawan = $conn->query("SELECT * FROM karyawan WHERE id = '$id_karyawan'");
//     $cek_pekerjaan = $conn->query("SELECT * FROM psb WHERE id = '$id_pekerjaan'");
//     $cek = $conn->query("SELECT * FROM wo WHERE id_pekerjaan = '$id_pekerjaan'")->fetch_assoc();

//     if ($cek > 0) {
//         echo "<script>alert('Pekerjaan Sudah Di Kirimkan Ke Karyawan!'); window.location.href='psb.php';</script>";
//         die();
//     } else if ($cek_karyawan->num_rows > 0 && $cek_pekerjaan->num_rows > 0) {
//         $query_insert = "INSERT INTO wo (id_karyawan, id_pekerjaan) VALUES ('$id_karyawan', '$id_pekerjaan')";
//         if ($conn->query($query_insert)) {
//             echo "<script>alert('Pekerjaan berhasil dikirim ke karyawan!'); window.location.href='psb.php';</script>";
//         } else {
//             echo "<script>alert('Gagal mengirim pekerjaan!'); window.history.back();</script>";
//         }
//     } else {
//         echo "<script>alert('Data tidak valid!'); window.history.back();</script>";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Pelanggan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/nsp/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/nsp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/nsp/dist/css/adminlte.min.css">
    <link rel="icon" href="/nsp/storage/nsp.jpg">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php include "/xampp/htdocs/nsp/layouts/header.php" ?>
        <?php include "/xampp/htdocs/nsp/layouts/sidebar.php" ?>

        <!-- Main Content -->
        <div class="content-wrapper bg-gradient-white">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Request Pelanggan</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <div class="card-header">
                                        <!-- <div class="card-title">
                                            <a href="tambah-psb.php" class="btn btn-sm btn-success ">Tambah
                                                Data</a>
                                        </div> -->

                                        <div class="card-title float-right">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right"
                                                    placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead class="bg-gradient-cyan">
                                                <tr>
                                                    <th>Nama Pelanggan</th>
                                                    <th>NO Layanan Internet</th>
                                                    <th>Jenis Request</th>
                                                    <th>Isi Request</th>
                                                    <th>Konfirmasi</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td>Kristian</td>
                                                <td>161201225975</td>
                                                <td>Pergantian Password</td>
                                                <td>12345</td>
                                                <td>ACC/Tidak</td>
                                                <td>Selesai/Tidak/Proses</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END Main Content -->

        <?php include "/xampp/htdocs/nsp/layouts/footer.php" ?>
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
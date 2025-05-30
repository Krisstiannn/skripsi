<?php
include "/xampp/htdocs/nsp/services/koneksi.php";

if (isset($_POST['btn_submit'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat_pelanggan = $_POST['alamat'];
    $wa_pelanggan = $_POST['no_wa'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $status_pelanggan = $_POST['status'];

    if (empty($nama_pelanggan) || empty($nama_pelanggan) || empty($wa_pelanggan) || empty($jenis_layanan) || empty($status_pelanggan)) {
        echo "<script type= 'text/javascript'>
                alert('Tolong isi data dengan benar!');
                document.location.href = 'tambah-pelanggan.php';
            </script>";
        die();
    } else {
        $query_tambahPelanggan = "INSERT INTO pelanggan (id, nama_pelanggan, alamat_pelanggan, wa_pelanggan, jenis_layanan, status_pelanggan) VALUES ('','$nama_pelanggan','$alamat_pelanggan', '$wa_pelanggan', '$jenis_layanan', '$status_pelanggan')";
        $result_tambahPelanggan = $conn->query($query_tambahPelanggan);
        if ($result_tambahPelanggan) {
            echo "<script type= 'text/javascript'>
                alert('Data Berhasil Disimpan!');
                document.location.href = 'pelanggan.php';
            </script>";
        } else {
            echo "<script type= 'text/javascript'>
                alert('Data Gagal Disimpan!');
                document.location.href = 'tambah-pelanggan.php';
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
    <title>Pelanggan</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/nsp/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/nsp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/nsp/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">


        <!-- Navbar -->
        <?php include "/xampp/htdocs/nsp/layouts/header.php" ?>
        <!-- Navbar -->

        <!-- Main Sidebar Container -->
        <?php include "/xampp/htdocs/nsp/layouts/sidebar.php" ?>
        <!-- END Main Sidebar -->

        <!-- Main Content -->
        <div class="content-wrapper bg-gradient-white">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tambah Data Pelanggan</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="content-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Pelanggan</h3>
                        </div>
                        <form method="POST" action="tambah-pelanggan.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama Pelanggan</label>
                                    <input type="text" class="form-control" name="nama_pelanggan"
                                        placeholder="Nama Pelanggan">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Rumah Atau Titik Kordinat</label>
                                    <input type="text" class="form-control" name="alamat"
                                        placeholder="Masukkan Alamat Rumah Atau Titik Kordinat">
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" name="no_wa" placeholder="Nomor WhatsApp">
                                </div>
                                <div class="form-group">
                                    <label for="layanan">Jenis Layanan Yang Digunakan</label>
                                    <input type="text" class="form-control" name="jenis_layanan"
                                        placeholder="Jenis Layanan Yang Digunakan">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>-- Pilih Status --</option>
                                        <option>AKTIF</option>
                                        <option>TIDAK AKTIF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>
                                <a href="pelanggan.php" type="submit" class="btn btn-danger"
                                    name="btn_cancel">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- END Main Content -->

        <!-- Main Footer -->
        <?php include "/xampp/htdocs/nsp/layouts/footer.php" ?>
        <!-- End Footer -->
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
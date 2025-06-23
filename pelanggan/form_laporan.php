<?php
include "/xampp/htdocs/nsp/services/koneksi.php";
session_start();

if (isset($_POST['btn_submit'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_telp = $_POST['no_wa'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
}

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

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include "/xampp/htdocs/nsp/layouts/navbar.php" ?>
        <div class="content-wrapper">
            <div class="content">
                <div class="container">
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Lapor Kerusakan</h1>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content">
                        <div class="content-fluid">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Input Data Perbaikan</h3>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama">Nama Pelanggan</label>
                                            <input type="text" class="form-control" id="nama_pelanggan"
                                                placeholder="Nama Pelanggan">
                                        </div>
                                        <div class="form-group">
                                            <label for="whatsapp">No WA</label>
                                            <input type="text" class="form-control" id="no_wa" placeholder="NO WA">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat atau Titik Kordinat</label>
                                            <textarea type="text" class="form-control" id="keluhan"
                                                placeholder="Alamat Lengkap Rumah"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="keluhan">Keluhan</label>
                                            <textarea type="text" class="form-control" id="keluhan"
                                                placeholder="Tuliskan detail keluhan"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success" id="btn_submit">Submit</button>
                                        <button type="submit" class="btn btn-danger" id="btn_cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
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
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>
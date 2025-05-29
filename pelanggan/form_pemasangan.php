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
                                    <h1>Pemasangan Baru</h1>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content">
                        <div class="content-fluid">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Input Data Pemasangan Baru</h3>
                                </div>
                                <form action="tambah-psb.php" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama">Nama Pelanggan</label>
                                            <input type="text" class="form-control" name="nama_pelanggan"
                                                placeholder="Nama Pelanggan">
                                        </div>
                                        <div class="form-group">
                                            <label for="whatsapp">No WA</label>
                                            <input type="text" class="form-control" name="no_wa" placeholder="NO WA">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat atau Titik Kordinat</label>
                                            <textarea type="text" class="form-control" id="keluhan" placeholder="Alamat Lengkap Rumah"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="rumah">Foto Rumah</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto_rumah"
                                                        accept="img/*">
                                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ktp">Foto KTP</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto_ktp" accept="img/*">
                                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                    <label for="paket">Pilihan Paket Internet</label>
                                    <select class="custom-select" name="paket">
                                        <option>-- Pilih --</option>
                                        <option>Paket 3 Perangkat</option>
                                        <option>Paket 5 Perangkat</option>
                                        <option>Paket 8 Perangkat</option>
                                        <option>Paket 12 Perangkat</option>
                                    </select>
                                </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>
                                        <button type="submit" class="btn btn-danger" name="btn_cancel">Cancel</button>
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
<?php
include "/xampp/htdocs/nsp/services/koneksi.php";

if (isset($_POST['btn_submit'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $wa_pelanggan = $_POST['no_wa'];
    $alamat = $_POST['alamat'];
    $foto_rumah = $_FILES['foto_rumah']['name'];
    $foto_ktp = $_FILES['foto_ktp']['name'];
    $paket = $_POST['paket'];

    $dir_foto = "/xampp/htdocs/nsp/storage/img/";
    $tmp_fileRumah = $_FILES['foto_rumah']['tmp_name'];
    $tmp_fileKtp = $_FILES['foto_ktp']['tmp_name'];
    move_uploaded_file($tmp_fileRumah, $dir_foto . $foto_rumah);
    move_uploaded_file($tmp_fileKtp, $dir_foto . $foto_ktp);

    if (empty($nama_pelanggan) || empty($wa_pelanggan) || empty($alamat) || empty($foto_rumah) || empty($foto_ktp) || empty($paket)) {
        echo "<script type= 'text/javascript'>
                alert('Tolong isi data dengan benar!');
                document.location.href = 'tambah-psb.php';
            </script>";
        die();
    } else {
        $query_tambahData = "INSERT INTO psb (id, nama_pelanggan, wa_pelanggan, alamat_pelanggan, rumah_pelanggan, ktp_pelanggan, paket_internet) 
        VALUES ('', '$nama_pelanggan', '$wa_pelanggan', '$alamat','$foto_rumah', '$foto_ktp', '$paket')";
        $result_tambahData = $conn->query($query_tambahData);

        if ($result_tambahData) {
            echo "<script type= 'text/javascript'>
                alert('Data Berhasil disimpan!');
                document.location.href = 'psb.php';
            </script>";
        } else {
            echo "<script type= 'text/javascript'>
                alert('Data Gagal disimpan!');
                document.location.href = 'tambah-psb.php';
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
    <title>Pemasangan Baru</title>
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
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
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
                                    <label for="alamat">Paket Internet</label>
                                    <input type="text" class="form-control" name="paket" placeholder="Paket Internet">
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
        <!-- END Main Content -->

        <?php include "/xampp/htdocs/nsp/layouts/footer.php" ?>
    </div>

    <script src="/nsp/plugins/jquery/jquery.min.js"></script>
    <script src="/nsp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/nsp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/nsp/dist/js/adminlte.js"></script>
    <script src="/nsp/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/nsp/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
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
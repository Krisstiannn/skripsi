<?php
include "/xampp/htdocs/nsp/services/koneksi.php";

$id = $_GET['id_perbaikan'];
$query = "SELECT * FROM perbaikan";
$result = $conn->query($query)->fetch_assoc();

if(isset($_POST['btn_submit'])) {
    $id_langganan = $_POST['id_langganan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_wa = $_POST['no_wa'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];

    if(empty($id_langganan) || empty($nama_pelanggan) || empty($no_wa) || empty($alamat) || empty($keluhan)) {
        echo "<script type= 'text/javascript'>
                alert('Tolong isi data Dengan Benar!');
                document.location.href = 'edit-perbaikan.php';
            </script>";
        die();
    } else {
        $edit = "UPDATE perbaikan SET id_langganan = '$id_langganan', nama_pelanggan = '$nama_pelanggan', no_telp = '$no_wa', alamat = '$alamat', keluhan = '$keluhan' WHERE id_perbaikan = '$id'";
        $result = $conn->query($edit);

        if($result) {
            echo "<script type= 'text/javascript'>
                alert('Data Berhasil dirubah!');
                document.location.href = 'perbaikan.php';
            </script>";
        } else {
            echo "<script type= 'text/javascript'>
                alert('Data Gagal dirubah!');
                document.location.href = 'perbaikan.php';
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
    <title>Perbaikan</title>
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
                            <h1>Perbaikan</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="content-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Perbaikan</h3>
                        </div>
                        <form action="edit-perbaikan.php?id=<?= $result['id_perbaikan'] ?>" method ="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_langganan">ID Berlangganan</label>
                                    <input type="text" class="form-control" name="id_langganan"
                                        placeholder="ID Berlangganan" value="<?= $result['id_langganan']?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Pelanggan</label>
                                    <input type="text" class="form-control" name="nama_pelanggan"
                                        placeholder="Nama Pelanggan" value="<?= $result['nama_pelanggan']?>">
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">No WA</label>
                                    <input type="text" class="form-control" name="no_wa" placeholder="NO WA" value="<?= $result['no_telp']?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat atau Titik Kordinat</label>
                                    <input type="text" class="form-control" name="alamat_rumah" placeholder="Alamat" value="<?= $result['alamat']?>">
                                </div>
                                <div class="form-group">
                                    <label for="keluhan">Keluhan</label>
                                    <input type="text" class="form-control" name="keluhan" placeholder="Keluhan" value="<?= $result['keluhan']?>">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" name="status_perbaikan" placeholder="Status" value="<?= $result['status']?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>
                                <a href="perbaikan.php" type="submit" class="btn btn-danger" name="btn_cancel">Cancel</a>
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
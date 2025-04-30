<?php 
include "/xampp/htdocs/siatur/services/koneksi.php";

$id = $_GET['id'];
$query_tampilKaryawan = "SELECT * FROM karyawan WHERE id = '$id'";
$result_tampilKaryawan = $conn->query($query_tampilKaryawan)->fetch_assoc();

if (isset($_POST['btn_submit'])) {
    $nama_karyawan = $_POST['nama_karyawan'];
    $posisi_karyawan = $_POST['jabatan_karyawan'];

    $query_editKaryawan = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan' , posisi_karyawan = '$posisi_karyawan' WHERE id = '$id'";
    $result_editKaryawan = $conn->query($query_editKaryawan);
    
    if ($result_editKaryawan) {
        echo "<script type= 'text/javascript'>
                alert('Data Berhasil Disimpan!');
                document.location.href = 'datakaryawan.php';
            </script>";
    } else {
        echo "<script type= 'text/javascript'>
                alert('Data Gagal Disimpan!');
                document.location.href = 'edit-karyawan.php?id=$id';
            </script>" ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Karyawan</title>
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
                            <h1>Karyawan</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="content-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Karayawan</h3>
                        </div>
                        <form action="edit-karyawan.php?id=<?= $result_tampilKaryawan['id']?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nip">Nomor Induk Pegawai</label>
                                    <input type="text" class="form-control" name="nip_karyawan"
                                        placeholder="Nomor Induk Pegawai"
                                        value="<?= $result_tampilKaryawan['nip_karyawan']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Karyawan</label>
                                    <input type="text" class="form-control" name="nama_karyawan"
                                        placeholder="Nama Karyawan"
                                        value="<?= $result_tampilKaryawan['nama_karyawan']?>">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan Karyawan</label>
                                    <select class="custom-select" name="jabatan_karyawan">
                                        <option><?= $result_tampilKaryawan['posisi_karyawan']?></option>
                                        <option>Admin</option>
                                        <option>IT</option>
                                        <option>Teknisi</option>
                                        <option>Supervisior</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>
                                <a href="datakaryawan.php" type="submit" class="btn btn-danger" name="btn_cancel">Cancel</a>
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
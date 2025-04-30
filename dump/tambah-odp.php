<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemasangan ODP</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/siatur/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/siatur/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/siatur/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php include "/xampp/htdocs/siatur/layouts/loading.php"?>
        <?php include "/xampp/htdocs/siatur/layouts/header.php"?>
        <?php include "/xampp/htdocs/siatur/layouts/sidebar.php"?>

        <!-- Main Content -->
        <div class="content-wrapper bg-lightblue">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pemasangan ODP</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="content-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Data Pemasangan ODP</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jenis Dan Warna Kabel</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Jenis dan Warna">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Redaman IN ODP</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="IN ODP">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Redaman IN PSB</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="IN PSB">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Redaman OUT Selanjutnya</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="OUT Selanjutnya">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Redaman Pelanggan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Pelanggan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jenis SPL Rasio</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="SPL Rasio">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Titik Kordinat Pemasangan</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Titik Kordinat">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- END Main Content -->

        <?php include "/xampp/htdocs/siatur/layouts/footer.php"?>
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
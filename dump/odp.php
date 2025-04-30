<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barang Masuk</title>
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
                            <h1>Data Pemasangan ODP</h1>
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
                                    <div class="card-tools">
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
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Jenis dan Warna Kabel</th>
                                                    <th>Redaman IN ODP</th>
                                                    <th>Redaman IN PSB</th>
                                                    <th>Redaman OUT Selanjutnya</th>
                                                    <th>Redaman Pelanggan</th>
                                                    <th>Jenis SPL Rasio</th>
                                                    <th>Titik Kordinat Pemasangan ODP</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Call of Duty IV</td>
                                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class="badge badge-success">Shipped</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <a href="edit-odp.php"
                                                            class="btn btn-block btn-info btn-xs ">Edit</a>
                                                        <a href="hapus-odp.php"
                                                            class="btn btn-block btn-danger btn-xs ">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Call of Duty IV</td>
                                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class="badge badge-warning">Pending</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                            90,80,-90,70,61,-83,68</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <a href="edit-odp.php"
                                                            class="btn btn-block btn-info btn-xs ">Edit</a>
                                                        <a href="hapus-odp.php"
                                                            class="btn btn-block btn-danger btn-xs ">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Call of Duty IV</td>
                                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class="badge badge-danger">Delivered</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f56954" data-height="20">
                                                            90,-80,90,70,-61,83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <a href="edit-odp.php"
                                                            class="btn btn-block btn-info btn-xs ">Edit</a>
                                                        <a href="hapus-odp.php"
                                                            class="btn btn-block btn-danger btn-xs ">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Call of Duty IV</td>
                                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class="badge badge-info">Processing</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                                            90,80,-90,70,-61,83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <a href="edit-odp.php"
                                                            class="btn btn-block btn-info btn-xs ">Edit</a>
                                                        <a href="hapus-odp.php"
                                                            class="btn btn-block btn-danger btn-xs ">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Call of Duty IV</td>
                                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class="badge badge-warning">Pending</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                            90,80,-90,70,61,-83,68</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <a href="edit-odp.php"
                                                            class="btn btn-block btn-info btn-xs ">Edit</a>
                                                        <a href="hapus-odp.php"
                                                            class="btn btn-block btn-danger btn-xs ">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Call of Duty IV</td>
                                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class="badge badge-danger">Delivered</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f56954" data-height="20">
                                                            90,-80,90,70,-61,83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <a href="edit-odp.php"
                                                            class="btn btn-block btn-info btn-xs ">Edit</a>
                                                        <a href="hapus-odp.php"
                                                            class="btn btn-block btn-danger btn-xs ">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Call of Duty IV</td>
                                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class="badge badge-success">Shipped</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            90,80,90,-70,61,-83,63</div>
                                                    </td>
                                                    <td>
                                                        <a href="edit-odp.php"
                                                            class="btn btn-block btn-info btn-xs ">Edit</a>
                                                        <a href="hapus-odp.php"
                                                            class="btn btn-block btn-danger btn-xs ">Hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer clearfix">
                                    <a href="tambah-odp.php" class="btn btn-sm btn-success float-right ">Tambah
                                        Data</a>
                                </div>
                            </div>
                        </div>
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
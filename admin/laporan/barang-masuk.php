<?php 
include "/xampp/htdocs/siatur/services/koneksi.php";
include "/xampp/htdocs/siatur/library/fpdf.php";
session_start();

$start_date = date('Y-m-d', strtotime($_POST['start_date'] ?? date('d-m-Y')));
$end_date = date('Y-m-d', strtotime($_POST['end_date'] ?? date('d-m-Y')));

$query = "
    SELECT kode_barang, nama_barang AS nama_barang, jumlah_barang, tanggal_masuk 
    FROM inventaris 
    WHERE tanggal_masuk BETWEEN '$start_date' AND '$end_date'
    UNION ALL
    SELECT kode_barang, nama_barang AS nama_barang, jumlah_awal AS jumlah_barang, tanggal_masuk 
    FROM material 
    WHERE tanggal_masuk BETWEEN '$start_date' AND '$end_date'
    ORDER BY tanggal_masuk ASC
";

$result = $conn->query($query);

if(isset($_POST['cetak'])) {
    $logoPath = 'netsun.jpg';
    list($logoWidth, $logoHeight) = getimagesize($logoPath);
    
    $maxLogoHeight = 25;  
    $maxLogoWidth = 50;  
    $scaleHeight = $maxLogoHeight / $logoHeight;
    $scaleWidth = $maxLogoWidth / $logoWidth;
    $scale = min($scaleHeight, $scaleWidth); 
    $newLogoWidth = $logoWidth * $scale;
    $newLogoHeight = $logoHeight * $scale;
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->Image($logoPath, 10, 10, $newLogoWidth, $newLogoHeight);
    
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(60); 
    $pdf->Cell(0, 7, 'PT. Net Sun Power (NSP)', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60);
    $pdf->Cell(0, 7, 'Telp: 085654807560', 0, 1, 'L');
    $pdf->Cell(60);
    $pdf->Cell(0, 7, 'Jl. Handil Bakti, Semangat Dalam Komp Mitra Bakti Jalur 1 Blok D no 24', 0, 1, 'L');
    $pdf->Ln(5);
    $pdf->Cell(275, 0, '', 'B', 1, 'C');
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 10, 'Laporan Barang Masuk', 0, 1, 'C');
    $pdf->SetFont('Arial', 'I', 12);
    $pdf->Cell(190, 10, "Periode: $start_date - $end_date", 0, 1, 'C');
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(40, 10, 'Kode Barang', 1, 0, 'C');
    $pdf->Cell(60, 10, 'Nama Barang', 1, 0, 'C');
    $pdf->Cell(50, 10, 'Jumlah Barang', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Tanggal Masuk', 1, 1, 'C');
    
    
    $pdf->SetFont('Arial', '', 10);
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(40, 10, $row['kode_barang'], 1, 0, 'C');
        $pdf->Cell(60, 10, $row['nama_barang'], 1, 0, 'C');
        $pdf->Cell(50, 10, $row['jumlah_barang'], 1, 0, 'C');
        $pdf->Cell(40, 10, date('d-m-Y', strtotime($row['tanggal_masuk'])), 1, 1, 'C'); 
    }
    
    
    $pdf->Ln(15);
    
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(120);
    $pdf->Cell(70, 7, 'Banjarmasin, ' . date('d-m-Y'), 0, 1, 'C'); 
    $pdf->Ln(20);
    
    $pdf->Cell(120);
    $pdf->Cell(70, 7, '______________________', 0, 1, 'C');
    $pdf->Cell(120);
    $pdf->Cell(70, 7, $_SESSION['nama_karyawan'], 0, 1, 'C');
    $pdf->Cell(120);
    
    
    $pdf->Output();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gudang | Inventaris</title>
    <<link rel="preconnect" href="https://fonts.googleapis.com">
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
                            <h1>Data Inventaris</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
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
                                        <form action="" method="POST">
                                            <div class="card-title">

                                                <label for="start_date">Dari Tanggal:</label>
                                                <input type="date" name="start_date" value="<?= $start_date ?>"
                                                    required>

                                                <label for="end_date">Sampai Tanggal:</label>
                                                <input type="date" name="end_date" value="<?= $end_date ?>" required>

                                                <button type="submit" class="btn btn-sm btn-warning"
                                                    name="filter">Tampilkan</button>
                                                <button name="cetak" class="btn btn-sm btn-success">Cetak</button>
                                            </div>
                                        </form>

                                        <div class="card-title float-right">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right"
                                                    placeholder="Search">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead class="bg-gradient-cyan">
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah Barang</th>
                                                    <th>Tanggal Masuk Barang</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($result as $laporan) {?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $laporan['kode_barang']?></td>
                                                    <td><?= $laporan['nama_barang']?></td>
                                                    <td><?= $laporan['jumlah_barang']?></td>
                                                    <td><?= date('d-m-Y', strtotime($laporan['tanggal_masuk']))?></td>
                                                </tr>
                                            </tbody>
                                            <?php }?>
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
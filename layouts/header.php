<?php
date_default_timezone_set('Asia/Makassar');
$hari = date('l');
$tanggal = date('d-m-Y');
$jam = date('H:i:s');

?>
<nav class="main-header navbar navbar-expand navbar-dark bg-blue shadow-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/nsp/index.php" class="nav-link text-light">Home</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <span class="nav-link text-light text-italic"><?= $hari . "," . " " . $tanggal ?></span>
        </li>
    </ul>
</nav>
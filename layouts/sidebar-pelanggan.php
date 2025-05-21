<?php
if (isset($_POST['btn_logout'])) {
    session_start();
    session_destroy();
    echo "<script type= 'text/javascript'>
    alert('Anda Telah Keluar!');
    document.location.href = '/nsp/login.php';
    </script>";
    exit();
}
?>

<aside class="main-sidebar sidebar-dark-primary bg-blue shadow-lg elevation-5">
    <div class="brand-link bg-blue" style="border: none">
        <img src=" /nsp/storage/nsp.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text text-light">Net Sun Power</span>
    </div>

    <div class="sidebar">
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/nsp/user/index.php" class="nav-link">
                        <ion-icon name="clipboard-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <ion-icon name="code-working-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">
                            Working Order
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/nsp/user/wo_pemasangan.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Pemasangan Baru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/nsp/user/wo_perbaikan.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Perbaikan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="../user/absen.php" class="nav-link">
                        <ion-icon name="people-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">
                            Absen Pegawai
                            <i class="right fas"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="" method="POST">
                        <button type="submit" class="btn" name="btn_logout">
                            <p class="text-light">Logout</p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
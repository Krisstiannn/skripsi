<aside class="main-sidebar sidebar-dark-primary bg-blue shadow-lg elevation-5">
    <div class="brand-link bg-blue" style="border: none">
        <img src=" /siatur/storage/nsp.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text text-light">Net Sun Power</span>
    </div>

    <div class="sidebar">
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/siatur/user/index.php" class="nav-link">
                        <ion-icon name="clipboard-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/siatur/user/wo.php" class="nav-link">
                        <ion-icon name="code-working-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">
                            Working Order
                            <i class="right fas"></i>
                        </p>
                    </a>
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
                    <form action="/siatur/logout.php" method="POST">
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
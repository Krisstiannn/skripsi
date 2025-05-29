<nav class="main-header navbar navbar-expand-md navbar-light navbar-white bg-blue">
    <div class="container">
        <p href="#" class="navbar-brand">
            <img src="/nsp/storage/nsp.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text text-light">AdminLTE 3</span>
        </p>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/nsp/pelanggan/profile.php" class="nav-link text-light">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a href="/nsp/pelanggan/form_pemasangan.php" class="nav-link text-light">DAFTAR PEMASANGAN</a>
                </li>
                <li class="nav-item">
                    <a href="/nsp/pelanggan/form_laporan.php" class="nav-link text-light">LAPOR KERUSAKAN</a>
                </li>
            </ul>
        </div>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link ">
                    <ion-icon style= "color: white;" name="person-sharp" size="large" class="far nav-icon"></ion-icon>
                </a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="nsp/pelanggan/reset_password.php" class="dropdown-item">Reset Password</a></li>
 
              <li class="dropdown-divider"></li>

              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item">Log Out</a>
              </li>
              
            </ul>
            </li>
        </ul>
    </div>
</nav>
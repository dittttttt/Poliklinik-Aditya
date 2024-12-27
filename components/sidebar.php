<aside class="main-sidebar elevation-4" style="background-color:rgb(1, 51, 138); color: #ffffff;">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 d-flex">
            <div class="image">
                <img src="assets\images\profil_doctor.svg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style ="color: #ffffff;"><?php echo $username ?></a>
            </div>
        </div>
        <hr style="background-color: #ffffff;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php
                    if ($_SESSION['akses'] == "admin") {
                    ?>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashboard_admin.php" class="nav-link">
                                <i class="fas fa-solid fas fa-th nav-icon" style ="color: #ffffff;"></i>
                                <p style ="color: #ffffff;">Dashboard <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dokter.php" class="nav-link">
                                <i class="fas fa-solid fa-user-nurse nav-icon" style ="color: #ffffff;"></i>
                                <p style ="color: #ffffff;">Dokter <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="poli.php" class="nav-link">
                                <i class="fas fa-solid fa-hospital nav-icon" style ="color: #ffffff;"></i>
                                <p style ="color: #ffffff;">Poli <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="obat.php" class="nav-link">
                                <i class="fas fa-solid fa-tablets nav-icon" style ="color: #ffffff;"></i>
                                <p style ="color: #ffffff;">Obat <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link">
                                <i class="fas fa-solid fa-user nav-icon" style ="color: #ffffff;"></i>
                                <p style ="color: #ffffff;">Pasien <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                    </ul>
                    <?php } else if($_SESSION['akses']=="dokter"){ ?>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                            <a href="dashboard_dokter.php" class="nav-link">
                                <i class="fas fa-solid fas fa-th nav-icon" style ="color: #ffffff;"></i>
                                <p  style ="color: #ffffff;">Dashboard <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwalPeriksa.php" class="nav-link">
                                <i class="fas fa-solid fa-hospital-user nav-icon" style ="color: #ffffff;"></i>
                                <p  style ="color: #ffffff;">Jadwal Periksa <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="periksaPasien.php" class="nav-link">
                                <i class="fas fa-solid fa-stethoscope nav-icon" style ="color: #ffffff;"></i>
                                <p  style ="color: #ffffff;">Daftar Pasien <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="riwayatPasien.php" class="nav-link">
                                <i class="fas fa-solid fa-book-medical nav-icon" style ="color: #ffffff;"></i>
                                <p  style ="color: #ffffff;">Riwayat Pasien <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profilDokter.php" class="nav-link">
                                <i class="fas fa-solid fa-address-card nav-icon" style ="color: #ffffff;"></i>
                                <p  style ="color: #ffffff;">Profil Dokter<span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                    </ul>
                    <?php }  ?>
                </li>
                <li class="nav-item">
                    <a href="pages/logout/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt" style ="color: #ffffff;"></i>
                        <p style ="color: #ffffff;">
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
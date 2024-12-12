<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0A3981;">
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <?php
                if ($_SESSION['akses'] == "admin") {
            ?>
                <div class="image">
                    <img src="assets\images\profil_admin.svg" alt="User Image" style="width: 55px;">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $username ?></a>
                </div>
            <?php } else if($_SESSION['akses']=="dokter"){?>
                <div class="image">
                    <img src="assets\images\profil_doctor.svg" alt="User Image" style="width: 40px;">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $username ?></a>
                </div>
            <?php } ?>
        </div>

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
                                <i class="fas fa-solid fas fa-th nav-icon"></i>
                                <p>Dashboard <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dokter.php" class="nav-link">
                                <i class="fas fa-solid fa-user-nurse nav-icon"></i>
                                <p>Dokter <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="poli.php" class="nav-link">
                                <i class="fas fa-solid fa-hospital nav-icon"></i>
                                <p>Poli <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="obat.php" class="nav-link">
                                <i class="fas fa-solid fa-tablets nav-icon"></i>
                                <p>Obat <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link">
                                <i class="fas fa-solid fa-user nav-icon"></i>
                                <p>Pasien <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                    </ul>
                    <?php } else if($_SESSION['akses']=="dokter"){ ?>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                            <a href="dashboard_dokter.php" class="nav-link">
                                <i class="fas fa-solid fas fa-th nav-icon"></i>
                                <p>Dashboard <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                    </ul>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a href="pages/logout/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
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
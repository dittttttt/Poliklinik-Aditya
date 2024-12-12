<nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <img 
                src="assets/images/logo.svg" 
                alt="Logo" 
                class="img-fluid" 
                style="width: 250px; margin: 10px;"
            >
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <div class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#" 
            style="cursor: pointer; transition: background-color 0.3s ease;">
                <p class=" mb-0 mr-2 " style="font-size: 20px;"><?php echo $username ?></p>
                <img 
                    src="assets/images/profil.svg" 
                    alt="Logo" 
                    class="img-fluid" 
                    style="width: 40px; margin: 10px;"
                >
            </div>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
               
            <a href="pages/logout/logout.php" class="nav-link dropdown-item dropdown-footer" 
            style="transition: color 0.3s ease; display: flex; align-items: center;" 
            onmouseover="this.style.color='red'" 
            onmouseout="this.style.color='inherit'">
                <i class="nav-icon fas fa-sign-out-alt" style="margin-right: 8px;"></i>
                <p style="margin: 0;">Logout</p>
            </a>
            </div>
        </li>
    </ul>
</nav>
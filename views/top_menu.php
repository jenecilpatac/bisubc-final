
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <?php if ($_SESSION['ais']['logged'] != 'guest'): ?>
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">        
            <?php if ($_SESSION['ais']['logged'] == 'admin'): ?>
                <?php require_once 'views/tpl_admin_alerts.php' ?>
            <?php else: ?>
                <?php require_once 'views/tpl_alerts.php' ?>
            <?php endif; ?>

            <?php require_once 'views/tpl_user_info.php' ?>
        </ul>

    <?php else: ?>
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">    
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        Login
                    </span>
                    <img class="img-profile rounded-circle" src="img/blank-profile-picture.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="index.php?m=login">
                        <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Alumna/Alumnus Login
                    </a>
                    <a class="dropdown-item" href="index.php?m=login&type=admin">
                        <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Admin Login
                    </a>
                </div>
            </li>
        </ul>

    <?php endif; ?>

</nav>
<!-- End of Topbar -->

<div class="container">
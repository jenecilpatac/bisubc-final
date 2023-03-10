

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center m-2" href="index.php">
                <img src="img/bisu.png" width="50px" alt="">
                <span class="text-warning"> &nbsp; BISU-BC AIS</span>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Home -->
            <li class="nav-item 
                <?php if (isset($_GET['m']) && $_GET['m'] == 'home'): ?>
                    active
                <?php endif; ?>
            ">
                <a class="nav-link" href="index.php">
                <i class="fa fa-graduation-cap"></i>
                <span>Home</span></a>
            </li>
                
            <!-- Nav Item - About -->
            <li class="nav-item
                <?php if (isset($_GET['m']) && $_GET['m'] == 'about'): ?>
                    active
                <?php endif; ?>
            ">
                <a class="nav-link" href="index.php?m=about">
                <i class="fa fa-bullhorn"></i>
                <span>About</span></a>
            </li>
    

            <?php if (($_SESSION['ais']['logged'] != 'guest'))  : ?>               
                <!-- Nav Item - Announcements -->
                <li class="nav-item
                    <?php if (isset($_GET['m']) && $_GET['m'] == 'announcements'): ?>
                        active
                    <?php endif; ?>
                ">
                    <a class="nav-link" href="index.php?m=announcements">
                    <i class="fa fa-bullhorn"></i>
                    <span>Announcements</span></a>
                </li>
                
                <?php if ((is_array($_SESSION['ais']['logged']) && (isset($_SESSION['ais']['logged']['First_Name']))  || ($_SESSION['ais']['logged'] == 'admin' && intval($_GET['alumni_key']) > 0)) ): ?>                   
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item
                        <?php if (isset($_GET['m']) && $_GET['m'] == 'tracer'): ?>
                            active
                        <?php endif; ?>
                    ">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-folder  text-white"></i>
                            <span>Alumni Tracer</span>
                        </a>
                        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Grduate Tracer Survey:</h6>
                                <a class="collapse-item" href="index.php?m=tracer&profile=1&alumni_key=<?php echo $_GET['alumni_key'] ?>">Profile 1</a>
                                <a class="collapse-item" href="index.php?m=tracer&profile=2&alumni_key=<?php echo $_GET['alumni_key'] ?>">Profile 2</a>
                                <a class="collapse-item" href="index.php?m=tracer&profile=3&alumni_key=<?php echo $_GET['alumni_key'] ?>">Profile 3</a>
                            </div>
                        </div>
                    </li>
                <?php endif; ?> 

                <?php if ($_SESSION['ais']['logged'] == 'admin'): ?>  
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item
                        <?php if (isset($_GET['m']) && $_GET['m'] == 'admin_alerts'): ?>
                            active
                        <?php endif; ?>
                    ">
                        <a class="nav-link" href="index.php?m=admin_alerts">
                        <i class="fa fa-bullhorn"></i>
                        <span>Notifications</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item
                        <?php if (isset($_GET['report']) && $_GET['report'] == 1): ?>
                            active
                        <?php endif; ?>
                    ">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-folder  text-white"></i>
                            <span>Reports</span>
                        </a>
                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Alumni Reports:</h6>
                                <a class="collapse-item" href="index.php?m=registered_alumni&report=1">Registered Alumni</a>
                                <a class="collapse-item" href="index.php?m=outcome_indicator&report=1">Outcome Indicator</a>
                                <a class="collapse-item" href="index.php?m=employed_graduates&report=1">Employed Graduates</a>
                            </div>
                        </div>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Manage Data
                    </div>

                    <!-- Nav Item - Courses -->
                    <li class="nav-item
                        <?php if (isset($_GET['m']) && $_GET['m'] == 'manage_courses'): ?>
                            active
                        <?php endif; ?>
                    ">
                        <a class="nav-link" href="index.php?m=manage_courses">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Courses</span>
                        </a>
                    </li>

                    <!-- Nav Item - Alumni -->
                    <li class="nav-item
                        <?php if (isset($_GET['m']) && $_GET['m'] == 'manage_alumni'): ?>
                            active
                        <?php endif; ?>
                    ">
                        <a class="nav-link" href="index.php?m=manage_alumni">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Alumni</span></a>
                    </li>   
                    
                <?php endif; ?>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


<?php if (isset($_POST['alert_data']['alerts']) && !empty($_POST['alert_data']['alerts'])): ?>
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <?php if (isset($_POST['alert_data']['unread']) && $_POST['alert_data']['unread'] > 0): ?>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">
                        <?php echo $_POST['alert_data']['unread'] ?>
                    </span>
                <?php endif; ?>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <?php foreach ($_POST['alert_data']['alerts'] as $i => $alert): ?>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle 
                                <?php if (($i % 2) == 0): ?>
                                    bg-success
                                <?php else: ?>
                                    bg-warning
                                <?php endif; ?>
                            ">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500"><?php echo $alert['Date'] ?></div>
                            <?php if ($alert['Is_Read'] < 1): ?>
                                <span class="font-weight-bold"><?php echo $alert['Alert'] ?></span>
                            <?php else: ?>
                                <?php echo $alert['Alert'] ?>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endforeach; ?>
                <a class="dropdown-item text-center small text-gray-500" href="index.php?m=admin_alerts">Show All Alerts</a>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
    <?php endif; ?>
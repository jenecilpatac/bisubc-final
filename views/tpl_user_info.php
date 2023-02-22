                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php if (is_array($_SESSION['ais']['logged']) && isset($_SESSION['ais']['logged']['First_Name'])): ?>
                                        <?php echo ucwords(strtolower($_SESSION['ais']['logged']['First_Name'])) ?>
                                    <?php else: ?>
                                        Admin
                                    <?php endif; ?>
                                </span>                             
                                <img class="img-profile rounded-circle"                                 
                                    <?php if (isset($_SESSION['ais']['profile']['PROFILE_PIC']) && is_file($_SESSION['ais']['profile']['PROFILE_PIC'])): ?>
                                        src="<?php echo $_SESSION['ais']['profile']['PROFILE_PIC'] ?>"  
                                    <?php else: ?>
                                        src="img/blank-profile-picture.png" 
                                    <?php endif; ?>
                                >
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!--
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
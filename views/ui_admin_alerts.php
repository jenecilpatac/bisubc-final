<?php 
    require_once 'views/header.php';
    require_once 'views/side_menu.php';
    require_once 'views/top_menu.php';
?>

<!-- Page Heading -->
    <div>                  
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                    <i class="fa fa-bullhorn text-white"></i>
                </div>
            </div>
            <div>
                <div class="h5 text-warning -500">NOTIFICATIONS</div>
            </div>
        </a>
        <?php foreach ($_POST['admin_alert_list'] as $i => $data): ?>
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
                        <?php echo $data['Alert'] ?>
                    <div class="small text-gray-500"><?php echo $data['Date'] ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>   


<?php require_once 'views/footer.php'; ?>
<?php 
    require_once 'views/header.php';
    require_once 'views/side_menu.php';
    require_once 'views/top_menu.php';
?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <?php require_once 'views/tpl_alert_msg.php' ?>
    
    <h5 class="h5 mb-0 text-gray-800 mb-4"><strong>Alumni Profile</strong>     
        <!--<div class="spinner-grow text-primary saving_profile" role="status">
            <span class="sr-only saving_profile">Loading...</span>
        </div>-->
        <div class="d-sm-flex align-items-center justify-content-between mb-4" style="float:right;">
            <a href="./reports/profile_cv.php"  target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> 
                Download Profile
            </a>
        </div>
    </h5>    

    <?php if (isset($_GET['profile']) && $_GET['profile'] == 2): ?>
        <?php require_once 'views/tpl_profile2.php' ?>

    <?php elseif (isset($_GET['profile']) && $_GET['profile'] == 3): ?>
        <?php require_once 'views/tpl_profile3.php' ?>

    <?php else: ?>
        <?php require_once 'views/tpl_profile1.php' ?>

    <?php endif; ?>
</div>
<!-- /.container-fluid -->

<?php 
    require_once 'views/footer.php';
?>
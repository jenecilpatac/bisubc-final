<?php 
    require_once 'views/header.php';
    require_once 'views/side_menu.php';
    require_once 'views/top_menu.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
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
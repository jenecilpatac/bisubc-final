<?php 
    require_once 'views/header.php';
    require_once 'views/side_menu.php';
    require_once 'views/top_menu.php';
?>

<script>
    $(document).ready(function () {
        $('#employed_graduates_tbl').DataTable();
    });
</script>



    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employed Graduates</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Download Report
        </a>
    </div>

<?php require_once 'views/tpl_report_header.php'; ?>
<?php require_once 'views/tpl_table.php'; ?>

<?php require_once 'views/footer.php'; ?>
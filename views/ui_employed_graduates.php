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
        <h5 class="h5 mb-0 text-gray-800"><strong>Employed Graduates</strong></h5>
        <a href="./reports/employed_graduates.php"  target="_blank"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Generate Report
        </a>
    </div>

<?php require_once 'views/tpl_report_header.php'; ?>
<?php require_once 'views/tpl_table.php'; ?>

<?php require_once 'views/footer.php'; ?>
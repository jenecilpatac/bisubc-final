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
        <a href="./reports/employed_graduates.php?batch=<?php echo $_POST['batch_sel'] ?>"  target="_blank"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Generate Report
        </a>
    </div>

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <form action="index.php?m=employed_graduates&report=1" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-floating">
                        <span>Batch:</span>                        
                        <select class="form-control selectpicker"  id="batch" name="batch">
                            <?php foreach ($_POST['batches'] as $batch => $values) : ?>
                                <option value="<?php echo $batch ?>"
                                    <?php if (isset($_POST['batch_sel']) && $batch == $_POST['batch_sel']): ?>
                                        selected
                                    <?php endif; ?>
                                >
                                    <?php echo $batch ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <button class="btn btn-primary btn-user btn-block btn-warning py-3 px-5 mt-1" type="submit" name="view" value="alumni"
                        <?php if (empty($_POST['batches'])): ?>
                            disabled
                        <?php endif; ?>
                    >
                        View
                    </button>
                </div>
            </div>
        </form>
    </div>

<?php require_once 'views/tpl_report_header.php'; ?>
<?php require_once 'views/tpl_table.php'; ?>

<?php require_once 'views/footer.php'; ?>
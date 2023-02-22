<?php 
    include 'views/header.php';
    include 'views/side_menu.php';
    include 'views/top_menu.php';
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h5 class="h5 mb-0 text-gray-800"><strong>Outcome Indicator</strong></h5>
        <a href="./reports/outcome_indicator.php?batch=<?php echo $_POST['batch_sel'] ?>&course=<?php echo $_POST['course_name'] ?>"  target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Generate Report
        </a>
    </div>
    
    <!-- Begin Page Content -->
    <div class="container-fluid mb-4">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <form action="index.php?m=outcome_indicator&report=1" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating">
                            <span>Course:</span>                        
                            <select class="form-control selectpicker"  id="course" name="course">
                                <?php foreach ($_POST['courses'] as $course) : ?>
                                    <option value="<?php echo $course['Course_Code'] ?>"
                                        <?php if (isset($_POST['course_sel']) && $course['Course_Code'] == $_POST['course_sel']): ?>
                                            selected
                                        <?php endif; ?>
                                    >
                                        <?php echo $course['Course_Name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
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
                    <div class="col-3">
                        <button class="btn btn-primary btn-user btn-block btn-warning py-3 px-5 mt-1" type="submit" name="view" value="alumni"
                            <?php if (empty($_POST['courses']) || empty($_POST['batches'])): ?>
                                disabled
                            <?php endif; ?>
                        >
                            View
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End -->
    </div>

<?php include 'views/tpl_report_header.php'; ?>

<?php 
    $_POST['table'] = $_POST['details_table'];
    include 'views/tpl_table.php'; 
    $_POST['table'] = $_POST['summary_table'];
    $_POST['table']['no_footer'] = true;
    include 'views/tpl_table.php'; 
?>

<?php include 'views/footer.php'; ?>
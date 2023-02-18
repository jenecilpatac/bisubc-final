<?php 
    require_once 'views/header.php';
    require_once 'views/side_menu.php';
    require_once 'views/top_menu.php';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Alumni</h1>

    <?php require_once 'views/tpl_alert_msg.php' ?>

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <form action="index.php?m=manage_alumni" method="POST" enctype="multipart/form-data">
            <div class="row g-3 p-10 mt-2">
                <div class="col-6">
                    <div class="form-floating">
                        <label for="upload_csv">Select CSV file to uplaod alumni:</label>
                        <input type="file" name="upload_csv" accept="text/tsv" class="form-control form-control-lg" id="upload_csv" />
                    </div>
                </div>
                <div class="col-2 text-center mt-4 mb-2 form-floating">
                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning py-3 px-2" type="submit" name="save" value="alumni">
                        Upload Alumni
                    </button>
                </div>
                <div class="col-6 mt-3">
                    <div class="form-floating">
                        <label for="course_code">Course:</label>                        
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
                <div class="col-2 mt-3">
                    <div class="form-floating">
                        <label for="course_code">Batch:</label>                        
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
                <div class="col-2 text-center mt-4 mb-2 form-floating">
                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning py-3 px-4" type="submit" name="view" value="alumni"
                        <?php if (empty($_POST['courses']) || empty($_POST['batches'])): ?>
                            disabled
                        <?php endif; ?>
                    >
                        View Alumni
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- End -->
                
    <?php require_once 'views/tpl_table.php'; ?>

</div>
<!-- /.container-fluid -->


<?php require_once 'views/footer.php'; ?>
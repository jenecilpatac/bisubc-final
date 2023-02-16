<?php 
    require_once 'views/header.php';
    require_once 'views/side_menu.php';
    require_once 'views/top_menu.php';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Courses</h1>

    <?php require_once 'views/tpl_alert_msg.php' ?>

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <form action="index.php?m=manage_courses" method="POST">
            <div class="row g-3 p-10 mt-4">
                <div class="col-12">
                    <div class="form-floating">
                        <label for="department">Department:</label>
                        <select class="form-control selectpicker"  id="department" name="Department">
                            <?php foreach ($_DEPARTMENTS as $dept => $dept_desc) : ?>
                                <option value="<?php echo $dept ?>"
                                    <?php if (isset($_POST['department']) && $dept == $_POST['department']): ?>
                                        selected
                                    <?php endif; ?>
                                >
                                    <?php echo $dept.': '.$dept_desc ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="form-floating">
                        <label for="course_code">Course Code:</label>
                        <input type="text" class="form-control" id="course_code" name="Course_Code" placeholder="Enter Course Code">
                    </div>
                </div>
                <div class="col-8 mt-3">
                    <div class="form-floating m-0">
                        <label for="course_name">Course Name:</label>
                        <input type="text" class="form-control" id="course_name" name="Course_Name" placeholder="Enter Course Name">
                    </div>
                </div>
                <div class="col-12 text-center mt-4 mb-2 form-floating">
                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning py-3 px-5" type="submit" name="save" value="course"
                        <?php if (empty($_DEPARTMENTS)): ?>
                            disabled
                        <?php endif; ?>
                    >
                        Add course
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
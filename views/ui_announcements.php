<?php 
    require_once 'views/header.php';
    require_once 'views/side_menu.php';
    require_once 'views/top_menu.php';
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Announcements</h1>
</div>

    <?php if ($_SESSION['ais']['logged'] == ADMIN_USERNAME): ?>
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="logo">
                                <img src="img/bisu_logo.png" width="250px"  alt="" style="float: left; margin-left: 100px; margin-top:30px" >
                            </div>
                            <div class="col-lg-6">
                                <div class="p-8">
                                    <div class="text-center">
                                        <h1 class="h4 text-warning -900 mb-4 mt-3">ANNOUNCEMENT</h1>
                                    </div>
                                    <form class="user" action="index.php?m=announcements" method="POST">
                                        <div class="form-group">
                                            <div class="form-outline">
                                                <textarea class="form-control" name="announcement" id="textAreaExample1" rows="4" placeholder="Write Announcement..."></textarea>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block mb-3 btn-warning py-3 px-2" type="submit" name="save" value="announcement">
                                            Add Announcement
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div>                  
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                    <i class="fa fa-bullhorn text-white"></i>
                </div>
            </div>
            <div>
                <div class="h5 text-warning -500">LIST OF ANNOUNCEMENTS</div>
            </div>
        </a>
        <?php foreach ($_POST['announcement_list'] as $i => $data): ?>
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
                        <?php echo $data['Announcement'] ?>
                    <div class="small text-gray-500"><?php echo $data['Date'] ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>   


<?php require_once 'views/footer.php'; ?>
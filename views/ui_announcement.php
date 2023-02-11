<?php
     session_start();
     require_once 'header.php';
     require_once 'sidebar.php';
     require_once 'topbar.php';
?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="logo">
                                <img src="img/bisu.png" width="200px" height="200px" alt="" style="float: left; margin-left: 100px; margin-top:30px" >
                                </div>
                            <div class="col-lg-6">
                                <div class="p-8">
                                    <div class="text-center">
                                        <h1 class="h4 text-warning -900 mb-4 mt-3">Announcement!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                        <div class="form-outline">
                                                <textarea class="form-control" id="textAreaExample1" rows="4" placeholder="Write Announcement.."></textarea>
                                                </div>
                                        </div>
                                        
                                        <a href="index.html" class="btn btn-primary btn-user btn-block mb-3 btn-warning">
                                            Post
                                        </a>
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

                                
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fa fa-bullhorn text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500 mb-3">LIST OF ANNOUNCEMENT</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                         Please update your profile.
                                        <div class="small text-gray-500">December 9, 2019</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        To all batch 2019, please update your profile.
                                        <div class="small text-gray-500">December 2, 2019</div>
                                    </div>
                                </a>
                                

    </div>

 
</body>

</html>

<?php
    require_once 'footer.php';

?>
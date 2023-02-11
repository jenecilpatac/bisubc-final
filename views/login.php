<?php

    session_start();
    require_once 'header.php';
?>
    
    <!-- Profile Start -->
    <div class="container-xxl px-0 py-5">
        
        <div class="container-fluid h-custom">

        <?php require_once 'ui_alert.php' ?>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="img/logo.jpg"
                    class="img-fluid" alt="BISU Logo">
                </div>
               
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="ui_home.php" method="POST">
                        <h5 class="text-warning mb-5"><strong>Alumni Information System of BISU Balilihan</strong></h5>
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="input" id="username" name="username" class="form-control form-control-lg"
                            placeholder="Enter email" />
                            <label class="form-label" for="email">Email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="hidden" name="login" value="submit" />
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                            placeholder="Enter password" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button class="btn btn-warning py-3 px-5" type="submit" value="view">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                                <a href="ui_register.php"class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

<?php
    require_once 'footer.php';
?>
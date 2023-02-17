<?php
    require_once 'views/header.php';
?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        <?php if (isset($_GET['type']) && $_GET['type'] == 'admin'): ?>
                                            Welcome Admin!
                                        <?php else: ?>
                                            Welcome Alumnus/Alumna!
                                        <?php endif; ?>
                                    </h1>
                                    <?php require_once 'views/tpl_alert_msg.php'; ?>              
                                </div>
                                <form class="user" action="index.php?m=login" method="POST">
                                    <div class="form-group">
                                        <?php if (isset($_GET['type']) && $_GET['type'] == 'admin'): ?>
                                            <input type="text" class="form-control form-control-user" id="email"
                                            <?php if (isset($_POST['email'])): ?>
                                                value="<?php echo $_POST['email'] ?>"
                                            <?php endif; ?>
                                            name="email" placeholder="Enter Admin Username">
                                        <?php else: ?>
                                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp"
                                            <?php if (isset($_POST['email'])): ?>
                                                value="<?php echo $_POST['email'] ?>"
                                            <?php endif; ?>
                                            name="email" placeholder="Enter Email Address">
                                        <?php endif; ?>                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"    
                                        name="password" placeholder="Enter Password">
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    -->
                                    
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning py-3 px-2" type="submit" name="login" value="submit">
                                        Login
                                    </button>
                                    <hr>
                                </form>
                                <hr>
                                <!--<div class="text-center">
                                    <a class="small" href="index.php?m=reset_password">Forgot Password?</a>
                                </div>-->
                                <div class="text-center">
                                    <a class="small" href="index.php?m=register">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <?php if (isset($_GET['type']) && $_GET['type'] == 'admin'): ?>
                                        <a class="small" href="index.php?m=login">Login as Alumnus/Alumna!</a>
                                    <?php else: ?>
                                        <a class="small" href="index.php?m=login&type=admin">Login as Admin!</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


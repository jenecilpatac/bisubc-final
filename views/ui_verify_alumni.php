<?php
    require_once 'views/header.php';
?>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            <?php require_once 'views/tpl_alert_msg.php'; ?>                    
                        </div>
                        <form class="user" action="index.php?m=verify" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        <?php if (isset($_POST['firstname'])): ?>
                                            value="<?php echo $_POST['firstname'] ?>"
                                        <?php endif; ?>
                                        name="firstname" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        <?php if (isset($_POST['lastname'])): ?>
                                            value="<?php echo $_POST['lastname'] ?>"
                                        <?php endif; ?>
                                        name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        <?php if (isset($_POST['email'])): ?>
                                            value="<?php echo $_POST['email'] ?>"
                                        <?php endif; ?>
                                    name= "email" placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        name="password_repeat" id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                                    
                            <button class="btn btn-primary btn-user btn-block mb-3 btn-warning py-3 px-2" type="submit" name="verify" value="alumni">
                                Create Account
                            </button>
                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="index.php?m=reset_password">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="index.php?m=login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once 'views/footer.php'; ?>

    <div class="main-body">
        <form action="index.php?m=tracer&profile=2&alumni_key=<?php echo $_GET['alumni_key'] ?>" method="POST" enctype="multipart/form-data">  
            <?php require 'views/tpl_print_profile2.php' ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mt-3 col-sm-0 text-secondary d-flex justify-content-center">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item m-1">
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="1">
                                        << Previous 
                                    </button>
                                </li>
                               <!-- <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="1">
                                        Profile 1
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="2" disabled>
                                        Profile 2 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="3">
                                        Profile 3 
                                    </button>
                                </li>-->
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="3">
                                        Next >> 
                                    </button>
                                </li>
                                <li class="page-item m-1 pl-3">                                               
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save_profile"                                     
                                        <?php if (isset($_POST['disable_all'])): ?>
                                            disabled
                                        <?php endif; ?>
                                        value="2" >
                                        Save Changes
                                    </button>
                                </li>
                            </ul>
                            <input type="hidden" name="from_profile" value="profile2" />
                            <input type="hidden" name="alumni_key" value="<?php echo $_SESSION['ais']['logged']['Alumni_Key'] ?>" />
                        </nav>
                    </div>                        
                </div>
            </div>

        </form>
    </div>

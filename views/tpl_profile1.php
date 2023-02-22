   
    <!-- Begin Page Content -->
    <div class="container-fluid" width="100%">
        <form action="index.php?m=tracer&profile=1&alumni_key=<?php echo $_GET['alumni_key'] ?>" method="POST" enctype="multipart/form-data">
            <div class="row mt-4">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">                                
                                <div class="row">
                                    <div class="col-12">
                                        <img class="rounded-circle p-1 bg-primary"
                                            <?php if (isset($_SESSION['ais']['profile']['PROFILE_PIC']) && is_file($_SESSION['ais']['profile']['PROFILE_PIC'])): ?>
                                                src="<?php echo $_SESSION['ais']['profile']['PROFILE_PIC'] ?>"  
                                            <?php else: ?>
                                                src="img/blank-profile-picture.png" 
                                            <?php endif; ?>
                                            width="150px">
                                    </div>                       
                                </div>                              
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12 mt-4">
                                        <p class="h4 strong text-primary"><?php echo ucwords(strtolower($_SESSION['ais']['profile']['FIRST_NAME'].' '. $_SESSION['ais']['profile']['LAST_NAME'])) ?></p>
                                        <p class="strong text-secondary mb-1"><?php echo $_SESSION['ais']['profile']['COURSE_NAME']?></p>
                                        <p class="text-muted font-size-sm">Batch <?php echo $_SESSION['ais']['profile']['BATCH']?></p>   
                                    </div>                                                       
                                </div>   
                                <?php if ($_SESSION['ais']['logged'] != 'admin'): ?>             
                                    <div class="row text-left mt-3">
                                        <div class="col">
                                            <label for="profile_picture">Upload Picture:</label>
                                            <input type="file" class="form-control" id="profile_picture" name="profile_picture" />
                                        </div>                              
                                    </div>                              
                                    <div class="row text-left mt-3">
                                        <div class="col">
                                            <label for="password">Current Password:</label>
                                            <input type="password" class="form-control" id="password" name="password" >
                                        </div>
                                    </div>                     
                                    <div class="row text-left mt-1">
                                        <div class="col">
                                            <label for="new_password">New Password:</label>
                                            <input type="password" class="form-control" id="new_password" name="new_password" >
                                        </div>
                                    </div>                   
                                    <div class="row text-left mt-1">
                                        <div class="col">
                                            <label for="verify_password">Verify New Password:</label>
                                            <input type="password" class="form-control" id="verify_password" name="verify_password" >
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>       
                        </div>
                    </div>
                </div> 
                <?php require 'views/tpl_print_profile1.php' ?> 
            </div>
            <div class="row">
                <div class="col-sm-12">                            
                    <div class="mt-2 col-sm-0 text-secondary d-flex justify-content-center">  
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item m-1">
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="1" disabled>
                                        << Previous 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="1" disabled>
                                        Profile 1
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="2">
                                        Profile 2 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="3">
                                        Profile 3 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="2">
                                        Next >> 
                                    </button>
                                </li>
                                <li class="page-item m-1 pl-3">                                               
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save_profile"                                     
                                        <?php if (isset($_POST['disable_all'])): ?>
                                            disabled
                                        <?php endif; ?>
                                        value="1" >
                                        Save Changes
                                    </button>
                                </li>
                            </ul>
                            <input type="hidden" name="from_profile" value="profile1" />
                            <input type="hidden" name="alumni_key" value="<?php echo $_SESSION['ais']['logged']['Alumni_Key'] ?>" />
                        </nav>
                    </div>
                </div>
            </div>  
        </form>
    </div>

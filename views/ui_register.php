<?php
     session_start();
     require_once 'header.php';
     
?>
<section class=" h-100 bg-dark bg-image" style="background-image: url('img/register.png'); height:100vh; 
  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover;">
<div class="container">
    <div class="main-body ">
        <div class="row ">
            <div class="col-lg-4 mt-5">
                <div class="card ">
                   
                    <div class="card-body">
                        
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                            
                            <div class="d-flex justify-content-center mt-2">
                                <div class="btn btn-primary btn-rounded btn-warning">
                                    <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                                    <input type="file" class="form-control d-none" id="customFile2" />
                                </div>
                            </div>
                            <div class="mt-3">
                                <h4>John Doe</h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                
                            </div>
                        </div>
                        <hr class="my-4">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mb-5">
                <div class="card">
                       
                    <div class="card-body">
                    <h1 class="h4 text-warning text-center"><strong>Create an Account!</strong></h1>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0 mt-3">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary mt-3">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Alumni Id</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Permanent Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nationality</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Birthplace</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="email" class="form-control" value="">
                            </div>        
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control form-control-user"
                                            id="InputPassword">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Confirm Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control form-control-user"
                                id="RepeatPassword"> 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Civil Status</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="civil status" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Single Parent</option>
                                    <option>Separated</option>
                                    <option>Widow or Widower</option>
                                </select> 
                            </div>
                            </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Sex</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="Sex" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>Female</option>
                                    <option>Male</option>
                                </select>       
                            </div>
                            </div>    
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Birthday</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="date" id="birthday" class="form-control" name="birthday">
                                
                            </div>
                        </div>
                        <strong>Educational Background</strong>
                        <div class="row mb-3">
                            <div class="col-sm-3 mt-3">
                                <h6 class="mb-0">Program (Course) Graduated</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="educational attainment" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>Bachelor of Science in Information Technology</option>
                                    <option>Bachelor of Science in Computer Science</option>
                                    <option>Bachelor of Science in Electrical Technology</option>
                                    <option>Bachelor of Science in Electronics Technology</option>
                                    <option>Bachelor of Science in Industrial Technology Major in Food Technology</option>
                                    <option>Bachelor of Science in Industrial Technology major in Garments Technology</option>
                                    <option>Bachelor of Science in Criminology</option>
                                </select> 
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-3 mt-3">
                                <h6 class="mb-0">Year Graduated</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="year_graduated" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                </select> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary mt-3">
                                <a href="login.php" class="btn btn-primary btn-user btn-block btn-warning">
                                    Register Account
                                </a>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
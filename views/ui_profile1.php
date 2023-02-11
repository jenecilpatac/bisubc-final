
<?php

session_start();
require_once 'header.php';
require_once 'sidebar.php';
require_once 'topbar.php';

?>
<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!--Image-->

                        <!--Avatar-->
                        <div>
                            <div class="d-flex justify-content-center mb-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-primary btn-rounded btn-warning">
                                    <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                                    <input type="file" class="form-control d-none" id="customFile2" />
                                </div>
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
            <div class="col-lg-8 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
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
                        
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Annual Income of the Family</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>

                       
                    </div>
                        
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="mt-5 col-sm-0 text-secondary d-flex justify-content-center">
                                <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="ui_profile1.php">1</a></li>

                                            <li class="page-item"><a class="page-link" href="ui_profile2.php">2</a></li>
                                            <li class="page-item">

                                            <li class="page-item"><a class="page-link" href="ui_profile3.php">3</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="ui_profile2.php">Next</a>
                                            </li>
                                        </ul>
                                </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php';
?>
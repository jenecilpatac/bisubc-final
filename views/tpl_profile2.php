
<div class="container">
    <div class="main-body">
        <form action="index.php?m=tracer&profile=2" method="POST" enctype="multipart/form-data">        
            
            <h6 class="ml-4 text-warning mt-3"><strong>B. EDUCATIONAL BACKGROUND</strong></h6>
            <div class="card">
                <div class="card-body">
                    
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Educational Attainment (Baccalaurete Degree Only)</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <select class="form-control selectpicker"  id="course" name="course">
                            <?php foreach ($_POST['courses'] as $course) : ?>
                                <option value="<?php echo $course['Course_Code'] ?>"
                                    <?php if (isset($_POST['course_sel']) && $course['Course_Code'] == $_POST['course_sel']): ?>
                                        selected
                                    <?php endif; ?>
                                >
                                    <?php echo $course['Course_Name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                        </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Year Graduated</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <select class="form-control selectpicker"  id="batch" name="batch">
                            <?php foreach ($_POST['batches'] as $batch => $values) : ?>
                                <option value="<?php echo $batch ?>"
                                    <?php if (isset($_POST['batch_sel']) && $batch == $_POST['batch_sel']): ?>
                                        selected
                                    <?php endif; ?>
                                >
                                    <?php echo $batch ?>
                                </option>
                            <?php endforeach; ?>
                        </select>     
                        </div>
                        </div>    
                    
                        <div class="container">
                            
                            <p>Professional Examination(s) Passed/TESDA Assessments Passed</p>            
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name of Examination</th>
                                    <th>Date taken</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                    </div>
                    <h6 class="ml-4 text-warning"><strong>C. TRAINING(S)/ADVANCE STUDIES ATTENDED AFTER COLLEGE</strong></h6>
                    <div class="container">
                        
                        <p>1. Please list down all professional or work-related training program(s) including advance studies you have attended after college.</p>            
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title of Training or Advance Study(Masteral)</th>
                                <th>Duration or Date</th>
                                <th>Place of Training or Institution/College/University</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        
                        <p >2. What made you pursue advance studies?</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="PURSUE_ADVANCE_STUDIES" id="inlineRadio1" value="promotion">
                            <label class="form-check-label" for="inlineRadio1">
                                For Promotion
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="PURSUE_ADVANCE_STUDIES" id="inlineRadio2" value="professional_development">
                            <label class="form-check-label" for="inlineRadio2">
                                For Professional Development
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="PURSUE_ADVANCE_STUDIES" id="inlineRadio3" value="others">
                            <label class="form-check-label" for="inlineRadio3">
                                Others, Please Specify
                            </label> 
                            <input type="text" name="2.1_OTHERS" style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style:groove ;"id="usr">
                        </div>
                    
                    
                </div>
                        
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mt-5 col-sm-0 text-secondary d-flex justify-content-center">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item m-1">
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile1">
                                        << Previous 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile1">
                                        Profile 1
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile2" disabled>
                                        Profile 2 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile3">
                                        Profile 3 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile3">
                                        Next >> 
                                    </button>
                                </li>
                                <li class="page-item m-1 pl-3">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile2">
                                        Save Changes
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>                        
                </div>
            </div>

        </form>
    </div>
</div>
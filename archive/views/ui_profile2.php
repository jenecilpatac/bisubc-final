<?php
     session_start();
     require_once 'header.php';
     require_once 'sidebar.php';
     require_once 'topbar.php';
?>

<div class="container">
    <div class="main-body">
        
            
          <h6 class="ml-4 text-warning mt-3"><strong>B. EDUCATIONAL BACKGROUND</strong></h6>
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Educational Attainment (Baccalaurete Degree Only)</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="educational attainment" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>Bachelor of Science in Information Technology</option>
                                    <option>Bachelor of Science in Computer Science</option>
                                    <option>Bachelor of Science in Electrical Technology</option>
                                    <option>Bachelor of Science in Electronics Technology</option>
                                    <option>Bachelor of Science in Industrial Technology Major in Food Technology</option>
                                </select> 
                            </div>
                            </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
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
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
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
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">
                                  For Promotion
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">
                                  For Professional Development
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">
                                  Others, Please Specify
                                </label> 
                                <input type="text" style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style:groove ;"id="usr">
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
</div>

<?php
    require_once 'footer.php';
?>
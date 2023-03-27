<h6 class="mb-0"><i>(Please <strong>save changes</strong> before you <strong>proceed</strong>)</i></h6>
<div class="card">

    <div class="card-body">                  
        <h6 class="text-warning mt-3"><strong>B. EDUCATIONAL BACKGROUND</strong></h6>
        
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Educational Attainment (Baccalaurete Degree Only)</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <select class="form-control selectpicker"  id="course"                         
                    <?php if (isset($_POST['disabled']['COURSE_NAME'])): ?>
                        disabled
                    <?php endif; ?>
                    name="COURSE_NAME">
                    <?php foreach ($_POST['courses'] as $course) : ?>
                        <option value="<?php echo $course['Course_Code'] ?>"
                            <?php if (isset($_SESSION['ais']['profile']['COURSE_CODE']) && $course['Course_Code'] == $_SESSION['ais']['profile']['COURSE_CODE']): ?>
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
                <select class="form-control selectpicker"  id="batch"                                             
                    <?php if (isset($_POST['disabled']['BATCH']) || isset($_POST['disable_all'])): ?>
                        disabled
                    <?php endif; ?>
                    name="BATCH">
                    <?php foreach ($_POST['batches'] as $batch => $values) : ?>
                        <option value="<?php echo $batch ?>"
                            <?php if (isset($_SESSION['ais']['profile']['BATCH']) && $batch == $_SESSION['ais']['profile']['BATCH']): ?>
                                selected
                            <?php endif; ?>
                        >
                            <?php echo $batch ?>
                        </option>
                    <?php endforeach; ?>
                </select>     
            </div>
        </div>   
        <div class="row mb-3 pl-2">                   
            <p>Professional Examination(s) Passed/TESDA Assessments Passed</p>            
            <table class="table m-0 p-0 disabled">
                <thead>
                <tr>
                    <th>Name of Examination</th>
                    <th>Date taken</th>
                    <th>Rating</th>
                </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<4; $i++): ?>
                        <tr class="m-1 p-0">
                            <td class="m-1 p-1">
                                <input class="form-control"  type="text" name="EXAM_PASSED[]"                                             
                                    <?php if (isset($_SESSION['ais']['profile']['EXAM_PASSED'][$i])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['EXAM_PASSED'][$i] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>                                          
                                    <?php if (isset($_POST['disable_all'])): ?>
                                        disabled
                                    <?php endif; ?>
                                />
                            </td>
                            <td class="m-1 p-1">
                                <input class="form-control"  type="text" name="EXAM_DATE_TAKEN[]"                                             
                                    <?php if (isset($_SESSION['ais']['profile']['EXAM_DATE_TAKEN'][$i])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['EXAM_DATE_TAKEN'][$i] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>                                      
                                    <?php if (isset($_POST['disable_all'])): ?>
                                        disabled
                                    <?php endif; ?>
                                />
                            </td>
                            <td class="m-1 p-1">
                                <input class="form-control"  type="text" name="EXAM_RATING[]"                                             
                                    <?php if (isset($_SESSION['ais']['profile']['EXAM_RATING'][$i])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['EXAM_RATING'][$i] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>                                      
                                    <?php if (isset($_POST['disable_all'])): ?>
                                        disabled
                                    <?php endif; ?>
                                />
                            </td>
                        </tr>
                    <?php endfor; ?>
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
                    <?php for($i=0; $i<4; $i++): ?>
                        <tr>
                            <td class="m-1 p-1">
                                <input class="form-control"  type="text" name="ADVANCE_STUDY_PASSED[]"                                             
                                    <?php if (isset($_SESSION['ais']['profile']['ADVANCE_STUDY_PASSED'][$i])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['ADVANCE_STUDY_PASSED'][$i] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>                                      
                                    <?php if (isset($_POST['disable_all'])): ?>
                                        disabled
                                    <?php endif; ?>
                                />
                            </td>
                            <td class="m-1 p-1">
                                <input class="form-control"  type="text" name="ADVANCE_STUDY_DURATION[]"                                             
                                    <?php if (isset($_SESSION['ais']['profile']['ADVANCE_STUDY_DURATION'][$i])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['ADVANCE_STUDY_DURATION'][$i] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>                                      
                                    <?php if (isset($_POST['disable_all'])): ?>
                                        disabled
                                    <?php endif; ?>
                                />
                            </td>
                            <td class="m-1 p-1">
                                <input class="form-control"  type="text" name="ADVANCE_STUDY_PLACE[]"                                              
                                    <?php if (isset($_SESSION['ais']['profile']['ADVANCE_STUDY_PLACE'][$i])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['ADVANCE_STUDY_PLACE'][$i] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>                                      
                                    <?php if (isset($_POST['disable_all'])): ?>
                                        disabled
                                    <?php endif; ?>
                                />
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            
            <!--<p>2. What made you pursue advance studies?</p>
            <div class="ml-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="PURSUE_ADVANCE_STUDIES" id="inlineRadio1"                                           
                        <?php if (isset($_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES']) && $_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES'] == 'promotion'): ?>
                            selected
                        <?php endif; ?>                                      
                        <?php if (isset($_POST['disable_all'])): ?>
                            disabled
                        <?php endif; ?>
                        value="promotion">
                    <label class="form-check-label" for="inlineRadio1">
                        For Promotion
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="PURSUE_ADVANCE_STUDIES" id="inlineRadio2"                                           
                        <?php if (isset($_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES']) && $_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES'] == 'professional_development'): ?>
                            selected
                        <?php endif; ?>                                   
                        <?php if (isset($_POST['disable_all'])): ?>
                            disabled
                        <?php endif; ?>
                        value="professional_development">
                    <label class="form-check-label" for="inlineRadio2">
                        For Professional Development
                    </label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input class="form-check-input mr-4" type="radio" name="PURSUE_ADVANCE_STUDIES" id="inlineRadio3"
                        <?php if (isset($_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES']) && $_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES'] == 'others'): ?>
                            checked
                        <?php endif; ?>                                   
                        <?php if (isset($_POST['disable_all'])): ?>
                            disabled
                        <?php endif; ?>
                        value="others">
                    <label class="form-check-label" for="inlineRadio3">
                        Others, Please Specify
                    </label> 
                    <input type="text" style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style:groove;" id="usr"
                        <?php if (isset($_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES_OTHERS'])): ?>
                            value="<?php echo $_SESSION['ais']['profile']['PURSUE_ADVANCE_STUDIES_OTHERS'] ?>"
                        <?php else: ?>
                            value=""
                        <?php endif; ?>                                   
                        <?php if (isset($_POST['disable_all'])): ?>
                            disabled
                        <?php endif; ?>
                        name="PURSUE_ADVANCE_STUDIES_OTHERS" />
                </div>
            </div> -->                   
        
    </div>
            
</div>
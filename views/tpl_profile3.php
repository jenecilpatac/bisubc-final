
    <div class="main-body">
        <form action="index.php?m=tracer&profile=3" method="POST" enctype="multipart/form-data">   

            <h6 class="mt-3 text-warning"><strong>D. JOB PLACEMENT PROFILE</strong></h6>
            <div class="card">
                <div class="card-body">                    
                    <div class="container">                                                        
                        <p>1. Current Employment Status</p>
                        <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="EMPLOYMENT_STATUS" id="employed" 
                                <?php if (isset($_SESSION['ais']['profile']['EMPLOYMENT_STATUS']) && $_SESSION['ais']['profile']['EMPLOYMENT_STATUS'] == 'employed'): ?>
                                    checked
                                <?php endif; ?>
                                value="employed">
                            <label class="form-check-label" for="employed"> Gainfully Employed </label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="EMPLOYMENT_STATUS" id="not_employed" 
                                <?php if (isset($_SESSION['ais']['profile']['EMPLOYMENT_STATUS']) && $_SESSION['ais']['profile']['EMPLOYMENT_STATUS'] == 'not_employed'): ?>
                                    checked
                                <?php endif; ?>
                                value="not_employed">
                            <label class="form-check-label" for="not_employed"> Not Employed </label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="EMPLOYMENT_STATUS" id="self_employed" 
                                <?php if (isset($_SESSION['ais']['profile']['EMPLOYMENT_STATUS']) && $_SESSION['ais']['profile']['EMPLOYMENT_STATUS'] == 'self_employed'): ?>
                                    checked
                                <?php endif; ?>
                                value="self_employed">
                            <label class="form-check-label" for="self_employed"> Self-Employed </label> 
                            </div>

                            <p class="mt-2">2. Number of Job Experiences</p>
                            <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="JOB_EXPERIENCES" id="never_employed" 
                                <?php if (isset($_SESSION['ais']['profile']['JOB_EXPERIENCES']) && $_SESSION['ais']['profile']['JOB_EXPERIENCES'] == 'never_employed'): ?>
                                    checked
                                <?php endif; ?>
                                value="never_employed" >
                            <label class="form-check-label" for="never_employed">Never been employed (No job Experience except OJT) </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="JOB_EXPERIENCES" id="single_multiple" 
                                <?php if (isset($_SESSION['ais']['profile']['JOB_EXPERIENCES']) && $_SESSION['ais']['profile']['JOB_EXPERIENCES'] == 'single_multiple'): ?>
                                    checked
                                <?php endif; ?>
                                value="single_multiple">
                            <label class="form-check-label" for="single_multiple"> Single or Multiple Employment (1 or more job experience) </label>
                            </div>  
                                <p class="mt-3">
                                <strong>Note: For never been employed answer only 1; and for single or multiple employment -2</strong>
                                </p>  
                                <p class="mt-3">
                                <strong>1. For Never been employed:</strong></br>
                                </p>  
                                <p class="mt-3 ml-3">Reasons for Never Been Employed/Unemployment</p>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="advance_study" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'advance_study'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="advance_study">
                                <label class="form-check-label" for="advance_study"> Advance or further study </label>
                                </div> 

                                <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED"  id="not_look" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'not_look'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="not_look">
                                <label class="form-check-label" for="not_look"> Did not look for a job </label>
                                </div>

                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED"  id="family_concern"
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'family_concern'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="family_concern">
                                <label class="form-check-label" for="family_concern"> Family concern and decided not to find job </label>
                                </div>  

                                <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="lack_professional" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'lack_professional'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="lack_professional">
                                <label class="form-check-label" for="lack_professional"> Lack of professional eligibility requirements </label>
                                </div>

                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="health_related" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'health_related'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="health_related">
                                <label class="form-check-label" for="health_related"> Health-related reason(s)
                                </label>
                                </div>  
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="fear_inadequacy" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'fear_inadequacy'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="fear_inadequacy">
                                <label class="form-check-label" for="fear_inadequacy"> Fear of inadequacy of skills </label>
                                </div>  
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="no_opportunity" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'no_opportunity'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="no_opportunity">
                                <label class="form-check-label" for="no_opportunity"> No job opportunity </label>
                                </div>  
                                <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="others" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED']) && $_SESSION['ais']['profile']['NEVER_EMPLOYED'] == 'others'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="others">
                                <label class="form-check-label" for="others"> Others, Please Specify </label> 
                                <input type="text" class="border border-warning border-top-0 border-right-0 border-left-0" 
                                    <?php if (isset($_SESSION['ais']['profile']['NEVER_EMPLOYED_OTHERS'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['NEVER_EMPLOYED_OTHERS'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                    name="NEVER_EMPLOYED_OTHERS">
                            </div>
                            <p class="mt-3">
                                <strong>2. For Single or Multiple Employment</strong></br>
                            </p> 
                            <div class="form-check form-check-inline ml-3">
                                <p class="mt-3 mr-5">1. Place of work of the current job</p>
                                <input class="form-check-input" type="radio" name="LOCAL_ABROAD" id="local" 
                                    <?php if (isset($_SESSION['ais']['profile']['LOCAL_ABROAD']) && $_SESSION['ais']['profile']['LOCAL_ABROAD'] == 'local'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="local">
                                <label class="form-check-label" for="local" > Local </label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="LOCAL_ABROAD" id="abroad" 
                                    <?php if (isset($_SESSION['ais']['profile']['LOCAL_ABROAD']) && $_SESSION['ais']['profile']['LOCAL_ABROAD'] == 'abroad'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="abroad">
                                <label class="form-check-label" for="abroad" >Abroad </label>
                            </div>

                            <div class="company ml-3">
                                <label class="name ml-3">Name of Company/Institution of your current job:
                                <input  type="text"class="border border-warning border-top-0 border-right-0 border-left-0" 
                                    <?php if (isset($_SESSION['ais']['profile']['NAME_COMPANY'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['NAME_COMPANY'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                    name="NAME_COMPANY">
                                </label><br>
                                <label class="name ml-3">Address of the Company:
                                <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" 
                                    <?php if (isset($_SESSION['ais']['profile']['ADDRESS_COMPANY'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['ADDRESS_COMPANY'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                    name="ADDRESS_COMPANY">
                                </label><br>
                                <label class="name ml-3">Contact number of the Company:
                                <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" 
                                    <?php if (isset($_SESSION['ais']['profile']['CONTACT_COMPANY'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['CONTACT_COMPANY'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                    name="CONTACT_COMPANY">
                                </label><br>
                                <label class="name ml-3" for="supporting_doc">Supporting Document:
                                <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" 
                                    <?php if (isset($_SESSION['ais']['profile']['SUPPORTING_DOCUMENT'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['SUPPORTING_DOCUMENT'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                    name="SUPPORTING_DOCUMENT">
                                </label><br>
                                <input type="file" class="form-control " name="SUPPORTING_DOC_FILE" id="supporting_doc"                                 
                                    value="supporting_doc" />
                                </label>                           
                            </div>
                            
                            <p class="mt-1 ml-3">2. Major line of business of the company you are presently employed in.</p>
                            <label class="mt-0 ml-4">(Ex. Construction, Bank, Call Center, Wholesale/ Retail Trade,..)
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" 
                                <?php if (isset($_SESSION['ais']['profile']['LINE_BUSINESS'])): ?>
                                    value="<?php echo $_SESSION['ais']['profile']['LINE_BUSINESS'] ?>"
                                <?php else: ?>
                                    value=""
                                <?php endif; ?>
                                name="LINE_BUSINESS">
                            </label>

                            <div class="work_position mt-1">
                            <label class="name ml-3 mt-2">3. What is your position/work in the company?
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" 
                                <?php if (isset($_SESSION['ais']['profile']['POSITION'])): ?>
                                    value="<?php echo $_SESSION['ais']['profile']['POSITION'] ?>"
                                <?php else: ?>
                                    value=""
                                <?php endif; ?>
                                name="POSITION">
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <p class="mt-3 ml-3">4. Is your work aligned/related to your field of specialization?</p>  
                                <input class="form-check-input ml-3" type="radio" name="WORK_ALIGNED" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['WORK_ALIGNED']) && $_SESSION['ais']['profile']['WORK_ALIGNED'] == 'yes'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="yes">
                                <label class="form-check-label" for="inlineRadio3" >Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="WORK_ALIGNED" id="inlineRadio4"
                                    <?php if (isset($_SESSION['ais']['profile']['WORK_ALIGNED']) && $_SESSION['ais']['profile']['WORK_ALIGNED'] == 'no'): ?>
                                        checked
                                    <?php endif; ?>
                                 value="no">
                                <label class="form-check-label" for="inlineRadio4" >No</label>
                            </div>

                            <div class="row ml-1 mt-3">
                              <div class="col-4 mb-3">5. <b>Employment Status</b></div>
                              <div class="col-4"><b>First Job</b></div>
                              <div class="col-4"><b>Current or Present Job</b></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Regular or Permanent</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="STATUS_FIRST_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_FIRST_JOB']) && $_SESSION['ais']['profile']['STATUS_FIRST_JOB'] == 'regular_permanent'): ?>
                                        checked
                                    <?php endif; ?>
                                value="regular_permanent"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="STATUS_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_CURRENT_JOB']) && $_SESSION['ais']['profile']['STATUS_CURRENT_JOB'] == 'regular_permanent'): ?>
                                        checked
                                    <?php endif; ?>
                                value="regular_permanent"></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Contractual</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="STATUS_FIRST_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_FIRST_JOB']) && $_SESSION['ais']['profile']['STATUS_FIRST_JOB'] == 'contractual'): ?>
                                        checked
                                    <?php endif; ?>
                                value="contractual"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="STATUS_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_CURRENT_JOB']) && $_SESSION['ais']['profile']['STATUS_CURRENT_JOB'] == 'contractual'): ?>
                                        checked
                                    <?php endif; ?>
                                value="contractual"></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Temporary</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="STATUS_FIRST_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_FIRST_JOB']) && $_SESSION['ais']['profile']['STATUS_FIRST_JOB'] == 'temporary'): ?>
                                        checked
                                    <?php endif; ?>
                                value="temporary"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="STATUS_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_CURRENT_JOB']) && $_SESSION['ais']['profile']['STATUS_CURRENT_JOB'] == 'temporary'): ?>
                                        checked
                                    <?php endif; ?>
                                value="temporary"></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Casual</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="STATUS_FIRST_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_FIRST_JOB']) && $_SESSION['ais']['profile']['STATUS_FIRST_JOB'] == 'casual'): ?>
                                        checked
                                    <?php endif; ?>
                                value="casual"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="STATUS_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['STATUS_CURRENT_JOB']) && $_SESSION['ais']['profile']['STATUS_CURRENT_JOB'] == 'casual'): ?>
                                        checked
                                    <?php endif; ?>
                                value="casual"></div>
                            </div>
                            

                              <div class="row ml-1">
                                <div class="col-4 mb-3">6. <b>Job Level</b></div>
                                <div class="col-4"><b>First Job</b></div>
                                <div class="col-4"><b>Current or Present Job</b></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Rank or Clerical</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="LEVEL_FIRST_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_FIRST_JOB']) && $_SESSION['ais']['profile']['LEVEL_FIRST_JOB'] == 'rank_clerical'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="rank_clerical"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="LEVEL_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_CURRENT_JOB']) && $_SESSION['ais']['profile']['LEVEL_CURRENT_JOB'] == 'rank_clerical'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="rank_clerical"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Professional or Supervisory</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="LEVEL_FIRST_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_FIRST_JOB']) && $_SESSION['ais']['profile']['LEVEL_FIRST_JOB'] == 'professional'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="professional"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="LEVEL_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_CURRENT_JOB']) && $_SESSION['ais']['profile']['LEVEL_CURRENT_JOB'] == 'professional'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="professional"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Managerial or Executive</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="LEVEL_FIRST_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_FIRST_JOB']) && $_SESSION['ais']['profile']['LEVEL_FIRST_JOB'] == 'managerial_executive'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="managerial_executive"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="LEVEL_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_CURRENT_JOB']) && $_SESSION['ais']['profile']['LEVEL_CURRENT_JOB'] == 'managerial_executive'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="managerial_executive"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Self-employed</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="LEVEL_FIRST_JOB" id="inlineRadio3"
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_FIRST_JOB']) && $_SESSION['ais']['profile']['LEVEL_FIRST_JOB'] == 'self_employed'): ?>
                                        checked
                                    <?php endif; ?>
                                     value="self_employed"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="LEVEL_CURRENT_JOB" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_CURRENT_JOB']) && $_SESSION['ais']['profile']['LEVEL_CURRENT_JOB'] == 'self_employed'): ?>
                                        checked
                                    <?php endif; ?>
                                    value="self_employed"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">If self-employed, what line of business?</div>
                                <div class="col-4"><input type="text"style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style:groove;" id="usr" 
                                    <?php if (isset($_SESSION['ais']['profile']['SELF_EMPLOYED_LINE'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['SELF_EMPLOYED_LINE'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                    name="SELF_EMPLOYED_LINE" ></div>
                             </div>




                       
                        <p class="mt-3 ml-3">7. How did you find your first job? (Please Choose)</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="flexRadioDefault1" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'advertisement'): ?>
                                        checked
                                    <?php endif; ?>
                                value="advertisement">
                            <label class="form-check-label" for="flexRadioDefault1">Response to an advertisement</label>
                            </div> 

                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio2" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'walk_in'): ?>
                                        checked
                                    <?php endif; ?>
                                value="walk_in">
                            <label class="form-check-label" for="inlineRadio2">As walk-in applicant</label>
                            </div>

                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="flexRadioDefault1" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'recommended'): ?>
                                        checked
                                    <?php endif; ?>
                                value="recommended">
                            <label class="form-check-label" for="flexRadioDefault1">Recommended by someone</label>
                            </div>  

                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'friends'): ?>
                                        checked
                                    <?php endif; ?>
                                value="friends">
                            <label class="form-check-label" for="inlineRadio3">Information from friends</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'arranged'): ?>
                                        checked
                                    <?php endif; ?>
                                value="arranged">
                            <label class="form-check-label" for="inlineRadio3">Arranged by school's job placement officer</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'family_business'): ?>
                                        checked
                                    <?php endif; ?>
                                value="family_business">
                            <label class="form-check-label" for="inlineRadio3">Family business</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'job_fair'): ?>
                                        checked
                                    <?php endif; ?>
                                value="job_fair">
                            <label class="form-check-label" for="inlineRadio3">Job Fair or Public Employment Service Office (PESO)</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST']) && $_SESSION['ais']['profile']['FIND_FIRST'] == 'others'): ?>
                                        checked
                                    <?php endif; ?>
                                value="others">
                            <label class="form-check-label" for="inlineRadio3"> Others, Please Specify</label> 
                            <input type="text" class="border border-warning border-top-0 border-right-0 border-left-0"
                                    <?php if (isset($_SESSION['ais']['profile']['FIND_FIRST_OTHERS'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['FIND_FIRST_OTHERS'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                name="FIND_FIRST_OTHERS" >
                            </div>

                        
                            <p class="mt-3 ml-3">8. How long did you land your first job after graduation? (Please Choose)</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD']) && $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD'] == '0_1month'): ?>
                                        checked
                                    <?php endif; ?>
                                value="0_1month" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Less than a month</label>
                        </div> 

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD']) && $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD'] == '2_3years'): ?>
                                        checked
                                    <?php endif; ?>
                                value="2_3years" id="inlineRadio2">
                            <label class="form-check-label" for="inlineRadio2">2 years to less than 3 years</label>
                        </div>

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD']) && $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD'] == '1_6months'): ?>
                                        checked
                                    <?php endif; ?>
                                value="1_6months" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">1 to 6 months</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD']) && $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD'] == '7months_1year'): ?>
                                        checked
                                    <?php endif; ?>
                                value="7months_1year" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">7 months to 1 year</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD']) && $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD'] == '1_2years'): ?>
                                        checked
                                    <?php endif; ?>
                                value="1_2years" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">1 year to less than 2 years</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD']) && $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD'] == 'others'): ?>
                                        checked
                                    <?php endif; ?>
                                value="others" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3"> Others, Please Specify
                            </label> 
                            <input type="text" name="FIRST_JOB_AFTER_GRAD_OTHERS" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD_OTHERS'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD_OTHERS'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                class="border border-warning border-top-0 border-right-0 border-left-0">
                        </div>
                        
                        <p class="mt-3 ml-3">9. Factors Facilitating Acquisition of First Job</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_FACTORS" id="flexRadioDefault1" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_FACTORS']) && $_SESSION['ais']['profile']['FIRST_JOB_FACTORS'] == 'area_specialization'): ?>
                                        checked
                                    <?php endif; ?>
                                value="area_specialization">
                            <label class="form-check-label" for="flexRadioDefault1">Area of Specialization</label>
                        </div> 

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio"name="FIRST_JOB_FACTORS" id="inlineRadio2" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_FACTORS']) && $_SESSION['ais']['profile']['FIRST_JOB_FACTORS'] == 'reputation'): ?>
                                        checked
                                    <?php endif; ?>
                                value="reputation">
                            <label class="form-check-label" for="inlineRadio2">Reputation of the School or University</label>
                        </div>

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_FACTORS" id="flexRadioDefault1" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_FACTORS']) && $_SESSION['ais']['profile']['FIRST_JOB_FACTORS'] == 'personality_factors'): ?>
                                        checked
                                    <?php endif; ?>
                                value="personality_factors">
                            <label class="form-check-label" for="flexRadioDefault1">Personality Factors</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_FACTORS" id="flexRadioDefault1"  
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_FACTORS']) && $_SESSION['ais']['profile']['FIRST_JOB_FACTORS'] == 'scholastic_standing'): ?>
                                        checked
                                    <?php endif; ?>
                                value="scholastic_standing">
                            <label class="form-check-label" for="flexRadioDefault1">Scholastic Standing</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_FACTORS" id="flexRadioDefault1"  
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_FACTORS']) && $_SESSION['ais']['profile']['FIRST_JOB_FACTORS'] == 'job_placement_service_school'): ?>
                                        checked
                                    <?php endif; ?>
                                value="job_placement_service_school">
                            <label class="form-check-label" for="flexRadioDefault1">Job Placement Service of the School</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_FACTORS" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_FACTORS']) && $_SESSION['ais']['profile']['FIRST_JOB_FACTORS'] == 'others'): ?>
                                        checked
                                    <?php endif; ?>
                                value="others">
                            <label class="form-check-label" for="inlineRadio3">Others, Please Specify
                            </label> 
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD_OTHERS'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD_OTHERS'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                name="FIRST_JOB_FACTORS_OTHERS">
                        </div>

                        <p class="mt-3 ml-3">10. What challenges did you face in finding a job?</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'advance_study'): ?>
                                        checked
                                    <?php endif; ?>
                                value="advance_study">
                            <label class="form-check-label" for="flexRadioDefault1">Enrolled in advance study or graduate school</label>
                        </div> 

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="inlineRadio2"  
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'family_concern'): ?>
                                        checked
                                    <?php endif; ?>
                                value="family_concern">
                            <label class="form-check-label" for="inlineRadio2">Family concern and decided not to find a job</label>
                        </div>

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'health_related'): ?>
                                        checked
                                    <?php endif; ?>
                                value="health_related">
                            <label class="form-check-label" for="flexRadioDefault1">Health-related reason/s</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'cpmpetition'): ?>
                                        checked
                                    <?php endif; ?>
                                value="cpmpetition">
                            <label class="form-check-label" for="flexRadioDefault1">Competition in the job market</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1" 
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'lack_experience'): ?>
                                        checked
                                    <?php endif; ?>
                                 value="lack_experience">
                            <label class="form-check-label" for="flexRadioDefault1">Lack of industry experience</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'no_opportunity'): ?>
                                        checked
                                    <?php endif; ?>
                                value="no_opportunity">
                            <label class="form-check-label" for="flexRadioDefault1">No job opportunity</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"   
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'confidence'): ?>
                                        checked
                                    <?php endif; ?>
                                value="confidence">
                            <label class="form-check-label" for="flexRadioDefault1">Confidence</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['CHALLENGES']) && $_SESSION['ais']['profile']['CHALLENGES'] == 'others'): ?>
                                        checked
                                    <?php endif; ?>
                                value="others">
                            <label class="form-check-label" for="inlineRadio3">
                            Others, Please Specify
                            </label> 
                            <input type="text" name="CHALLENGES_OTHERS" 
                                    <?php if (isset($_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD_OTHERS'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['FIRST_JOB_AFTER_GRAD_OTHERS'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                class="border border-warning border-top-0 border-right-0 border-left-0">
                        </div>

                        <h6 class="mt-3 text-warning"><strong>E. AWARDS and ACHIEVEMENTS</strong></h6>                        
                        <p class="mt-3">1.Have you recieve any awards, promotions or recognitions at your previous or current jobs?</p>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="AWARDS" id="flexRadioDefault1" 
                                    <?php if (isset($_SESSION['ais']['profile']['AWARDS']) && $_SESSION['ais']['profile']['AWARDS'] == 'yes'): ?>
                                        checked
                                    <?php endif; ?>
                                value="yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                            </label>
                        </div> 

                        <div class="form-check ml-3">
                            <input class="form-check-input " type="radio" name="AWARDS" id="inlineRadio2" 
                                    <?php if (isset($_SESSION['ais']['profile']['AWARDS']) && $_SESSION['ais']['profile']['AWARDS'] == 'no'): ?>
                                        checked
                                    <?php endif; ?>
                                value="no">
                            <label class="form-check-label" for="inlineRadio2">
                            No
                            </label>
                        </div>
                        <p class="mt-3">2.If Yes, please indicate the level of award.</p>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="LEVEL_AWARD" id="flexRadioDefault1" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_AWARD']) && $_SESSION['ais']['profile']['LEVEL_AWARD'] == 'local'): ?>
                                        checked
                                    <?php endif; ?>
                                value="local">
                            <label class="form-check-label" for="flexRadioDefault1">Local </label>
                        </div> 

                        <div class="form-check ml-3">
                            <input class="form-check-input " type="radio" name="LEVEL_AWARD" id="inlineRadio2" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_AWARD']) && $_SESSION['ais']['profile']['LEVEL_AWARD'] == 'national'): ?>
                                        checked
                                    <?php endif; ?>
                                value="national">
                            <label class="form-check-label" for="inlineRadio2">National</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input " type="radio" name="LEVEL_AWARD" id="inlineRadio2" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_AWARD']) && $_SESSION['ais']['profile']['LEVEL_AWARD'] == 'international'): ?>
                                        checked
                                    <?php endif; ?>
                                value="international">
                            <label class="form-check-label" for="inlineRadio2">International</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="LEVEL_AWARD" id="inlineRadio3" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_AWARD']) && $_SESSION['ais']['profile']['LEVEL_AWARD'] == 'others'): ?>
                                        checked
                                    <?php endif; ?>
                                value="others">
                            <label class="form-check-label" for="inlineRadio3">
                            Other:
                            </label> 
                            
                            <input type="text" name="LEVEL_AWARD_OTHERS" 
                                    <?php if (isset($_SESSION['ais']['profile']['LEVEL_AWARD_OTHERS'])): ?>
                                        value="<?php echo $_SESSION['ais']['profile']['LEVEL_AWARD_OTHERS'] ?>"
                                    <?php else: ?>
                                        value=""
                                    <?php endif; ?>
                                class="border border-warning border-top-0 border-right-0 border-left-0">
                        </div>
                        <p class="mt-3">3.If you answered Yes, indicate the name and please upload a picture/document of your certificate or plaque of recognition.</p>                            
                        <input type="text" name="AWARD_DOC" 
                                <?php if (isset($_SESSION['ais']['profile']['AWARD_DOC'])): ?>
                                    value="<?php echo $_SESSION['ais']['profile']['AWARD_DOC'] ?>"
                                <?php else: ?>
                                    value=""
                                <?php endif; ?>
                            class="border border-warning border-top-0 border-right-0 border-left-0">
                        <input type="file" class="form-control mt-2" name="AWARD_DOC_FILE" id="customFile2" value="choose_file" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mt-4 col-sm-0 text-secondary d-flex justify-content-center">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item m-1">
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="2">
                                        << Previous 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="1">
                                        Profile 1
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="2">
                                        Profile 2 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="3" disabled>
                                        Profile 3 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="to_profile" value="3" disabled>
                                        Next >> 
                                    </button>
                                </li>
                                <li class="page-item m-1 pl-3">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save_profile" value="3" >
                                        Save Changes
                                    </button>
                                </li>
                            </ul>
                            <input type="hidden" name="from_profile" value="profile3" />
                        </nav>
                    </div>                        
                </div>                            
            </div>           
                
        </form>
    </div>

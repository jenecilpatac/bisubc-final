
    <div class="main-body">
        <form action="index.php?m=tracer&profile=3" method="POST" enctype="multipart/form-data">   

            <h6 class="mt-3 text-warning"><strong>D. JOB PLACEMENT PROFILE</strong></h6>
            <div class="card">
                <div class="card-body">                    
                    <div class="container">                                                        
                        <p>1. Current Employment Status</p>
                        <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="EMPLOYMENT_STATUS" id="inlineRadio2" value="employed">
                            <label class="form-check-label" for="inlineRadio2"> Gainfully Employed </label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="EMPLOYMENT_STATUS" id="inlineRadio1" value="not_employed">
                            <label class="form-check-label" for="inlineRadio1"> Not Employed </label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="EMPLOYMENT_STATUS" id="inlineRadio2" value="self_employed">
                            <label class="form-check-label" for="inlineRadio2"> Self-Employed </label> 
                            </div>

                            <p class="mt-2">2. Number of Job Experiences</p>
                            <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="JOB_EXPERIENCES" id="inlineRadio2" value="never_employed" >
                            <label class="form-check-label" for="inlineRadio2">Never been employed (No job Experience except OJT) </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="JOB_EXPERIENCES" id="flexRadioDefault1" value="single_multiple">
                            <label class="form-check-label" for="flexRadioDefault1"> Single or Multiple Employment (1 or more job experience) </label>
                            </div>  
                                <p class="mt-3">
                                <strong>Note: For never been employed answer only 1; and for single or multiple employment -2</strong>
                                </p>  
                                <p class="mt-3">
                                <strong>1. For Never been employed:</strong></br>
                                </p>  
                                <p class="mt-3 ml-3">Reasons for Never Been Employed/Unemployment</p>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="flexRadioDefault1" value="advance_study">
                                <label class="form-check-label" for="flexRadioDefault1"> Advance or further study </label>
                                </div> 

                                <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED"  id="inlineRadio2" value="not_look">
                                <label class="form-check-label" for="inlineRadio2"> Did not look for a job </label>
                                </div>

                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED"  id="flexRadioDefault1" value="family_concern">
                                <label class="form-check-label" for="flexRadioDefault1"> Family concern and decided not to find job </label>
                                </div>  

                                <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="inlineRadio3" value="lack_professional">
                                <label class="form-check-label" for="inlineRadio3"> Lack of professional eligibility requirements </label>
                                </div>

                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="flexRadioDefault1" value="health_related">
                                <label class="form-check-label" for="flexRadioDefault1"> Health-related reason(s)
                                </label>
                                </div>  
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="flexRadioDefault1" value="fear_inadequacy">
                                <label class="form-check-label" for="flexRadioDefault1"> Fear of inadequacy of skills </label>
                                </div>  
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="flexRadioDefault1" value="no_opportunity">
                                <label class="form-check-label" for="flexRadioDefault1"> No job opportunity </label>
                                </div>  
                                <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="NEVER_EMPLOYED" id="inlineRadio3" value="1_others">
                                <label class="form-check-label" for="inlineRadio3"> Others, Please Specify </label> 
                                <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0">
                            </div>
                            <p class="mt-3">
                                <strong>2. For Single or Multiple Employment</strong></br>
                            </p> 
                            <div class="form-check form-check-inline ml-3">
                                <p class="mt-3 mr-5">1. Place of work of the current job</p>  
                                <input class="form-check-input" type="radio" name="SINGLE_EMPLOYMENT" id="inlineRadio3" value="local">
                                <label class="form-check-label" for="inlineRadio3" > Local </label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="SINGLE_EMPLOYMENT" id="inlineRadio4" value="abroad">
                                <label class="form-check-label" for="inlineRadio4" >Abroad </label>
                            </div>

                            <div class="company ml-3">
                            <label class="name ml-3">Name of Company/Institution of your current job:
                            <input  type="text"class="border border-warning border-top-0 border-right-0 border-left-0" name="NAME_COMPANY">
                            </label><br>
                            <label class="name ml-3">Address of the Company:
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" name="ADDRESS_COMPANY">
                            </label><br>
                            <label class="name ml-3">Contact number of the Company:
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" name="CONTACT_COMPANY">
                            </label><br>
                            <label class="name ml-3">Supporting Document:
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" name="SUPPORTING_DOCUMENT">
                            <div class="btn btn-primary btn-rounded btn-warning">
                                <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                                <input type="file" class="form-control d-none" name="CHOOSE_FILE" id="customFile2" value="choose_file" />
                            </div>
                           </label>
                           
                            </div>
                            
                            <p class="mt-1 ml-3">2. Major line of business of the company you are presently employed in.</p>
                            <label class="mt-0 ml-4">(Ex. Construction, Bank, Call Center, Wholesale/ Retail Trade,..)
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" name="LINE_BUSINESS">
                            </label>

                            <div class="work_position mt-1">
                            <label class="name ml-3 mt-2">3. What is your position/work in the company?
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" name="POSITION">
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <p class="mt-3 ml-3">4. Is your work aligned/related to your field of specialization?</p>  
                                <input class="form-check-input ml-3" type="radio" name="WORK_ALIGNED" id="inlineRadio3" value="yes">
                                <label class="form-check-label" for="inlineRadio3" >Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="WORK_ALIGNED" id="inlineRadio4" value="yes">
                                <label class="form-check-label" for="inlineRadio4" >No</label>
                            </div>

                            <div class="row ml-1 mt-3">
                              <div class="col-4 mb-3">5. <b>Employment Status</b></div>
                              <div class="col-4"><b>First Job</b></div>
                              <div class="col-4"><b>Current or Present Job</b></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Regular or Permanent</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="EMPLOYMENT_STATUS" id="inlineRadio3" value="regular_permanent"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Contractual</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="EMPLOYMENT_STATUS" id="inlineRadio3" value="contractual"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Temporary</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="EMPLOYMENT_STATUS" id="inlineRadio3" value="temporary"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                            </div>
                            <div class="row mb-3 ml-1">
                              <div class="col-4">Casual</div>
                              <div class="col-4"><input class="form-check-input ml-3" type="radio" name="EMPLOYMENT_STATUS" id="inlineRadio3" value="casual"></div>
                              <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                            </div>
                            

                              <div class="row ml-1">
                                <div class="col-4 mb-3">6. <b>Job Level</b></div>
                                <div class="col-4"><b>First Job</b></div>
                                <div class="col-4"><b>Current or Present Job</b></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Rank or Clerical</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="JOB_LEVEL" id="inlineRadio3" value="rank_clerical"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Professional or Supervisory</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="JOB_LEVEL" id="inlineRadio3" value="professional"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Managerial or Executive</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="JOB_LEVEL" id="inlineRadio3" value="managerial_executive"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">Self-employed</div>
                                <div class="col-4"><input class="form-check-input ml-3" type="radio" name="JOB_LEVEL" id="inlineRadio3" value="self_employed"></div>
                                <div class="col-4"><input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio3"></div>
                              </div>
                              <div class="row mb-3 ml-1">
                                <div class="col-4">If self-employed, what line of business?</div>
                                <div class="col-4"><input type="text" name="JOB_LEVEL" style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style:groove ;"id="usr"></div>
                             </div>




                       
                        <p class="mt-3 ml-3">7. How did you find your first job? (Please Choose)</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="flexRadioDefault1" value=" advertisement">
                            <label class="form-check-label" for="flexRadioDefault1">Response to an advertisement</label>
                            </div> 

                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio2" value="walk_in">
                            <label class="form-check-label" for="inlineRadio2">As walk-in applicant</label>
                            </div>

                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="flexRadioDefault1" value="recommended">
                            <label class="form-check-label" for="flexRadioDefault1">Recommended by someone</label>
                            </div>  

                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" value="friends">
                            <label class="form-check-label" for="inlineRadio3">Information from friends</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" value="arranged">
                            <label class="form-check-label" for="inlineRadio3">Arranged by school's job placement officer</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" value="family_business">
                            <label class="form-check-label" for="inlineRadio3">Family business</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" value="job_fair">
                            <label class="form-check-label" for="inlineRadio3">Job Fair or Public Employment Service Office (PESO)</label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIND_FIRST" id="inlineRadio3" value="others_specify">
                            <label class="form-check-label" for="inlineRadio3"> Others, Please Specify</label> 
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0">
                            </div>

                        
                            <p class="mt-3 ml-3">8. How long did you land your first job after graduation? (Please Choose)</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" value="0_1month" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Less than a month</label>
                        </div> 

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" value="2_3years" id="inlineRadio2">
                            <label class="form-check-label" for="inlineRadio2">2 years to less than 3 years</label>
                        </div>

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" value="1_6months" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">1 to 6 months</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" value="7months_1year" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">7 months to 1 year</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" value="1_2years" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">1 year to less than 2 years</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FIRST_JOB_AFTER_GRAD" value="others" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3"> Others, Please Specify
                            </label> 
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0">
                        </div>
                        
                        <p class="mt-3 ml-3">9. Factors Facilitating Acquisition of First Job</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FACTORS_FACILITATING_ACQUISITION" id="flexRadioDefault1" value="area_specialization">
                            <label class="form-check-label" for="flexRadioDefault1">Area of Specialization</label>
                        </div> 

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio"name="FACTORS_FACILITATING_ACQUISITION" id="inlineRadio2" value="reputation">
                            <label class="form-check-label" for="inlineRadio2">Reputation of the School or University</label>
                        </div>

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FACTORS_FACILITATING_ACQUISITION" id="flexRadioDefault1" value="personality_factors">
                            <label class="form-check-label" for="flexRadioDefault1">Personality Factors</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FACTORS_FACILITATING_ACQUISITION" id="flexRadioDefault1"  value="scholastic_standing">
                            <label class="form-check-label" for="flexRadioDefault1">Scholastic Standing</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FACTORS_FACILITATING_ACQUISITION" id="flexRadioDefault1"  value="job_placement_service_school">
                            <label class="form-check-label" for="flexRadioDefault1">Job Placement Service of the School</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="FACTORS_FACILITATING_ACQUISITION" id="inlineRadio3" value="others">
                            <label class="form-check-label" for="inlineRadio3">Others, Please Specify
                            </label> 
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0" name="FACTORS_FACILITATING_ACQUISITION">
                        </div>

                        <p class="mt-3 ml-3">10. What challenges did you face in finding a job?</p>
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  value="advance_study">
                            <label class="form-check-label" for="flexRadioDefault1">Enrolled in advance study or graduate school</label>
                        </div> 

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="inlineRadio2"  value="family_concern">
                            <label class="form-check-label" for="inlineRadio2">Family concern and decided not to find a job</label>
                        </div>

                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  value="health_related">
                            <label class="form-check-label" for="flexRadioDefault1">Health-related reason/s</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  value="cpmpetition">
                            <label class="form-check-label" for="flexRadioDefault1">Competition in the job market</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  value="lack_experience">
                            <label class="form-check-label" for="flexRadioDefault1">Lack of industry experience</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  value="no_opportunity">
                            <label class="form-check-label" for="flexRadioDefault1">No job opportunity</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="flexRadioDefault1"  value="confidence">
                            <label class="form-check-label" for="flexRadioDefault1">Confidence</label>
                        </div>  
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" name="CHALLENGES" id="inlineRadio3" value="others">
                            <label class="form-check-label" for="inlineRadio3">
                            Others, Please Specify
                            </label> 
                            <input type="text" name="CHALLENGES" class="border border-warning border-top-0 border-right-0 border-left-0">
                        </div>
                        <h6 class="mt-3 text-warning"><strong>E. AWARDS and ACHIEVEMENTS</strong></h6>
                        
                        <p class="mt-3">1.Have you recieve any awards, promotions or recognitions at your previous or current jobs?</p>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="AWARDS" id="flexRadioDefault1" value="yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                            </label>
                        </div> 

                        <div class="form-check ml-3">
                            <input class="form-check-input " type="radio" name="AWARDS" id="inlineRadio2" value="no">
                            <label class="form-check-label" for="inlineRadio2">
                            No
                            </label>
                        </div>
                        <p class="mt-3">2.If Yes, please indicate the level of award.</p>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="LEVEL_AWARD" id="flexRadioDefault1" value="local">
                            <label class="form-check-label" for="flexRadioDefault1">Local </label>
                        </div> 

                        <div class="form-check ml-3">
                            <input class="form-check-input " type="radio" name="LEVEL_AWARD" id="inlineRadio2" value="national">
                            <label class="form-check-label" for="inlineRadio2">National</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input " type="radio" name="LEVEL_AWARD" id="inlineRadio2" value="international">
                            <label class="form-check-label" for="inlineRadio2">International</label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="LEVEL_AWARD" id="inlineRadio3" value="others">
                            <label class="form-check-label" for="inlineRadio3">
                            Other:
                            </label> 
                            
                            <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0">
                        </div>
                        <p class="mt-3">3.If you answered Yes, indicate the name and please upload a picture/document of your certificate or plaque of recognition.</p>
                        <input type="text"class="border border-warning border-top-0 border-right-0 border-left-0">
                        <div class="btn btn-primary btn-rounded btn-warning">
                                <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                                <input type="file" class="form-control d-none" name="CHOOSE_FILE" id="customFile2" value="choose_file" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mt-4 col-sm-0 text-secondary d-flex justify-content-center">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item m-1">
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile2">
                                        << Previous 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile1">
                                        Profile 1
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile2">
                                        Profile 2 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile3" disabled>
                                        Profile 3 
                                    </button>
                                </li>
                                <li class="page-item m-1">                                                
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile3" disabled>
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

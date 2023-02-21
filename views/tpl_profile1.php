<?php

$fields = array();
$fields['First_Name'] = array('label' => 'First Name', 'type' => 'text');
$fields['Middle_Name'] = array('label' => 'Middle Name', 'type' => 'text');
$fields['Last_Name'] = array('label' => 'Last Name', 'type' => 'text');
$fields['Permanent_Address'] = array('label' => 'Permanent Address', 'type' => 'text');
$fields['Email'] = array('label' => 'Email Address', 'type' => 'text');
$fields['Phone'] = array('label' => 'Phone', 'type' => 'text');
$fields['Mobile'] = array('label' => 'Mobile', 'type' => 'text');
$fields['Civil_Status'] = array(
    'label' => 'Civil Status', 'type' => 'select',
    'options' => array(
        'Single', 
        'Married', 
        'Single Parent', 
        'Separated', 
        'Widow/Widower',
    )
);
$fields['Sex'] = array(
    'label' => 'Sex', 'type' => 'select',
    'options' => array(
        'Male', 
        'Female', 
    )
);
$fields['Birthday'] = array('label' => 'Birthday', 'type' => 'date');
$fields['Annual_Income'] = array('label' => 'Annual Income of the Family', 'type' => 'text');

?>
    <h5 class="h5 mb-0 text-gray-800"><strong>Alumni Profile</strong>
        <div class="d-sm-flex align-items-center justify-content-between mb-4" style="float:right;">
            <a href="./reports/profile_cv.php"  target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> 
                Download Profile
            </a>
        </div>
    </h5>    
    
    <!-- Begin Page Content -->
    <div class="container-fluid" width="100%">
        <form action="index.php?m=tracer&profile=1" method="POST" enctype="multipart/form-data">
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
                                        <p class="h4 strong text-primary"><?php echo ucwords(strtolower($_SESSION['ais']['logged']['First_Name'].' '. $_SESSION['ais']['logged']['Last_Name'])) ?></p>
                                        <p class="strong text-secondary mb-1"><?php echo $_SESSION['ais']['logged']['Course_Name']?></p>
                                        <p class="text-muted font-size-sm">Batch <?php echo $_SESSION['ais']['logged']['Batch']?></p>   
                                    </div>                                                       
                                </div>                     
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
                            </div>       
                        </div>
                    </div>
                </div> 
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($fields as $field => $data): ?>
                                <?php $field = strtoupper($field) ?>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            <?php echo $data['label'] ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php if (isset($data['type']) && ($data['type'] == "select")): ?>
                                            <select class="form-control "
                                                name="<?php echo strtoupper($field) ?>"
                                                <?php if (isset($_POST['disabled'][$field])): ?>
                                                    disabled
                                                <?php endif; ?>
                                            >
                                                <?php foreach ($data['options'] as $value => $display): ?>
                                                    <option value="<?php echo $value ?>"
                                                        <?php if (isset($_SESSION['ais']['profile'][$field]) && $_SESSION['ais']['profile'][$field] == $value): ?>
                                                            selected
                                                        <?php endif; ?>
                                                    >
                                                        <?php echo $display ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        
                                        <?php else: ?>
                                            <input class="form-control" 
                                                type="<?php echo $data['type'] ?>"
                                                name="<?php echo strtoupper($field) ?>"
                                                <?php if (isset($_POST['disabled'][$field])): ?>
                                                    disabled
                                                <?php endif; ?>
                                                <?php if (isset($_SESSION['ais']['profile'][$field])): ?>
                                                    value="<?php echo $_SESSION['ais']['profile'][$field] ?>"
                                                <?php else: ?>
                                                    value=""
                                                <?php endif; ?>
                                            >

                                        <?php endif; ?>
                                    </div>
                                </div>

                            <?php endforeach; ?>                    
                        </div>                        
                    </div>
                </div>      
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
                                    <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save_profile" value="1">
                                        Save Changes
                                    </button>
                                </li>
                            </ul>
                            <input type="hidden" name="from_profile" value="profile1" />
                        </nav>
                    </div>
                </div>
            </div>  
        </form>
    </div>

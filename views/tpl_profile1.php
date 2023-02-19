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


    <div class="main-body">    
        <form action="index.php?m=tracer&profile=1" method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <!--Image-->

                            <!--Avatar-->
                            <div>
                                <div class="d-flex justify-content-center mb-4">
                                <img src="img/blank-profile-picture.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="130">
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
                            <?php foreach ($fields as $field => $data): ?>
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
                                                        <?php if (isset($_POST['profile'][$field]) && $_POST['profile'][$field] == $value): ?>
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
                                                <?php if (isset($_POST['profile'][$field])): ?>
                                                    value="<?php echo $_POST['profile'][$field] ?>"
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
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="mt-2 col-sm-0 text-secondary d-flex justify-content-center">                                
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item m-1">
                                            <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile1" disabled>
                                                << Previous 
                                            </button>
                                        </li>
                                        <li class="page-item m-1">                                                
                                            <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile1" disabled>
                                                Profile 1
                                            </button>
                                        </li>
                                        <li class="page-item m-1">                                                
                                            <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile2">
                                                Profile 2 
                                            </button>
                                        </li>
                                        <li class="page-item m-1">                                                
                                            <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile3">
                                                Profile 3 
                                            </button>
                                        </li>
                                        <li class="page-item m-1">                                                
                                            <button class="btn btn-primary btn-user btn-block mb-3 btn-warning" type="submit" name="save" value="profile2">
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
                </div>
            </div>
        
        </form>
    </div>

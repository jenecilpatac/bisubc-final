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
                                <?php if (isset($_POST['disabled'][$field]) || isset($_POST['disable_all'])): ?>
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
                                <?php if ($field == 'BIRTHDAY'): ?>
                                    max="<?php echo date('Y-m-d', strtotime(date('Y-m-d').' -10 year'))?>"
                                <?php endif; ?>
                                name="<?php echo strtoupper($field) ?>"
                                <?php if (isset($_POST['disabled'][$field]) || isset($_POST['disable_all'])): ?>
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
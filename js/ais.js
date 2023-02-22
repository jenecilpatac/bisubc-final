$( document ).ready(function() 
{
    //$('.saving_profile').hide();

    // JOB_EXPERIENCES selection
    checkHasBeenEmployedFields();
    $('input[name=JOB_EXPERIENCES]').on('change', function() {
        checkHasBeenEmployedFields();
    });

    // AWARDS selection
    checkHasBeenAwardedFields();
    $('input[name=AWARDS]').on('change', function() {
        checkHasBeenAwardedFields();
    });

    
    let from_profile = $('input[name=from_profile]').val();
    if (from_profile == 'profile1') {
        autoSaveProfile1();
    } else if (from_profile == 'profile2') {
        autoSaveProfile2();
    } else if (from_profile == 'profile3') {
        autoSaveProfile3();
    } 
});

function autoSaveProfile1()
{
    let input_list = [
        'PERMANENT_ADDRESS',
        'EMAIL',
        'PHONE',
        'MOBILE',
        'BIRTHDAY',
        'ANNUAL_INCOME'
    ];
    let select_list = [
        'CIVIL_STATUS',
        'SEX',
    ];
    enableAutoSave(input_list);
}

function autoSaveProfile2()
{
    let input_list = [
        //'EXAM_PASSED[]',
        //'EXAM_DATE_TAKEN[]',
        //'EXAM_RATING[]',
        //'ADVANCE_STUDY_PASSED[]',
        //'ADVANCE_STUDY_DURATION[]',
        //'ADVANCE_STUDY_PLACE[]',
        'PURSUE_ADVANCE_STUDIES',
        'PURSUE_ADVANCE_STUDIES_OTHERS'
    ];
    let select_list = [
    ];
    enableAutoSave(input_list);
}

function autoSaveProfile3()
{
    let input_list = [
        'EMPLOYMENT_STATUS',
        'JOB_EXPERIENCES',
        'NEVER_EMPLOYED',
        'NEVER_EMPLOYED_OTHERS',
        'LOCAL_ABROAD',
        'NAME_COMPANY',
        'ADDRESS_COMPANY',
        'CONTACT_COMPANY',
        'SUPPORTING_DOC_FILE',
        'SUPPORTING_DOCUMENT',
        'LINE_BUSINESS',
        'POSITION',
        'WORK_ALIGNED',
        'STATUS_FIRST_JOB',
        'STATUS_CURRENT_JOB',
        'LEVEL_FIRST_JOB',
        'LEVEL_CURRENT_JOB',
        'SELF_EMPLOYED_LINE',
        'FIND_FIRST',
        'FIND_FIRST_OTHERS',
        'FIRST_JOB_AFTER_GRAD',
        'FIRST_JOB_AFTER_GRAD_OTHERS',
        'FIRST_JOB_FACTORS',
        'FIRST_JOB_FACTORS_OTHERS',
        'CHALLENGES',
        'CHALLENGES_OTHERS',
        'AWARDS',
        'LEVEL_AWARD',
        'LEVEL_AWARD_OTHERS',
        'AWARD_DOC',
        'AWARD_DOC_FILE'
    ];
    let select_list = [
    ];
    enableAutoSave(input_list);
}

function enableAutoSave(input_list)
{  
    $.each( input_list, function (index, field_name) {
        $('input[name='+field_name+']').on('change', function() {            
            let alumni_key = $('input[name=alumni_key]').val();
            let from_profile = $('input[name=from_profile]').val();  
            let input_value = $(this).val();
            console.log(alumni_key + ': ' + input_value + ' = ' + field_name);
            $('.saving_profile').show();
            $.ajax({
                url: "profile.php?alumni_key="+alumni_key, 
                type: "POST",
                data: {
                    from_profile: from_profile,
                    input_name: field_name,
                    input_value: input_value
                },
                success: function(result){
                    //$('.saving_profile').hide();
                }
            });
        });
    });
}

function checkHasBeenEmployedFields()
{
    let never_input_list = [
        'NEVER_EMPLOYED',
        'NEVER_EMPLOYED_OTHERS'
    ];
    let employed_input_list = [
        'LOCAL_ABROAD',
        'NAME_COMPANY',
        'ADDRESS_COMPANY',
        'CONTACT_COMPANY',
        'SUPPORTING_DOC_FILE',
        'SUPPORTING_DOCUMENT',
        'LINE_BUSINESS',
        'POSITION',
        'WORK_ALIGNED',
        'STATUS_FIRST_JOB',
        'STATUS_CURRENT_JOB',
        'LEVEL_FIRST_JOB',
        'LEVEL_CURRENT_JOB',
        'SELF_EMPLOYED_LINE',
        'FIND_FIRST',
        'FIND_FIRST_OTHERS',
        'FIRST_JOB_AFTER_GRAD',
        'FIRST_JOB_AFTER_GRAD_OTHERS',
        'FIRST_JOB_FACTORS',
        'FIRST_JOB_FACTORS_OTHERS',
        'CHALLENGES',
        'CHALLENGES_OTHERS',
        'AWARDS',
        'LEVEL_AWARD',
        'LEVEL_AWARD_OTHERS',
        'AWARD_DOC',
        'AWARD_DOC_FILE'
    ];
    let radio_checked = $('input[name=JOB_EXPERIENCES]:checked').val();
    if (radio_checked == 'single_multiple') {
        disableInputFieds(never_input_list, true);
        disableInputFieds(employed_input_list, false);
    } else {
        disableInputFieds(never_input_list, false);
        disableInputFieds(employed_input_list, true);
    }
}

function checkHasBeenAwardedFields()
{
    let radio_checked = $('input[name=AWARDS]:checked').val();
    let disabled = true;
    $('#AWARD_DOC_FILE_LINK').hide();
    if (radio_checked == 'yes') {
        disabled = false;
        $('#AWARD_DOC_FILE_LINK').show();
    }
    let input_list = [
        'LEVEL_AWARD',
        'LEVEL_AWARD_OTHERS',
        'AWARD_DOC',
        'AWARD_DOC_FILE'
    ];
    disableInputFieds(input_list, disabled);
}

function disableInputFieds(input_list, disabled)
{
    $.each( input_list, function (index, field_name) {
        $('input[name='+field_name+']').prop("disabled", disabled);
    });
}
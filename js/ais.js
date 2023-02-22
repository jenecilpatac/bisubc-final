$( document ).ready(function() 
{
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
});

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
    console.log(input_list);
    $.each( input_list, function (index, field_name) {
        $('input[name='+field_name+']').prop("disabled", disabled);
    });
}
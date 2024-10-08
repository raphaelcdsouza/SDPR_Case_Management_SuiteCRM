<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'advocase_contact_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_CONTACT_TYPE',
          ),
          1 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'advocase_other_contact_type_c',
            'label' => 'LBL_ADVOCASE_OTHER_CONTACT_TYPE',
          ),
          1 => 
          array (
            'name' => 'advocase_individual_age_c',
            'label' => 'LBL_ADVOCASE_INDIVIDUAL_AGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
          ),
          1 => 
          array (
            'name' => 'advocase_clbl_eligible_c',
            'label' => 'LBL_ADVOCASE_CLBL_ELIGIBLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'advocase_gsa_level_c',
            'label' => 'LBL_ADVOCASE_GSA_LEVEL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'advocase_email_c',
            'label' => 'LBL_ADVOCASE_EMAIL_C',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'advocase_contact_city_c',
            'label' => 'LBL_ADVOCASE_CONTACT_CITY_C',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'advocase_contact_region_c',
            'label' => 'LBL_ADVOCASE_CONTACT_REGION',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'advocase_asq_consent_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_ASQ_CONSENT',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'advocase_legal_agreement_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_LEGAL_AGREEMENT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>

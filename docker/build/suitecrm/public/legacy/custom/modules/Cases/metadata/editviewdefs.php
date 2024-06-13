<?php
$viewdefs ['Cases'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/bindWithDelay.js',
        ),
        1 => 
        array (
          'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
        ),
        2 => 
        array (
          'file' => 'include/javascript/qtip/jquery.qtip.min.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
            ),
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'advocase_case_status_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_CASE_STATUS',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'advocase_communication_date_c',
            'label' => 'LBL_ADVOCASE_COMMUNICATION_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'advocase_communication_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_COMMUNICATION_TYPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'advocase_other_comm_type_c',
            'label' => 'LBL_ADVOCASE_OTHER_COMM_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'advocase_asq_action_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_ASQ_ACTION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'work_log',
            'comment' => 'Free-form text used to denote activities of interest',
            'label' => 'LBL_WORK_LOG',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'advocase_oasq_awareness_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_OASQ_AWARENESS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'advocase_oasq_mandate_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_OASQ_MANDATE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'advocase_case_city_c',
            'label' => 'LBL_ADVOCASE_CASE_CITY',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'advocase_case_region_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_CASE_REGION',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'advocase_case_issues_c',
            'studio' => 'visible',
            'label' => 'LBL_ADVOCASE_CASE_ISSUES',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'advocase_case_other_issue_c',
            'label' => 'LBL_ADVOCASE_CASE_OTHER_ISSUE',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'adovcase_case_agencies_c',
            'studio' => 'visible',
            'label' => 'LBL_ADOVCASE_CASE_AGENCIES',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'advocase_case_other_none_c',
            'label' => 'LBL_ADVOCASE_CASE_OTHER_NONE',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'advocase_case_action_date_c',
            'label' => 'LBL_ADVOCASE_CASE_ACTION_DATE',
          ),
        ),
        16 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>

<?php

$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Contacts',
    'width' => '23%',
    'default' => true,
  ),
  'advocase_contact_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ADVOCASE_CONTACT_TYPE',
    'width' => '10%',
  ),
  'advocase_contact_city_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ADVOCASE_CONTACT_CITY_C',
    'width' => '10%',
    'default' => true,
  ),
  'advocase_contact_region_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ADVOCASE_CONTACT_REGION',
    'width' => '10%',
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_OFFICE_PHONE',
    'width' => '15%',
    'default' => true,
  ),
  'advocase_email_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADVOCASE_EMAIL_C',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'contact_id' => 
  array (
    'usage' => 'query_only',
  ),
);
<?php

require_once 'customrenewalstartdate.civix.php';

function customrenewalstartdate_civicrm_buildForm($formName, &$form) {
  switch ($formName) {
    case 'CRM_Member_Form_MembershipRenewal':
      customrenewalstartdate_setDateDefault($form);
    break;
  }
}

//on a renewal, look up the membership status.
//if the membership status is "Grace", set the renewal date = the old end_date + 1 day.
function customrenewalstartdate_setDateDefault(&$form) {
  $mid = $form->getVar('_id');
  $params = array(
    'version' => 3,
    'sequential' => 1,
    'id' => $mid,
  );
  $result = civicrm_api('Membership', 'getsingle', $params);
  //34 is the status_id of the "Grace" Membership Status.
  if($result['status_id'] == 34) {
    $temp = DateTime::createFromFormat('Y-m-d', $result['end_date']);
    $temp->modify('+1 day');
    $defaults['renewal_date'] = $temp->format('m/d/Y');
    $form->setDefaults($defaults);
  }
}


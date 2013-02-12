<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 =>
  array (
    'name' => 'Pledge SYBUNS Report',
    'entity' => 'ReportTemplate',
    'params' =>
    array (
      'version' => 3,
      'label' => 'Pledge Some Year but not Since',
      'description' => 'Pledge SYBUNS',
      'class_name' => 'CRM_Extendedreport_Form_Report_Pledge_Sybuns',
      'report_url' => 'pledge/sybuns',
      'component' => 'CiviPledge',
    ),
  ),
);
<?php
$xpdo_meta_map['sriagenda_ses_spk']= array (
  'package' => 'sriagenda',
  'version' => '1.1',
  'table' => 'sriagenda_ses_spk',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'ses_id' => 0,
    'spk_id' => 0,
    'order' => '',
    'notes' => '',
    'MIGX_id' => '',
  ),
  'fieldMeta' => 
  array (
    'ses_id' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '10',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'spk_id' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '10',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'order' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'notes' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'MIGX_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
  'aggregates' => 
  array (
    'Session' => 
    array (
      'class' => 'sriagenda_ses',
      'local' => 'ses_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Speaker' => 
    array (
      'class' => 'sriagenda_spk',
      'local' => 'spk_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);

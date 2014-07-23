<?php
$xpdo_meta_map['sriagenda']= array (
  'package' => 'sriagenda',
  'version' => '1.1',
  'table' => 'sriagenda',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'conf_year' => '',
    'conf_theme' => '',
    'conf_start' => NULL,
    'conf_end' => NULL,
    'conf_status' => '',
    'createdon' => NULL,
    'deleted' => 0,
    'published' => 1,
  ),
  'fieldMeta' => 
  array (
    'conf_year' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'conf_theme' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'conf_start' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'conf_end' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'conf_status' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'createdon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'deleted' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'published' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 1,
    ),
  ),
  'composites' => 
  array (
    'Sessions' => 
    array (
      'class' => 'sriagenda_ses',
      'local' => 'id',
      'foreign' => 'agenda_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);

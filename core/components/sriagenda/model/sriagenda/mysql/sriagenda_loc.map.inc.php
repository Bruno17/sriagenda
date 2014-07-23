<?php
$xpdo_meta_map['sriagenda_loc']= array (
  'package' => 'sriagenda',
  'version' => '1.1',
  'table' => 'sriagenda_loc',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'loc_building' => '',
    'loc_room' => '',
    'createdon' => NULL,
    'deleted' => 0,
    'published' => 1,
  ),
  'fieldMeta' => 
  array (
    'loc_building' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'loc_room' => 
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
      'foreign' => 'loc_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);

<?php
$xpdo_meta_map['sriagenda_ses']= array (
  'package' => 'sriagenda',
  'version' => '1.1',
  'table' => 'sriagenda_ses',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'agenda_id' => 0,
    'loc_id' => 0,
    'ses_title' => '',
    'ses_type' => '',
    'ses_start' => NULL,
    'ses_end' => NULL,
    'ses_desc' => '',
    'ses_cecredit' => '',
    'speakers' => '',
    'ses_pres1' => '',
    'ses_pres2' => '',
    'ses_pres3' => '',
    'ses_pres4' => '',
    'ses_pres5' => '',
    'ses_audio' => '',
    'ses_video' => '',
    'createdon' => NULL,
    'deleted' => 0,
    'published' => 1,
  ),
  'fieldMeta' => 
  array (
    'agenda_id' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '10',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'loc_id' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'precision' => '10',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'ses_title' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_start' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'ses_end' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'ses_desc' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_cecredit' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'speakers' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_pres1' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_pres2' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_pres3' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_pres4' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_pres5' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_audio' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ses_video' => 
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
    'Speakers' => 
    array (
      'class' => 'sriagenda_ses_spk',
      'local' => 'id',
      'foreign' => 'ses_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Agenda' => 
    array (
      'class' => 'sriagenda',
      'local' => 'agenda_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Location' => 
    array (
      'class' => 'sriagenda_loc',
      'local' => 'loc_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);

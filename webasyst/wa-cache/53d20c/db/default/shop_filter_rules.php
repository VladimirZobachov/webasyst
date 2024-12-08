<?php
return array (
  'id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'filter_id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
  ),
  'rule_type' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'rule_params' => 
  array (
    'type' => 'longtext',
  ),
  'rule_group' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'open_interval' => 
  array (
    'type' => 'int',
  ),
);

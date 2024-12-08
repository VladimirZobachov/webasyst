<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'feature_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'code' => 
  array (
    'type' => 'mediumint unsigned',
  ),
  'value' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
);

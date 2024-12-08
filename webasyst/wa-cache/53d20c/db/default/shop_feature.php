<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'parent_id' => 
  array (
    'type' => 'int',
  ),
  'code' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'params' => '\'public\',\'hidden\',\'private\'',
    'null' => 0,
    'default' => 'public',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'selectable' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'multiple' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'count' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'default' => '0',
  ),
  'available_for_sku' => 
  array (
    'type' => 'int',
  ),
  'default_unit' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'builtin' => 
  array (
    'type' => 'int',
    'default' => '0',
  ),
);

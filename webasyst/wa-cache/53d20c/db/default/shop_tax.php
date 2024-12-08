<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'included' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'address_type' => 
  array (
    'type' => 'varchar',
    'params' => '8',
    'null' => 0,
    'default' => 'shipping',
  ),
);

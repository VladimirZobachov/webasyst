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
    'params' => '128',
    'null' => 0,
  ),
  'event' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
  ),
  'transport' => 
  array (
    'type' => 'enum',
    'params' => '\'email\',\'sms\',\'http\'',
    'null' => 0,
    'default' => 'email',
  ),
  'status' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
);

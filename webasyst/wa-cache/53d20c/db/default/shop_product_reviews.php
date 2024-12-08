<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'left_key' => 
  array (
    'type' => 'int',
  ),
  'right_key' => 
  array (
    'type' => 'int',
  ),
  'depth' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'parent_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'product_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'review_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'params' => '\'approved\',\'deleted\',\'moderation\'',
    'null' => 0,
    'default' => 'approved',
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'params' => '64',
  ),
  'text' => 
  array (
    'type' => 'text',
  ),
  'rate' => 
  array (
    'type' => 'decimal',
    'params' => '3,2',
  ),
  'contact_id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'default' => '0',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '50',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'params' => '50',
  ),
  'images_count' => 
  array (
    'type' => 'int',
    'default' => '0',
  ),
  'site' => 
  array (
    'type' => 'varchar',
    'params' => '100',
  ),
  'auth_provider' => 
  array (
    'type' => 'varchar',
    'params' => '100',
  ),
  'ip' => 
  array (
    'type' => 'int',
  ),
);

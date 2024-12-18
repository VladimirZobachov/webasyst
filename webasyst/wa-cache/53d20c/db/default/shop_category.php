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
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'meta_title' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'meta_keywords' => 
  array (
    'type' => 'text',
  ),
  'meta_description' => 
  array (
    'type' => 'text',
  ),
  'type' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'full_url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'count' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'description' => 
  array (
    'type' => 'mediumtext',
  ),
  'conditions' => 
  array (
    'type' => 'text',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'edit_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'filter' => 
  array (
    'type' => 'text',
  ),
  'sort_products' => 
  array (
    'type' => 'varchar',
    'params' => '32',
  ),
  'include_sub_categories' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'status' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
);

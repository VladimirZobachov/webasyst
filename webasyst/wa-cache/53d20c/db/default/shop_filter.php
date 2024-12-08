<?php
return array (
  'id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'parent_id' => 
  array (
    'type' => 'int unsigned',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'creator_contact_id' => 
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
);

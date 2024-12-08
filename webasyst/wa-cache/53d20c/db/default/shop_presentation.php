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
  'use_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'sort_column_id' => 
  array (
    'type' => 'int unsigned',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'sort_order' => 
  array (
    'type' => 'enum',
    'params' => '\'asc\',\'desc\'',
    'null' => 0,
    'default' => 'asc',
  ),
  'view' => 
  array (
    'type' => 'enum',
    'params' => '\'table\',\'table_extended\',\'thumbs\'',
    'null' => 0,
    'default' => 'table',
  ),
  'rows_on_page' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '30',
  ),
  'browser' => 
  array (
    'type' => 'varchar',
    'params' => '64',
  ),
  'filter_id' => 
  array (
    'type' => 'int',
  ),
);

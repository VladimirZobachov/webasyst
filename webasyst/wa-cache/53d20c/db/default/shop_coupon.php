<?php
return array (
  'id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'code' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '3',
    'null' => 0,
  ),
  'limit' => 
  array (
    'type' => 'int',
  ),
  'used' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'value' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
  ),
  'url' => 
  array (
    'type' => 'text',
  ),
  'comment' => 
  array (
    'type' => 'text',
  ),
  'expire_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'create_contact_id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'default' => '0',
  ),
  'products_hash' => 
  array (
    'type' => 'text',
  ),
);

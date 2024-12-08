<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'update_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'state_id' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
    'default' => 'new',
  ),
  'total' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
  ),
  'currency' => 
  array (
    'type' => 'char',
    'params' => '3',
    'null' => 0,
  ),
  'rate' => 
  array (
    'type' => 'decimal',
    'params' => '15,8',
    'null' => 0,
    'default' => '1.00000000',
  ),
  'tax' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'shipping' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'discount' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'assigned_contact_id' => 
  array (
    'type' => 'int',
  ),
  'paid_year' => 
  array (
    'type' => 'smallint',
  ),
  'paid_quarter' => 
  array (
    'type' => 'smallint',
  ),
  'paid_month' => 
  array (
    'type' => 'smallint',
  ),
  'paid_date' => 
  array (
    'type' => 'date',
  ),
  'paid_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'auth_date' => 
  array (
    'type' => 'date',
  ),
  'is_first' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'unsettled' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'comment' => 
  array (
    'type' => 'text',
  ),
  'courier_contact_id' => 
  array (
    'type' => 'int',
  ),
  'shipping_datetime' => 
  array (
    'type' => 'datetime',
  ),
);

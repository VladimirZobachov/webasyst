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
  ),
  'enabled' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '1',
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
  'orders_processed' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'note' => 
  array (
    'type' => 'text',
  ),
  'api_token' => 
  array (
    'type' => 'varchar',
    'params' => '32',
  ),
  'api_pin' => 
  array (
    'type' => 'varchar',
    'params' => '32',
  ),
  'api_pin_expire' => 
  array (
    'type' => 'datetime',
  ),
  'api_last_use' => 
  array (
    'type' => 'datetime',
  ),
  'all_storefronts' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '1',
  ),
  'rights_order_edit' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'rights_customer_edit' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
);

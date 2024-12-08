<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'order_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'product_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'sku_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'sku_code' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'params' => '\'product\',\'service\'',
    'null' => 0,
  ),
  'service_id' => 
  array (
    'type' => 'int',
  ),
  'service_variant_id' => 
  array (
    'type' => 'int',
  ),
  'price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
  ),
  'quantity' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
    'null' => 0,
  ),
  'quantity_denominator' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'default' => '1',
  ),
  'parent_id' => 
  array (
    'type' => 'int',
  ),
  'stock_id' => 
  array (
    'type' => 'int',
  ),
  'virtualstock_id' => 
  array (
    'type' => 'int',
  ),
  'stock_unit_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'purchase_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'total_discount' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'tax_percent' => 
  array (
    'type' => 'decimal',
    'params' => '7,4',
  ),
  'tax_included' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
);

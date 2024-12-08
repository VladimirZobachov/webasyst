<?php
return array (
  'id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'promo_id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
  ),
  'rule_type' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
  ),
  'rule_params' => 
  array (
    'type' => 'longtext',
  ),
);

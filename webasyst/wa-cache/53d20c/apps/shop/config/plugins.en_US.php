<?php
return array (
  'brands' => 
  array (
    'name' => 'Brands',
    'description' => 'Storefront’s product filtering by brand (manufacturer)',
    'vendor' => 'webasyst',
    'version' => '1.4.0',
    'img' => 'wa-apps/shop/plugins/brands/img/brands.png',
    'shop_settings' => true,
    'frontend' => true,
    'icons' => 
    array (
      16 => 'img/brands.png',
    ),
    'handlers' => 
    array (
      'frontend_nav' => 'frontendNav',
      'sitemap' => 'sitemap',
      'routing' => 'routing',
    ),
    'id' => 'brands',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
  'ordercall' => 
  array (
    'name' => 'Order Call',
    'description' => 'Allow customers to request a call-back',
    'version' => '1.0.0',
    'vendor' => 'yourname',
    'handlers' => 
    array (
      'frontend_header' => 'frontendHeader',
    ),
    'settings' => 
    array (
      'enabled' => 
      array (
        'title' => 'Enable Plugin',
        'type' => 'checkbox',
        'value' => 1,
      ),
      'link_text' => 
      array (
        'title' => 'Order Call Link Text',
        'value' => 'Order a Call',
        'description' => 'Text to display on the Order Call button',
      ),
      'admin_email' => 
      array (
        'title' => 'Administrator Email',
        'value' => 'admin@example.com',
        'description' => 'Email address to receive call-back requests',
      ),
      'sender_email' => 
      array (
        'title' => 'Sender Email',
        'value' => 'no-reply@example.com',
        'description' => 'Email address that will appear as the sender',
      ),
      'agreement_link' => 
      array (
        'title' => 'Agreement Link',
        'value' => '/terms',
        'description' => 'URL to the agreement or terms page',
      ),
    ),
    'id' => 'ordercall',
    'app_id' => 'shop',
  ),
);

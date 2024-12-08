<?php
return array (
  'installer' => 
  array (
    'id' => 'installer',
    'name' => 'Installer',
    'description' => 'Install new apps from the Webasyst Store',
    'icon' => 
    array (
      48 => 'wa-apps/installer/img/installer.svg',
      24 => 'wa-apps/installer/img/installer.svg',
      16 => 'wa-apps/installer/img/installer.svg',
    ),
    'mobile' => false,
    'version' => '3.2.1',
    'critical' => '3.2.1',
    'system' => true,
    'vendor' => 'webasyst',
    'csrf' => true,
    'ui' => '2.0',
    'build' => 922,
    'img' => 'wa-apps/installer/img/installer.svg',
  ),
  'site' => 
  array (
    'id' => 'site',
    'name' => 'Site',
    'icon' => 
    array (
      48 => 'wa-apps/site/img/site512.png',
      24 => 'wa-apps/site/img/site512.png',
      16 => 'wa-apps/site/img/site512.png',
    ),
    'sash_color' => '#49a2e0',
    'frontend' => true,
    'version' => '2.6.2',
    'critical' => '2.6.0',
    'vendor' => 'webasyst',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'themes' => true,
    'pages' => true,
    'auth' => true,
    'csrf' => true,
    'my_account' => true,
    'build' => 307,
    'img' => 'wa-apps/site/img/site512.png',
    'ui' => '1.3',
  ),
  'team' => 
  array (
    'id' => 'team',
    'name' => 'Team',
    'icon' => 
    array (
      48 => 'wa-apps/team/img/team.svg',
      24 => 'wa-apps/team/img/team.svg',
      16 => 'wa-apps/team/img/team.svg',
    ),
    'version' => '2.3.2',
    'vendor' => 'webasyst',
    'sash_color' => '#f0dc03',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'csrf' => true,
    'ui' => '2.0',
    'forcible_ui' => '1.3',
    'build' => 236,
    'img' => 'wa-apps/team/img/team.svg',
  ),
  'shop' => 
  array (
    'id' => 'shop',
    'name' => 'Shop-Script',
    'description' => 'Shop-Script is a robust shopping cart software that allows you to quickly establish your own online store and sell online.',
    'icon' => 
    array (
      48 => 'wa-apps/shop/img/shop.svg',
      24 => 'wa-apps/shop/img/shop.svg',
      16 => 'wa-apps/shop/img/shop.svg',
    ),
    'sash_color' => '#27bf52',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'my_account' => true,
    'version' => '11.0.0',
    'critical' => '11.0.0',
    'vendor' => 'webasyst',
    'csrf' => true,
    'payment_plugins' => 
    array (
      'taxes' => true,
      'rights' => 'settings',
    ),
    'shipping_plugins' => 
    array (
      'desired_date' => true,
      'draft' => true,
      'ready' => true,
      'cancel' => true,
      'taxes' => true,
      'custom_fields' => true,
      'dimensions' => false,
      'sync' => true,
      'callback' => 
      array (
      ),
      'rights' => 'settings',
    ),
    'sms_plugins' => true,
    'license' => 'commercial',
    'routing_params' => 
    array (
      'checkout_version' => 2,
      'checkout_storefront_id' => 'bd2b0a7068d9088d83a50d99ea7d7de2',
    ),
    'ui' => '2.0',
    'build' => 0,
    'img' => 'wa-apps/shop/img/shop.svg',
  ),
  'webasyst' => 
  array (
    'id' => 'webasyst',
    'name' => 'Webasyst',
    'prefix' => 'webasyst',
    'version' => '3.2.1',
    'critical' => '3.2.1',
    'vendor' => 'webasyst',
    'csrf' => true,
    'header_items' => 
    array (
      'settings' => 
      array (
        'icon' => 
        array (
          48 => 'wa-content/img/wa-settings/settings.svg',
        ),
        'name' => 'Settings',
        'link' => 'settings',
        'rights' => 'backend',
        'img' => 'wa-content/img/wa-settings/settings.svg',
      ),
    ),
    'ui' => '2.0',
    'build' => 922,
    'icon' => 
    array (
    ),
  ),
);

<?php
return array (
  'plugins' => 
  array (
    'shop' => 
    array (
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
    ),
  ),
  'handlers' => 
  array (
    'shop' => 
    array (
      'backend_menu' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_menu/',
          'file' => 'shop.backend_menu.handler.php',
          'class' => 'installerShopBackend_menuHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_extended_menu' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_extended_menu/',
          'file' => 'shop.backend_extended_menu.handler.php',
          'class' => 'installerShopBackend_extended_menuHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'frontend_nav' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brands',
          'regex' => '/frontend_nav/',
          'class' => 'shopBrandsPlugin',
          'method' => 
          array (
            0 => 'frontendNav',
          ),
        ),
      ),
      'sitemap' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brands',
          'regex' => '/sitemap/',
          'class' => 'shopBrandsPlugin',
          'method' => 
          array (
            0 => 'sitemap',
          ),
        ),
      ),
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brands',
          'regex' => '/routing/',
          'class' => 'shopBrandsPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
      ),
      'frontend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'ordercall',
          'regex' => '/frontend_header/',
          'class' => 'shopOrdercallPlugin',
          'method' => 
          array (
            0 => 'frontendHeader',
          ),
        ),
      ),
    ),
    'webasyst' => 
    array (
      'backend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_header/',
          'file' => 'webasyst.backend_header.handler.php',
          'class' => 'installerWebasystBackend_headerHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'waid_auth' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/waid_auth/',
          'file' => 'webasyst.waid_auth.handler.php',
          'class' => 'installerWebasystWaid_authHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_dispatch_miss' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_dispatch_miss/',
          'file' => 'webasyst.backend_dispatch_miss.handler.php',
          'class' => 'teamWebasystBackend_dispatch_missHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_personal_profile' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_personal_profile/',
          'file' => 'webasyst.backend_personal_profile.handler.php',
          'class' => 'teamWebasystBackend_personal_profileHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_push' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/backend_push/',
          'file' => 'webasyst.backend_push.handler.php',
          'class' => 'shopWebasystBackend_pushHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'contacts' => 
    array (
      'delete' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'teamContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'shopContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'webasyst',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'webasystContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'contacts_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'teamContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'shopContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'profile.tab' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'teamContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'shopContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'links' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'shopContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'explore' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/explore/',
          'file' => 'contacts.explore.handler.php',
          'class' => 'shopContactsExploreHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'merge' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'shopContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'site' => 
    array (
      'route_delete.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_delete\\.after/',
          'file' => 'site.route_delete.after.handler.php',
          'class' => 'shopSiteRoute_deleteAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'update.route' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/update\\.route/',
          'file' => 'site.update.route.handler.php',
          'class' => 'shopSiteUpdateRouteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.before' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.before/',
          'file' => 'site.route_save.before.handler.php',
          'class' => 'shopSiteRoute_saveBeforeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.after/',
          'file' => 'site.route_save.after.handler.php',
          'class' => 'shopSiteRoute_saveAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
  ),
);

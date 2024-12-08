<?php
return array (
  'sidebar' => 
  array (
    'APPS' => 
    array (
      'name' => 'Apps &amp; Plugins',
      'TOP' => 
      array (
        'base_url' => '/',
        'list' => 
        array (
          'main' => 
          array (
            'name' => 'Recommended',
            'url' => '',
            'icon' => 'fas fa-thumbs-up s-menu-icon',
          ),
          'new' => 
          array (
            'name' => 'New',
            'url' => 'new/',
            'icon' => 'fas fa-certificate s-menu-icon',
          ),
          'top' => 
          array (
            'name' => 'Top chart',
            'url' => 'top/',
            'icon' => 'fas fa-crown s-menu-icon',
          ),
          'developers' => 
          array (
            'name' => 'Developers',
            'url' => 'developers/',
            'icon' => 'fas fa-user-friends s-menu-icon',
          ),
          'discounts' => 
          array (
            'name' => 'Discounts today',
            'url' => 'discounts/',
            'icon' => 'fas fa-percent s-menu-icon',
          ),
        ),
        'extra' => 
        array (
          'allwebasyst' => 
          array (
            'name' => 'Bundles',
            'url' => 'https://www.webasyst.com/buy/store/bundle/all-webasyst/',
            'icon' => 'icon webasyst-magic-wand s-menu-icon',
            'badge' => '-40%',
          ),
        ),
      ),
      'FILTERS' => 
      array (
        'price' => 
        array (
          'name' => 'Prices',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'Paid',
              'url_param' => 'filters[paid]=1',
              'filter_name' => 'paid',
              'filter_value' => 1,
              'count' => 272,
            ),
            1 => 
            array (
              'name' => 'Free ',
              'url_param' => 'filters[paid]=0',
              'filter_name' => 'paid',
              'filter_value' => 0,
              'count' => 150,
            ),
          ),
        ),
        'type' => 
        array (
          'name' => 'Types',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'Apps',
              'url_param' => 'filters[type]=app',
              'filter_name' => 'type',
              'filter_value' => 'app',
              'count' => 44,
            ),
            1 => 
            array (
              'name' => 'Plugins',
              'url_param' => 'filters[type]=plugin',
              'filter_name' => 'type',
              'filter_value' => 'plugin',
              'count' => 289,
            ),
            2 => 
            array (
              'name' => 'Widgets',
              'url_param' => 'filters[type]=widget',
              'filter_name' => 'type',
              'filter_value' => 'widget',
              'count' => 28,
            ),
          ),
        ),
        'category' => 
        array (
          'name' => 'Industries',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'Promo campaigns',
              'url_param' => 'filters[category]=tag:actions',
              'filter_name' => 'category',
              'filter_value' => 'tag:actions',
              'count' => 9,
            ),
            1 => 
            array (
              'name' => 'Blog & news',
              'url_param' => 'filters[category]=tag:blogging',
              'filter_name' => 'category',
              'filter_value' => 'tag:blogging',
              'count' => 7,
            ),
            2 => 
            array (
              'name' => 'Shipping',
              'url_param' => 'filters[category]=plugins:shipping',
              'filter_name' => 'category',
              'filter_value' => 'plugins:shipping',
              'count' => 10,
            ),
            3 => 
            array (
              'name' => 'Tasks & projects',
              'url_param' => 'filters[category]=tag:projects',
              'filter_name' => 'category',
              'filter_value' => 'tag:projects',
              'count' => 19,
            ),
            4 => 
            array (
              'name' => 'Orders & accounting',
              'url_param' => 'filters[category]=tag:accounting',
              'filter_name' => 'category',
              'filter_value' => 'tag:accounting',
              'count' => 59,
            ),
            5 => 
            array (
              'name' => 'Orders dimensions',
              'url_param' => 'filters[category]=tag:dimensions',
              'filter_name' => 'category',
              'filter_value' => 'tag:dimensions',
              'count' => 2,
            ),
            6 => 
            array (
              'name' => 'Maps',
              'url_param' => 'filters[category]=tag:maps',
              'filter_name' => 'category',
              'filter_value' => 'tag:maps',
              'count' => 1,
            ),
            7 => 
            array (
              'name' => 'Teamwork',
              'url_param' => 'filters[category]=tag:colaboration',
              'filter_name' => 'category',
              'filter_value' => 'tag:colaboration',
              'count' => 25,
            ),
            8 => 
            array (
              'name' => 'Import/export',
              'url_param' => 'filters[category]=tag:importexport',
              'filter_name' => 'category',
              'filter_value' => 'tag:importexport',
              'count' => 8,
            ),
            9 => 
            array (
              'name' => 'Product catalog',
              'url_param' => 'filters[category]=tag:inventory',
              'filter_name' => 'category',
              'filter_value' => 'tag:inventory',
              'count' => 83,
            ),
            10 => 
            array (
              'name' => 'User interface',
              'url_param' => 'filters[category]=tag:looks',
              'filter_name' => 'category',
              'filter_value' => 'tag:looks',
              'count' => 67,
            ),
            11 => 
            array (
              'name' => 'Marketing & ads',
              'url_param' => 'filters[category]=tag:marketing',
              'filter_name' => 'category',
              'filter_value' => 'tag:marketing',
              'count' => 73,
            ),
            12 => 
            array (
              'name' => 'Sales channels',
              'url_param' => 'filters[category]=tag:marketplaces',
              'filter_name' => 'category',
              'filter_value' => 'tag:marketplaces',
              'count' => 0,
            ),
            13 => 
            array (
              'name' => 'Online cash registers',
              'url_param' => 'filters[category]=tag:fz54',
              'filter_name' => 'category',
              'filter_value' => 'tag:fz54',
              'count' => 6,
            ),
            14 => 
            array (
              'name' => 'Payment',
              'url_param' => 'filters[category]=plugins:payment',
              'filter_name' => 'category',
              'filter_value' => 'plugins:payment',
              'count' => 16,
            ),
            15 => 
            array (
              'name' => 'Reports & analytics',
              'url_param' => 'filters[category]=tag:reporting',
              'filter_name' => 'category',
              'filter_value' => 'tag:reporting',
              'count' => 19,
            ),
            16 => 
            array (
              'name' => 'Printable forms',
              'url_param' => 'filters[category]=tag:printform',
              'filter_name' => 'category',
              'filter_value' => 'tag:printform',
              'count' => 12,
            ),
            17 => 
            array (
              'name' => 'Customer support',
              'url_param' => 'filters[category]=app:helpdesk',
              'filter_name' => 'category',
              'filter_value' => 'app:helpdesk',
              'count' => 4,
            ),
            18 => 
            array (
              'name' => 'Search & filters',
              'url_param' => 'filters[category]=tag:search',
              'filter_name' => 'category',
              'filter_value' => 'tag:search',
              'count' => 16,
            ),
            19 => 
            array (
              'name' => 'Sales & CRM',
              'url_param' => 'filters[category]=app:crm',
              'filter_name' => 'category',
              'filter_value' => 'app:crm',
              'count' => 14,
            ),
            20 => 
            array (
              'name' => 'Discounts & gifts',
              'url_param' => 'filters[category]=tag:gifts',
              'filter_name' => 'category',
              'filter_value' => 'tag:gifts',
              'count' => 10,
            ),
            21 => 
            array (
              'name' => 'Website creation',
              'url_param' => 'filters[category]=app:site',
              'filter_name' => 'category',
              'filter_value' => 'app:site',
              'count' => 10,
            ),
            22 => 
            array (
              'name' => 'Social media',
              'url_param' => 'filters[category]=tag:social',
              'filter_name' => 'category',
              'filter_value' => 'tag:social',
              'count' => 13,
            ),
            23 => 
            array (
              'name' => 'SEO',
              'url_param' => 'filters[category]=tag:seo',
              'filter_name' => 'category',
              'filter_value' => 'tag:seo',
              'count' => 16,
            ),
            24 => 
            array (
              'name' => 'Telephony',
              'url_param' => 'filters[category]=tag:telephony',
              'filter_name' => 'category',
              'filter_value' => 'tag:telephony',
              'count' => 7,
            ),
            25 => 
            array (
              'name' => 'SMS notifications',
              'url_param' => 'filters[category]=plugins:sms',
              'filter_name' => 'category',
              'filter_value' => 'plugins:sms',
              'count' => 10,
            ),
            26 => 
            array (
              'name' => 'Photos',
              'url_param' => 'filters[category]=app:photos',
              'filter_name' => 'category',
              'filter_value' => 'app:photos',
              'count' => 9,
            ),
          ),
        ),
      ),
    ),
    'THEMES' => 
    array (
      'name' => 'Themes',
      'TOP' => 
      array (
        'base_url' => '/themes/',
        'list' => 
        array (
          'main' => 
          array (
            'name' => 'Recommended',
            'url' => '',
            'icon' => 'fas fa-thumbs-up s-menu-icon',
          ),
          'new' => 
          array (
            'name' => 'New',
            'url' => 'new/',
            'icon' => 'fas fa-certificate s-menu-icon',
          ),
          'top' => 
          array (
            'name' => 'Top chart',
            'url' => 'top/',
            'icon' => 'fas fa-crown s-menu-icon',
          ),
          'developers' => 
          array (
            'name' => 'Developers',
            'url' => 'developers/',
            'icon' => 'fas fa-user-friends s-menu-icon',
          ),
          'discounts' => 
          array (
            'name' => 'Discounts today',
            'url' => 'discounts/',
            'icon' => 'fas fa-percent s-menu-icon',
          ),
        ),
      ),
      'FILTERS' => 
      array (
        'price' => 
        array (
          'name' => 'Prices',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'Paid',
              'url_param' => 'filters[paid]=1',
              'filter_name' => 'paid',
              'filter_value' => 1,
              'count' => 48,
            ),
            1 => 
            array (
              'name' => 'Free ',
              'url_param' => 'filters[paid]=0',
              'filter_name' => 'paid',
              'filter_value' => 0,
              'count' => 13,
            ),
          ),
        ),
        'purpose' => 
        array (
          'name' => 'Types',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'Online stores',
              'url_param' => 'filters[purpose]=ecommerce',
              'filter_name' => 'purpose',
              'filter_value' => 'ecommerce',
              'count' => 26,
            ),
            1 => 
            array (
              'name' => 'Websites & landings',
              'url_param' => 'filters[purpose]=landing',
              'filter_name' => 'purpose',
              'filter_value' => 'landing',
              'count' => 20,
            ),
            2 => 
            array (
              'name' => 'Corporate website',
              'url_param' => 'filters[purpose]=corporate',
              'filter_name' => 'purpose',
              'filter_value' => 'corporate',
              'count' => 1,
            ),
            3 => 
            array (
              'name' => 'Blogs & forums',
              'url_param' => 'filters[purpose]=blogging',
              'filter_name' => 'purpose',
              'filter_value' => 'blogging',
              'count' => 1,
            ),
            4 => 
            array (
              'name' => 'Photo galleries',
              'url_param' => 'filters[purpose]=media',
              'filter_name' => 'purpose',
              'filter_value' => 'media',
              'count' => 0,
            ),
          ),
        ),
        'color' => 
        array (
          'name' => 'Colors',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'All colors',
              'url_param' => 'filters[color]=@any',
              'filter_name' => 'color',
              'filter_value' => '@any',
              'count' => 2,
            ),
            1 => 
            array (
              'name' => 'Black',
              'url_param' => 'filters[color]=black',
              'filter_name' => 'color',
              'filter_value' => 'black',
              'count' => 0,
            ),
            2 => 
            array (
              'name' => 'Gray',
              'url_param' => 'filters[color]=gray',
              'filter_name' => 'color',
              'filter_value' => 'gray',
              'count' => 0,
            ),
            3 => 
            array (
              'name' => 'White',
              'url_param' => 'filters[color]=white',
              'filter_name' => 'color',
              'filter_value' => 'white',
              'count' => 0,
            ),
            4 => 
            array (
              'name' => 'Green',
              'url_param' => 'filters[color]=green',
              'filter_name' => 'color',
              'filter_value' => 'green',
              'count' => 0,
            ),
            5 => 
            array (
              'name' => 'Yellow',
              'url_param' => 'filters[color]=yellow',
              'filter_name' => 'color',
              'filter_value' => 'yellow',
              'count' => 0,
            ),
            6 => 
            array (
              'name' => 'Orange',
              'url_param' => 'filters[color]=orange',
              'filter_name' => 'color',
              'filter_value' => 'orange',
              'count' => 1,
            ),
            7 => 
            array (
              'name' => 'Brown',
              'url_param' => 'filters[color]=brown',
              'filter_name' => 'color',
              'filter_value' => 'brown',
              'count' => 0,
            ),
            8 => 
            array (
              'name' => 'Red',
              'url_param' => 'filters[color]=red',
              'filter_name' => 'color',
              'filter_value' => 'red',
              'count' => 1,
            ),
            9 => 
            array (
              'name' => 'Purple',
              'url_param' => 'filters[color]=purple',
              'filter_name' => 'color',
              'filter_value' => 'purple',
              'count' => 0,
            ),
            10 => 
            array (
              'name' => 'Blue',
              'url_param' => 'filters[color]=blue',
              'filter_name' => 'color',
              'filter_value' => 'blue',
              'count' => 0,
            ),
            11 => 
            array (
              'name' => 'Turquoise',
              'url_param' => 'filters[color]=aquamarine',
              'filter_name' => 'color',
              'filter_value' => 'aquamarine',
              'count' => 0,
            ),
          ),
        ),
        'industry' => 
        array (
          'name' => 'Industries',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'Automobile',
              'url_param' => 'filters[industry]=automobile',
              'filter_name' => 'industry',
              'filter_value' => 'automobile',
              'count' => 1,
            ),
            1 => 
            array (
              'name' => 'Electronics & gadgets',
              'url_param' => 'filters[industry]=electronics',
              'filter_name' => 'industry',
              'filter_value' => 'electronics',
              'count' => 1,
            ),
            2 => 
            array (
              'name' => 'Clothes & accessories',
              'url_param' => 'filters[industry]=clothing',
              'filter_name' => 'industry',
              'filter_value' => 'clothing',
              'count' => 1,
            ),
            3 => 
            array (
              'name' => 'Sports & tourism',
              'url_param' => 'filters[industry]=sports',
              'filter_name' => 'industry',
              'filter_value' => 'sports',
              'count' => 1,
            ),
            4 => 
            array (
              'name' => 'Children’s goods',
              'url_param' => 'filters[industry]=children',
              'filter_name' => 'industry',
              'filter_value' => 'children',
              'count' => 1,
            ),
            5 => 
            array (
              'name' => 'Foods & drinks',
              'url_param' => 'filters[industry]=fooddrink',
              'filter_name' => 'industry',
              'filter_value' => 'fooddrink',
              'count' => 0,
            ),
            6 => 
            array (
              'name' => 'Gifts',
              'url_param' => 'filters[industry]=gifts',
              'filter_name' => 'industry',
              'filter_value' => 'gifts',
              'count' => 0,
            ),
            7 => 
            array (
              'name' => 'Furniture',
              'url_param' => 'filters[industry]=furniture',
              'filter_name' => 'industry',
              'filter_value' => 'furniture',
              'count' => 0,
            ),
            8 => 
            array (
              'name' => 'Construction & repair',
              'url_param' => 'filters[industry]=construction',
              'filter_name' => 'industry',
              'filter_value' => 'construction',
              'count' => 0,
            ),
            9 => 
            array (
              'name' => 'Health & beauty',
              'url_param' => 'filters[industry]=health',
              'filter_name' => 'industry',
              'filter_value' => 'health',
              'count' => 0,
            ),
            10 => 
            array (
              'name' => 'Services',
              'url_param' => 'filters[industry]=services',
              'filter_name' => 'industry',
              'filter_value' => 'services',
              'count' => 0,
            ),
          ),
        ),
        'theme_feature' => 
        array (
          'name' => 'Special features',
          'list' => 
          array (
            0 => 
            array (
              'name' => 'One product',
              'url_param' => 'filters[theme_feature]=tag:singleproduct',
              'filter_name' => 'theme_feature',
              'filter_value' => 'tag:singleproduct',
              'count' => 4,
            ),
            1 => 
            array (
              'name' => 'Large catalog',
              'url_param' => 'filters[theme_feature]=tag:largecatalogs',
              'filter_name' => 'theme_feature',
              'filter_value' => 'tag:largecatalogs',
              'count' => 26,
            ),
            2 => 
            array (
              'name' => 'Homepage slider',
              'url_param' => 'filters[theme_feature]=tag:homepageslider',
              'filter_name' => 'theme_feature',
              'filter_value' => 'tag:homepageslider',
              'count' => 36,
            ),
            3 => 
            array (
              'name' => 'In-cart checkout',
              'url_param' => 'filters[theme_feature]=tag:singlepagecheckout',
              'filter_name' => 'theme_feature',
              'filter_value' => 'tag:singlepagecheckout',
              'count' => 25,
            ),
            4 => 
            array (
              'name' => 'Video background',
              'url_param' => 'filters[theme_feature]=tag:videobackground',
              'filter_name' => 'theme_feature',
              'filter_value' => 'tag:videobackground',
              'count' => 6,
            ),
            5 => 
            array (
              'name' => 'Parallax',
              'url_param' => 'filters[theme_feature]=tag:parallax',
              'filter_name' => 'theme_feature',
              'filter_value' => 'tag:parallax',
              'count' => 8,
            ),
            6 => 
            array (
              'name' => 'Blog',
              'url_param' => 'filters[theme_feature]=app:blog',
              'filter_name' => 'theme_feature',
              'filter_value' => 'app:blog',
              'count' => 42,
            ),
            7 => 
            array (
              'name' => 'Hub',
              'url_param' => 'filters[theme_feature]=app:hub',
              'filter_name' => 'theme_feature',
              'filter_value' => 'app:hub',
              'count' => 20,
            ),
            8 => 
            array (
              'name' => 'Photos',
              'url_param' => 'filters[theme_feature]=app:photos',
              'filter_name' => 'theme_feature',
              'filter_value' => 'app:photos',
              'count' => 37,
            ),
          ),
        ),
      ),
    ),
  ),
  'root_url' => 'https://www.webasyst.com/installer-store/',
);

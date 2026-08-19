<?php
// Copy to config.php and fill in real production values.
// NEVER commit config.php to a public repository.
return [
  'app_url' => 'https://www.example.co.uk',
  'business_name' => 'PC World Geek',
  'support_email' => 'support@example.co.uk',
  'support_phone' => '+44 XXXX XXXXXX',

  'db' => [
    'host' => 'localhost',
    'name' => 'pcworldgeek',
    'user' => 'DB_USER',
    'pass' => 'DB_PASSWORD',
    'charset' => 'utf8mb4'
  ],

  'stripe' => [
    'secret_key' => 'sk_live_REPLACE_ME',
    'publishable_key' => 'pk_live_REPLACE_ME',
    'webhook_secret' => 'whsec_REPLACE_ME',
    // Create these recurring/one-off Prices in Stripe and paste their IDs here.
    'prices' => [
      'monthly' => 'price_REPLACE_MONTHLY',
      'annual' => 'price_REPLACE_ANNUAL',
      'computer' => 'price_REPLACE_COMPUTER',
      'printer' => 'price_REPLACE_PRINTER',
      'wifi' => 'price_REPLACE_WIFI',
      'security' => 'price_REPLACE_SECURITY'
    ]
  ],

  'remote_support_url' => 'https://YOUR-REMOTE-SUPPORT-PROVIDER.example/session',
  'google_ads_conversion_id' => '',
  'google_ads_conversion_label' => ''
];

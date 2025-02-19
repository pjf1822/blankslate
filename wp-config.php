<?php
// ** MySQL settings ** //
define('DB_NAME', 'mjyhjqqxqg');
define('DB_USER', 'mjyhjqqxqg');
define('DB_PASSWORD', 'fNKmC7Ujs4');
define('DB_HOST', 'localhost');

// ** WordPress settings ** //
define('WP_HOME', 'http://yourdomain.com');
define('WP_SITEURL', 'http://yourdomain.com');

// Enable debugging for error logging
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

// Other WordPress settings
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY', 'your-auth-key');
define('SECURE_AUTH_KEY', 'your-secure-auth-key');
define('LOGGED_IN_KEY', 'your-logged-in-key');
define('NONCE_KEY', 'your-nonce-key');
define('AUTH_SALT', 'your-auth-salt');
define('SECURE_AUTH_SALT', 'your-secure-auth-salt');
define('LOGGED_IN_SALT', 'your-logged-in-salt');
define('NONCE_SALT', 'your-nonce-salt');

// Stop editing!
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * Configuration File
 */

// Application settings
define('APP_NAME', 'PHP MVC Template');
define('APP_VERSION', '1.0.0');
define('APP_ENV', 'development');

// Database settings (optional)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'php_mvc');
define('DB_PORT', 3306);

// App paths
define('APP_PATH', dirname(__DIR__));
define('PUBLIC_PATH', APP_PATH . '/public');
define('VIEWS_PATH', APP_PATH . '/app/views');
define('MODELS_PATH', APP_PATH . '/app/models');
define('CONTROLLERS_PATH', APP_PATH . '/app/controllers');

?>
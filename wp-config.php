<?php

/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 */

use Dotenv\Dotenv;
use Env\Env;
use WebTheory\WpCliUtil\WpCliUtil;

require_once __DIR__ . '/vendor/autoload.php';

Dotenv::createUnsafeImmutable(__DIR__)->load();

define('DB_NAME', Env::get('DB_NAME'));
define('DB_USER', Env::get('DB_USER'));
define('DB_PASSWORD', Env::get('DB_PASSWORD'));
define('DB_HOST', Env::get('DB_HOST'));
define('DB_CHARSET', Env::get('DB_CHARSET') ?? 'utf8');
define('DB_COLLATE', Env::get('DB_COLLATE') ?? '');

define('WP_HOME', Env::get('WP_HOME'));
define('WP_SITE_URL', Env::get('WP_SITE_URL'));

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/' . WpCliUtil::getInstallPath() . '/');
}

$table_prefix = Env::get('DB_TABLE_PREFIX') ?? 'wp_';

require_once ABSPATH . 'wp-settings.php';

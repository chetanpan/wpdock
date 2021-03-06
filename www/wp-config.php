<?php
/**
 * Local mods
 */
if ( file_exists( __DIR__ . '/local-config.php' ) ) {
	require __DIR__ . '/local-config.php';
}
if ( ! defined( 'DB_NAME' ) ) {
	define( 'DB_NAME', 'wordpress' );
}

if ( ! defined( 'DB_USER' ) ) {
	define( 'DB_USER', 'admin' );
}

if ( ! defined( 'DB_PASSWORD' ) ) {
	define( 'DB_PASSWORD', 'password' );
}

define( 'DB_HOST', $_SERVER["MYSQL_PORT_3306_TCP_ADDR"] );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
/** Disable Automatic core updates. */
define( 'WP_AUTO_UPDATE_CORE', false );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if ( ! defined( 'WPLANG' ) ) {
	define( 'WPLANG', '' );
}

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

if ( ! defined( 'SAVEQUERIES' ) ) {
	define( 'SAVEQUERIES', true );
}

if ( ! defined( 'JETPACK_DEV_DEBUG' ) ) {
	define( 'JETPACK_DEV_DEBUG', true );
}

/* Content Directory */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

/* Uncomment followings if you're using multisite */
/*define( 'MULTISITE', true );
define( 'SUNRISE', true );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
if ( ! defined( 'DOMAIN_CURRENT_SITE' ) ) {
	define( 'DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST'] );
}
if ( ! defined( 'SUBDOMAIN_INSTALL' ) ) {
	define( 'SUBDOMAIN_INSTALL', false );
}*/

define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

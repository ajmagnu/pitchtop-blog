<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '35c813cb2c');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'a8f42c41d050fd8158ad0f0df22532c46307420794defef4b4c36eadfea51c64');
define('SECURE_AUTH_KEY', '3bcdbbe6704419f7fb5b386c79d21ba9290907ec8db6a89ee88b1b3a1ec79b20');
define('LOGGED_IN_KEY', '2bb4dbf0e7eaafd9098fcad1bdf1c4c042b29030b0c54dbc2918d2ee0e65dc70');
define('NONCE_KEY', '11dfbb2960a4a3866855a32d51065ecc0af655b0a56ab8d48870a45c9a77c7aa');
define('AUTH_SALT', '1aec2ddd502352862738d547bd23898cf5fcce3ca16a593014ead38b343f0563');
define('SECURE_AUTH_SALT', '02db903bdca318068d3f69bec322546ade00b8691a00a37ef0779838e35ab419');
define('LOGGED_IN_SALT', 'd4d632d82c69b00112ad36dc4350c6fe019d78b123202c49d847687d5aaf6877');
define('NONCE_SALT', 'e92d31c511aae7a1b9eab79ef54e4d941200aed41a637baf00e2aa80726238f2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/opt/bitnami/apps/wordpress/htdocs/');
define('FTP_USER', 'bitnamiftp');
define('FTP_PASS', '0h4Ui2E4aDhJo0ZGx23GbfGvvNkOJ1SynjjL8psMuYNhzKwQ2F');
define('FTP_HOST', '127.0.0.1');
define('FTP_SSL', false);


<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'miennam24h');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'i*<hx]7rYw$Fp?baiY^ii4^N+Oc9aqfJ|q{:xoo`^,COvfik97j3OQ_Nhg~DIbh-');
define('SECURE_AUTH_KEY',  '*LLj-?|Szh9M<o`TTV6!eYWbZwFv?mmdxoeiGQBdk}xjIr^,k3^N?#rEYtr%TC6e');
define('LOGGED_IN_KEY',    '_s;^fM&lzi2Fct|S6*{ivY-Z,;e&XngM~)_~/PJ!Wmpf`kC5c;4f3M^/V!+1CJEi');
define('NONCE_KEY',        '`2-F7hD3{4Lj58hf2zG}^`1WbW2jq]Ww)!@Kk?<dqiu|2w7Wdv8z|(GUsl=Rn.#k');
define('AUTH_SALT',        '?Y2n%9H*hZeH:*oTGB(RVBa^Nt~Gd9;|Gjw_XcxozRwCv44AIud&eCiMEbZ^WX R');
define('SECURE_AUTH_SALT', '9g:ZzSJsD&^RQFsGCASBbe>tCBi3ClJD]^[{b+U!#IR^1_w ){;p&ew W56[s[r$');
define('LOGGED_IN_SALT',   '@_zL~%YuqhiOc|G=bQ tF4Sy2)3+Rz[x$j9qI)  sX/E-8E:P?m*e,<qW}8r2j@f');
define('NONCE_SALT',       ',(*:O6D;tfHuRoH/fLJm5IeZ,tQP]A21[VkIbD/PA#*q/VpTPwW)G5FUD;ECiFr|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'admin';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wp_db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'wp_user');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'wp_password');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eKb YnHd(HSdsz&/0EO3j+Kc7iKRHQ7jtYV.VN;A)t2&EKj/7~-ty|smg@vr5e|3');
define('SECURE_AUTH_KEY',  'W?Wzj$0}YE++]I+Gg!QAO+m{$+ry?L>FU)yN/4wug-J^R;-WZhYemwT#K-^dors.');
define('LOGGED_IN_KEY',    '}H,7B5qtWQQux/9&)v|zZQ5/fY-_|GoflAP:Sk-.S?JNg-Koo_x>!YUgB |*.=qK');
define('NONCE_KEY',        'roJM+1Hde--CFxx=%1{5O6C#TJkx=FofL^WoTk~&?(QK_6l8AIMi2IH3H@O@KrJo');
define('AUTH_SALT',        '@2]In,}bmaD>?pXLk{@C3|q+=dgY,|cMd}Qs>5#]~I@9X4#~A-t7P^9(t%dcuP]=');
define('SECURE_AUTH_SALT', 'I< St~q5J<G,,4c4_S;5P@:9E<;]44Y@8s $eL-`.46[XUf$dx|AU|mB>M(V+Me ');
define('LOGGED_IN_SALT',   '$Fpi;GbY q?Z[Nk{:-X!:p1 o=]Y@9MgOl(|8Tvnh@Bt&V<)k}$>+_yj]]iE1$*B');
define('NONCE_SALT',       'y0!Z`wM=LRA1S+hu`P #<|+n|fFI1Z1olSa6# @a6?aEaHYNM_$!,r|vKBsDdABJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'main';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

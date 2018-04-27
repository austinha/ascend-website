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
define('DB_NAME', 'letsascend_org');

/** MySQL database username */
define('DB_USER', 'letsascendorg');

/** MySQL database password */
define('DB_PASSWORD', 'xL4d3FYY');

/** MySQL hostname */
define('DB_HOST', 'mysql.letsascend.org');

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
define('AUTH_KEY',         'f;7B6eLwW+S*FW#l#r@;h::T&Uvv6Rs)Zx_;g$hFnF$!gW3czTfy5ngyLe6SqcJc');
define('SECURE_AUTH_KEY',  'Id5kV#wFRa2ByfYxjDZX)keu1B_~|JAGU/l~B!f:zAaeUCYYH%_^Z0HHQ^*n|ek7');
define('LOGGED_IN_KEY',    'tC*/8s"j!11f"8i|i;zj"rUFhvlED"D5?0a#ePbzaUnbfkDFnjjJh4^(Y_yTt(Yu');
define('NONCE_KEY',        'KPw^lhHOa;bhj&YXH61hco5SGFYzguo5PI071Y3"$_I"&iawG?ZNsu"9Q^`uZSwo');
define('AUTH_SALT',        'Ea?JiW64G5JF?/c/W0xz$uhdB41HJC"*%cCNm!/2`WvbmpJ4*vTYn%kS%Y6r78FI');
define('SECURE_AUTH_SALT', '"/@C:CdW9XQE"5CBi!RnLYc;VG3e%B&rJ_so!P;:MK?1?JCh5d:Ar7$2$t"Z3R~k');
define('LOGGED_IN_SALT',   '#Op!d|Cxdbn$8|R~YY*`puc__uX!#19+1?%kEIzJTc;jkxs#h`bWbvaNfjEfWGQT');
define('NONCE_SALT',       't81f2#LrdgzpVFkvv9?++:KV"~X(ud457FmsRjJM2fj@ny&%~5klsvP^Omp#2Gf:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_p6zh34_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


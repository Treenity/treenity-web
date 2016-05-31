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
	define('DB_NAME', 'treenity-web');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
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
define('AUTH_KEY',         '];5D,{|S|?.oGvur.It! ~|3WgGl%|mV},#)QL>[r(-|1kv:=U5/-W{CrOWi+>9N');
define('SECURE_AUTH_KEY',  'mWd,Nb.f3sS|(.IHeZpeV6^13=Q.s8>+#j1.?a6n qH7TMDz|k qKx>KY]@Y3Kf+');
define('LOGGED_IN_KEY',    '[=gp^%B.-.Z!|ph]bLa&izC)|a5M{Or_uF=(nvZ;0(Z;hRL8L|seL*G=,gI&Vbk=');
define('NONCE_KEY',        '6s%G2Aj?%ZCdRB24|fG<mib$S[<;$L5 kZyPrP6%F|]+mKu95$QE&@Z<O+ZdO$Ul');
define('AUTH_SALT',        '*6X/<O3]+#X-#7#H_hg>- Ahr)|72::_5<VCw8=`,p5HfmQ`Bw#17P]|F;}4T+p-');
define('SECURE_AUTH_SALT', 'D}#X^w)Yy $%u-J`W^aa-`.)*EM<g5&-@oPgErlegP}PQX6.[S+M7.G$wp)-R#0n');
define('LOGGED_IN_SALT',   '8VKol@X{m=mr{8s2}L9i|h/e-;^#&m#Hgc$KS3-/.8j5LcAc*5**b`41rHUY}D`H');
define('NONCE_SALT',       'Df`Gsk]65o+<--Q<UhtGWE*}*N$ZL.Q+QniU~K:X7G2j0JKhOa7hF86|-Mp{IS5l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/app');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/app');
}


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

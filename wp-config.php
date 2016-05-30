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
define('AUTH_KEY',         'H{(@p*^P;GV9@t7D._+B[+k-<QG:u-|%t#Wf{SMq]hzj/+A9CKU$Y+NZQtD*-vgJ');
define('SECURE_AUTH_KEY',  '8X.sHC,g/7|/RICUu#kPwry8 p8f)i7<rl`2r%V&7uw~|3NPBzoF|G(0K#[NF.sI');
define('LOGGED_IN_KEY',    '1o `~x#{eh12q[<3#L_F}$7}?}<AkY&.,PQ^swX+WBr2l(t$FOx9LS+)QQw:&nCH');
define('NONCE_KEY',        'xF/-^wWHpnyiI-A0:fOE{$zo(X-lJe%Gx4lv88[-ir5q#a7xRFjd$K*qDk[zb9Y*');
define('AUTH_SALT',        'RBItWw`6He3bs9jV %OiEhg f6Woe8]`F;[4<`9b|-_PXeNDxTNNlT92Ij](xvvs');
define('SECURE_AUTH_SALT', 'V2)+$Y+-;uk&<K&+M~Ap%CA-A3{x;#FV1|]ykiAln~~chp(<Mj>o1y *jfL[M~qz');
define('LOGGED_IN_SALT',   'Q`r0LG-GDvfge;3+6c;TA9oyvv>ch&o9p@NJ9~|gJ5WtTF[^5gnXq3&9hZV%Mmg|');
define('NONCE_SALT',       '+G-H7d`L?P>wI`>p+IU(uKoeFlEd8c?I,%HZ-WFcGcb>,sV<@*6IK#ZD3v 3u~m#');

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
define('WPLANG', '');


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

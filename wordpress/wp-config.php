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
define('DB_NAME', 'wpcreatethemefromscratch');

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
define('AUTH_KEY',         '|bC*+AG!;lp#$eW~pc,A}Ja:D%_ n|_-8C7;0*aGmt;>wIV(~LGjRJk>,Ej=7gRp');
define('SECURE_AUTH_KEY',  'xAy:xSHh&ujn]<D@Ky4M$*F_E-LWcW=>GaBlT]!-OAZ9nI1!a -u=+B^$W;B+C|/');
define('LOGGED_IN_KEY',    'XRUL$pJBKn(|1Ip.X@Qt1+kt3ee,T4r;k@c-<Vzob/l;vc*n-uHNxt|0~tU(0@R&');
define('NONCE_KEY',        '2jB~qBh2DFnV.^jNoys?(pPNW3:wZ50=k)W;,gmSAf;d-C.garNy/u>|k<y|>txB');
define('AUTH_SALT',        'Y&Y bOxY,V6RO/MJ=}E0:aq]=Y6<mq0b=>>-6&F@%d++nNg_.xmr$7]JEOp0fz(*');
define('SECURE_AUTH_SALT', '%|]4CU7;0|aZ/P3nCIl^=9h-P4|*NInS0g2{^B<>7/ykvvc$?r$:#Jrl-E=+KTJ&');
define('LOGGED_IN_SALT',   'qG^*N?DNZPCkPOrt`VuAzwSZJw%j1:#Yc.+VA+4xM;[+;@#*z?8{5)lAL<9$L+pU');
define('NONCE_SALT',       ';)U|j{)aIl4+v^W3u`C-GaE=]7,k9yWq-C+P#|0u>l}iwX%s+01^r`hO:y+k9T:s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_arr_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

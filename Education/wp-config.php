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

define('WP_HOME','http://developerweb.pro/Education/');
define('WP_SITEURL','http://developerweb.pro/Education/');
// define('DB_NAME', 'giasuquocte_vn');
define('DB_NAME', 'education');

/** MySQL database username */
// define('DB_USER', 'giasuquocte_vn');
define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'giasuquoctevn');
define('DB_PASSWORD', '');

/** MySQL hostname */
// define('DB_HOST', 'giasuquocte.vn');
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
define('AUTH_KEY',         'kLb M^T/0v6yVj:@&GYGkiCtsztni* fTp.x8$dGo9+V:+<5+RqG%9|u!nunr5]F');
define('SECURE_AUTH_KEY',  'H[y~X(nX@ruFi{T9irx_W#wmvg~x~O05yuWz2/5kT6hY&!^Qw.I5`E3uqN_VD[,d');
define('LOGGED_IN_KEY',    'y=>LoNw5oJ,I]TP.IRNF[]$Z,vp^4Q/7Yd?EF3=AZcIG^+427-bR*u<>73bg]?Bt');
define('NONCE_KEY',        '.?&P)k9mDb14$[6u!R=kp*jN);|Dpi,tF;}|A3Kw3{W3 ~9~SX[xa>jB?iQMmY<R');
define('AUTH_SALT',        'vecC*646*fcqo*pu+<~!Sl{sQ,j,aw<bEp>6}<l[tsP87leQFW(N2?c/T9ZS<X$/');
define('SECURE_AUTH_SALT', 'rarr(X?S,SoSsX$*1]d[!c+)B`x}aU!b_0=Kbk#<6isaFEjC1s@fD#aPweY3w{*%');
define('LOGGED_IN_SALT',   'I[H+BqHVcD5DU%BMa}LAP5%2hf)dktJ<X479NeJx?)7(7OdOgPcG!A3hcv$^k j{');
define('NONCE_SALT',       '2lEJ%Hz&BI=UdA=QgQ[!y5@`egwxTo#%Fhm]],aHO7-<k[0mV5TY19zw~OzU}GW#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

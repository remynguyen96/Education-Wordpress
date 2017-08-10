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

// define('WP_HOME', 'http://192.168.1.105/goft3');
// define('WP_SITEURL', 'http://192.168.1.105/goft3');
define('DB_NAME', 'golf3');

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
define('AUTH_KEY',         'p&#o7mOv+ G=PZ#yh5!r[p7Lbb2J8,n}1^2FV3X&d$rDa++vo3sLf@.YFA#@}vE9');
define('SECURE_AUTH_KEY',  '8ftF3$TNngB=KelFFLRO/?j~Jx](t 2PARRv*uOD79D+t4yfK&c;xdV9iYF-a.>(');
define('LOGGED_IN_KEY',    'Gj.elQ?I6|^b:?=YH2~gK:7M]M]Ra+{,)-_N`V,RF9%n0WF$1m+ly&RV~18](:lC');
define('NONCE_KEY',        '+sQI1vn17-[6D^/3<6h7V:@7o_fb)w(TCfvQbNns*sx}9@K7Dx#W&v_0j_q<#$g[');
define('AUTH_SALT',        'e7`^*jfr^8(.lmW^E:gfp10%+2BVEX&:(6nlfu}x-UA<q7tJ44)K}=7 G`x~CSaT');
define('SECURE_AUTH_SALT', '9~pxMj~g6-A.1qTK`YX4kUR+~k .0r+QE1o*LoRt_^ITc-<=Yk#gUC%C8p;|aQ5;');
define('LOGGED_IN_SALT',   'NOT]i|u)*yeavlKOXoCWeGU<(8EX>w?+=!/Z-7CgBvzv-%wfM]Ht?/`Va{Dc%r(L');
define('NONCE_SALT',       'l+(3]EbP174y+Sf@C?^a]{gScq9&e (1B0$Tok7>),X6O*l;?P?AuDG?R@rX4S_r');

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

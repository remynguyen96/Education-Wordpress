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
define('WP_HOME','http://developerweb.pro/Car');
define('WP_SITEURL','http://developerweb.pro/Car/');
define('DB_NAME', 'car');

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
define('AUTH_KEY',         '@<W<VS.ma#=_q6@T?MV$$yzafap- khM+>Obg#GZ`6Vo&>D9{,%[[PmGDy<FJ08J');
define('SECURE_AUTH_KEY',  '}y?-]YKQ[)mw$p7Gp-.7qNxypV*6*%@Q@JeoS/@{WM;K(B!99~LKGOL}^ccZ>3s0');
define('LOGGED_IN_KEY',    'ZE?^x,82*kyB*3OS>1m5]=yup(@[^RI^+]%7zWq[[(DAN7gTcxN-`<{4ruR`4f<z');
define('NONCE_KEY',        't. <goYT*rFX]UE2<)bb}HFp+4+R ^o{52j,&,:H;bQ@`K9UX`]FP<nRWB@Fmh#v');
define('AUTH_SALT',        '=&yT$|qUj3YosTp-t-5_Hd%B)8#LeT_-a<=CUD}$))jK|`7^YqfxtS&a_a$;q,#9');
define('SECURE_AUTH_SALT', 'P/N?A[/u&JItx=>?+H4S2bL*DQpgQe w:4hm!]D]kR[lFv]vl|LRVp,&zsAR|uzk');
define('LOGGED_IN_SALT',   'ZPV +W*oVzo8OV0!=84!q{S-Hdx_-Z$W@$iV4^?cGg6O?X*E[af^uKHFNyiScx1N');
define('NONCE_SALT',       'a5 =4=.O|$pZ5_s*1]V(QaxN?^g>RDMA&$4|Qtziz<MP^A:mmbC,hn$$pPgq=(sY');

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

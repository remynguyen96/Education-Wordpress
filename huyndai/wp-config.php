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
define("WP_HOME","http://developerweb.pro/huyndai");
define("WP_SITEURL","http://developerweb.pro/huyndai");
define('DB_NAME', 'hyundai');

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
define('AUTH_KEY',         '5i<[HTKUK@~O{<^ n!,Wo%7#E[Y8)&h~F#JqM&vo)*R9w93$aedYsEc3q6>F^Mr3');
define('SECURE_AUTH_KEY',  '4|En^Mmxa}|3<CvVJ-ou)*d~LyR!d?B0R0fu1UE2P@_<a4lHw F(+N>:K.L)m9*<');
define('LOGGED_IN_KEY',    '4zWSBQLf.Y*4Ndy9,#OhCm10j{vzS^<6l^]1%)uCQ#zVoF4;bjs@h/Qw^OTe(($G');
define('NONCE_KEY',        ';[b:dT6|6ZTG3]E|(.pJCAup UIpb**y<Hsr9H:?gFj!HMu_eR1Z9063J :eCL~Y');
define('AUTH_SALT',        'h#)/9ulQU%X5Kh]}+f0s<Ape=1n94C64##OXB9q+!2J&g&o8I^X3h.S[4]1(V}G(');
define('SECURE_AUTH_SALT', 'YTC)w=QKcjM=V8xo&fEFfWfwtu !b{LcLD@m2YB8[TQ_vwU>@4!$n7$,Jd~3}r.~');
define('LOGGED_IN_SALT',   'v9C9WN1HIsi-+Qo<qan!&@1wQZ*)I$G) [*L)5ECNY5R[@UBhD&5gO{hZ.)oVKWu');
define('NONCE_SALT',       '^oGD#S,wI:`VphsY>K+M~vb.=JGDI]p2JQK.NQ^xvxe2[}+_sB{-o#jeg7A;1NGA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hy_';

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

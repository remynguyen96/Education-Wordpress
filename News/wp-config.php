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
define('DB_NAME', 'entertainment');

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
define('AUTH_KEY',         '|Vtx@$L3%!Qi4TQ+Oh.p,ft0+aO?fL}-e-Q*6cF!%=wF1(]^ .%~zT_TxW[z9*ul');
define('SECURE_AUTH_KEY',  '3LZov>QO;kraU3D`6%h4Li:}%3^<q|BZ8KOe|OR:I3.J]p9xcv7;3^SDjyG$6*@v');
define('LOGGED_IN_KEY',    'iZ_b/~i[Z]CtvTZ&jT9J:6)]THM.V4%0Yu.ER`C7:stUgS%3J8|f6gV_H~O6%C/K');
define('NONCE_KEY',        'XJYE0]%J(t>AcEI#Q,muUl x[PW|$i346Z8Q<n~OE/Wp;P6%_jp!CGX:)TeN#(?7');
define('AUTH_SALT',        '*g43Q|:Oxi1SVL64|[y0d-QQ5tMo=T?dmv%Of_xSG6(e^E)bRL:(bv,}gM/fTEmS');
define('SECURE_AUTH_SALT', '12YGdhH0T1j/iaH>HuD M-3e4>4OJ#mBYL$Mbotm;wXP~V;o}~`Ffi1iI$LZk=$0');
define('LOGGED_IN_SALT',   'Gdx.P38.-8N9(fsd_,*`q+M8,i,O*c2(|{ebh^fA2$}gZQwJpEq#)r6ZAR({i03z');
define('NONCE_SALT',       'M4i5|NPjvus@SE7m;V,N~cqvM$L];(]<!j^(B*Iyd(MvI:GGsmRpVn~t)@@i):[f');

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

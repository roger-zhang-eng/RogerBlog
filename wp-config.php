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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'rogerz');

/** MySQL database password */
define('DB_PASSWORD', '88888888');

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
define('AUTH_KEY',         'SZ:ZUo&*YPN.rhytbo/rj^Sy2PJ!y`Q.l1;l*m|zfr&*8dgySa{8Mo*-.tCA1E.d');
define('SECURE_AUTH_KEY',  '@YS>)2&uOW&U3s2C8M$E %^+d)t=f):6n/_t|7> ru~^&DTy;yD88fQ0pHx{4H;<');
define('LOGGED_IN_KEY',    'wa[&|cnO^Qwh{[dIA3[*<(6L_<56FZV)Vf4^kn?(j}<pF[,ni7U.Ctj(,(xt^w-u');
define('NONCE_KEY',        'GiH;[va}Z+R>Q+*6`A%;(P((Nh)VyGrWZ[hJC/4?OSf7@g9{?at}2xA4c|QNw|K&');
define('AUTH_SALT',        '3g~P5bzbDts+ddh*hc~75+fdX0|A[1oPu>vDiTeV845qMb1MP]r+#PGkY(~zIZj:');
define('SECURE_AUTH_SALT', ':SX%eDSjAvYR!r$w,fo4|j|$fcZE lGR?+EdeC*eq_sUMW$$AixXAZ5ew}/-&$LR');
define('LOGGED_IN_SALT',   '6/~+M^gEeug}]ME@In!<I{MblFzs;CSqXAX3J^4hmykiHF/dKOx<2rSxY9zQ&Y/d');
define('NONCE_SALT',       'rkkK}c};CLc:w>|pYF&z`9@mcvm08%pqh8]#VTXAMAcj+#A{ zpQ$gmlPG3:Cg-a');

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

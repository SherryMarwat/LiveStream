<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'livestream_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vmNK$cV|YCTJ;#B8_`pwON2j]cf5(<gV.RWd?37[5A5;|P7LjPiVpttT-ZHqE}]+' );
define( 'SECURE_AUTH_KEY',  'LJ6*HESxD>m#ppM)PaT/x-Y{kOZPe3H5i01dCR[4+9kUu(u_)7Maag;nm);!@W)w' );
define( 'LOGGED_IN_KEY',    'Zk,:A<h^$#|!{^JU*-_kz4V;ebl?~{WV<iA/YfS! XC-8$Y6ic%/,^Le0(dBd]i=' );
define( 'NONCE_KEY',        'AKx?2.Ivep;BFf!W7r l}|hVW@.F{qY#ovJF(^3lVqW4DJU$4:<hOt_#<-^E1X9d' );
define( 'AUTH_SALT',        'CG_1,sXY-Buy&s|i~ctQ@:rB9ae}iqn~H L>FIm^2UCt%)F ~Y{(.D,_$.5Kgd}#' );
define( 'SECURE_AUTH_SALT', '%7/C+h6IHMgJX^=0^9xIaYZ0m.a[|R>^!DA$|PJ-F0m:_h 6k;rpTVl6h*ukX3&q' );
define( 'LOGGED_IN_SALT',   'DS[Ey;mx%hH%?hu9h<[W88q`r?7Jq[CBC/jH@qg[7f=!B&2s(zo$;CP9c2W&0<5G' );
define( 'NONCE_SALT',       'WYi9x4kJzu)t?6_BFsFr~0Rh0xl;{  26a-W.vFz`-CKW@*K.WuK@Qlzy=>ut&IT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

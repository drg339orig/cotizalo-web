<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u299553167_u6YfB' );

/** Database username */
define( 'DB_USER', 'u299553167_oHuGc' );

/** Database password */
define( 'DB_PASSWORD', '4ny7q7lzrG' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'RY_Cd{h1/rd]aCYh,ry9-.`FeeGVJ{vwi}/$*6N_2y0dP-y-0wmaA{([CzI!e}-{' );
define( 'SECURE_AUTH_KEY',   '9P!~Y/2VvDLfD 76!f,TwJ5]42)0.Oy(beTV8{$C&njI7nD${d:g6VLVR1rGHtu9' );
define( 'LOGGED_IN_KEY',     'i#M_^y4s=EA7h5<PrY0 r&O5uQcZ1,[:I,AonB(B]=F>sekri6:93%*aJaN,(Zk0' );
define( 'NONCE_KEY',         'gH$FerRdeT-l7jFnE{jJx:^4=idp=sS7dg[>?+7 z!2c*f5%/)7::^)CPo)I}X+_' );
define( 'AUTH_SALT',         'jts b:!WX%P+in.B#@>B$JT_S?CGIfU=n#XlqCCj>lA%UsAT=KcldGAkj[ji<o2&' );
define( 'SECURE_AUTH_SALT',  'r,i%EA>A],i)=z7_$BG)(LQVf8$~@hT^Vu5XKy`fgm{?TZenVT,kYAR;)0.UAyZK' );
define( 'LOGGED_IN_SALT',    '*-B7VPClIknF^>77.c<PGW`NAS-#/AiIvzuY8m;3<2!#uA!NMe%a8<tqPjv*]M%w' );
define( 'NONCE_SALT',        '`|e++8[-e%8Qh0:9e/cd9h^VKq)s10I~H/_Oka<4yp;BqUCEChi2$mb-WCJiznV=' );
define( 'WP_CACHE_KEY_SALT', 'nBw6a&.GI)p HjGpA[)a!4JN~$T*>JpL%gpH*y|`iG[/3,x]=M~7.5(8J)9Th)Ce' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'f4625a25838d5026129f08919b324ad6' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

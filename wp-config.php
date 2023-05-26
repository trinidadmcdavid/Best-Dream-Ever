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
define( 'DB_NAME', 'best-dream-ever' );

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
define( 'AUTH_KEY',         '9wSCTL_YK.|qP3b D4:~6d]b+dNk*6)Z#nus0Y>KDf4KX$2I*z9MML6^v8Ob]yQK' );
define( 'SECURE_AUTH_KEY',  'ojy#2z;xvSRm$klQ)gM6(BFDm>LrsZ4joERmE,.mTefeoPQ8 ~9zoPY1S4_WP&g:' );
define( 'LOGGED_IN_KEY',    '%%Fs6^+&,EFBWkqh`G#a!1jCD~u%N)rlU*.*L8*}3|~&xG&STYW]%l?Qyo/W}|r!' );
define( 'NONCE_KEY',        'd[gO`6zo|~YhD2%$vo[KXsoOTqqb^AlcN%F]ik2*xSE-];*>7=awVe*/,?jp9b+z' );
define( 'AUTH_SALT',        '8g,C~|N#7fB1]<*X^X)zeP=1!icGLS;ih):gIv:>Sc*U|!{9fE@+~VA`n2IjGu]2' );
define( 'SECURE_AUTH_SALT', 'B,@[GY?G)xI5P_b]sB0^2ZHF>Y`&@g2=mjqWaZ[WTI@P,p7J^{9|M`A,@CP?B#q;' );
define( 'LOGGED_IN_SALT',   'GcQC4sj@6Q2M}vo?$Xb`+P#o|UA(_8yD#J7(Xta.V8- LCmG1 KBnUFD4j7l>_b6' );
define( 'NONCE_SALT',       'TEGLrMrx1fE0Yl`+?Nz5K.7jH{6Kjh3).NoDwDdZ:u|xmT, 59k&}aP0|ul)2p|v' );

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

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
define( 'DB_NAME', 'labb2' );

/** Database username */
define( 'DB_USER', 'mars' );

/** Database password */
define( 'DB_PASSWORD', 'Hernandez6' );

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
define( 'AUTH_KEY',         'al#1Ft1qs6RuN`ABdm.^~+EJN0im]BFhPiC1fIHaj7-zItVCjp_IW48h.&_#JJV*' );
define( 'SECURE_AUTH_KEY',  'tiT#r_WxjM)Q&,p,{nYA/W>?Gx%xVk^AL~vz8XB^xA=|D#&]g+opW3EQHrp>F6:_' );
define( 'LOGGED_IN_KEY',    '~<?7!sKF5Y~896*X3`B)y8n|D zE<eceYus:K_G6<K{egoKwJ?DFOL5w%KOrgr84' );
define( 'NONCE_KEY',        ':W#Sl}UgSTB]T>fcsGlC!q$Qda>$0<mtdj3yZNV5`^#>oXXLSs/WzR379MkKN11v' );
define( 'AUTH_SALT',        'W(7ja)6%;P &]= v`ugG~HL.VE{LdsW&Xk@lP>G%)H8*$H|6}x!Gz2~W(hSm&jHE' );
define( 'SECURE_AUTH_SALT', '}plZ{F|=eA^|.ozwH+>;6(WpModWME~j7VG(gmFk3/C5a7S[;^E4Jn,%RDFkB$Iy' );
define( 'LOGGED_IN_SALT',   ';?*3uM`jrJXL/Yg;qQ}2>lm_cz&n=s;[Mjx]SyC]|g/bDi-hP`Rs^UmF#k~Kv<}+' );
define( 'NONCE_SALT',       '5z!G<$@iKQbjtp~4E[R=<n]8D<yTW$G;S<C,j07Cy1f1I++oy%t[bHcRF{>:-:Xu' );

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

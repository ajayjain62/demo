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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'amx_eoaqVyLKZ]/X$POn;+3n97|+X.8d&Lf<E?+(8UXiZZQ)<ld(V5[^NTVxb~|8' );
define( 'SECURE_AUTH_KEY',  'uNlb`FM6w2v}7/5a_Xuq$SdjqH{ERY0Y7%7msbK-URhM~KA,&Kp~*2HT!qoo^>H9' );
define( 'LOGGED_IN_KEY',    '4/z]i+-Ecn-lc|Cw?T*hKws%]Z!t!9r+f4AaTVvl)Zb^WK;|B8iZC<.__PWRsH*n' );
define( 'NONCE_KEY',        'yHQCb0||l4yr!$5e-ZMLr//T `TIP0$#Ou1C?9uKk#`($eF1Yw*?-]Qwf#6Gyn[O' );
define( 'AUTH_SALT',        'pR~eed$2<340DXe0KSO Zo>iSc/2NUVRUM99=K}DQG)Dd1@AT/z i5%B:_?uAB]7' );
define( 'SECURE_AUTH_SALT', 'HkJ-Y20oAG0ynQsC3i]5?<iWQs.WXU3,Pl%]c0kALEpa2nW)&:~24r0C <[`;4DX' );
define( 'LOGGED_IN_SALT',   'p|Ndi|xcr_GE=CFOnbkdsX{|9I(GK7#=*)A78:nR0!c$#]Tmp}ubYz@Qm/w$Cvsi' );
define( 'NONCE_SALT',       '-MKB7Ih|x%!k_q6`rUOzQkL#Wi`,h5`*7>816G/I5p4{yQK0LE2jH*%>%J{V{(K-' );

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

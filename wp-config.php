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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp6' );

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
define( 'AUTH_KEY',         'YR%8.>:-OTagT6W /J?Qtl@jSau6ng[.lSx24(&FOH/FMDP+&%(7 `TSjnt*i`%w' );
define( 'SECURE_AUTH_KEY',  'S~.2dKO!38Ej+084E)|+L)>=|UoZKOgZn)}m4+@8gWM><mU+:].d)#mptN~[S83;' );
define( 'LOGGED_IN_KEY',    '.fqx[AT@_$>#,<fQ&b}ZtZr+6g7XuYemp5~1V+d}*(T+(eQ.DL@:c7r(zhP.2bX~' );
define( 'NONCE_KEY',        '<vZ.kh-xP=#^#[NDmn_Ok/Bwx`{YR4$#,]KbB%4aWM$10/nT.D&T40NX!V!z?q/e' );
define( 'AUTH_SALT',        ']N#X^;27j(kL;4M6^LTM;b)F&$&vz(o@RbzE0k&sN>`T>F_g0_-BNy:ECk`d{MoQ' );
define( 'SECURE_AUTH_SALT', '[<U1ms2F@35Uw*EL)E[z<&t{[FHX%rYA(9k[IQr1Nh$C0a?v65]~T`5M_KaNSuc:' );
define( 'LOGGED_IN_SALT',   '8W+(FQ2P[$x8W-1k<cj!*,h7ziIeRwW`ID8a;.e^v#,wRQ<;E+KK$2_rrsk]:/wq' );
define( 'NONCE_SALT',       'egp*zDRd+[bY^|>0M}!|RH_9mYF_@vE}15V ~@AId56H_1:+5m0#_k+M^`T]#!eH' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

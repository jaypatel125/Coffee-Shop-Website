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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1S@zo}9zP__ (bdPOK!I]7:r{?G*zpP1*odL%A4@VPg=<Y-i7IO#} vn+eJ3NOHK' );
define( 'SECURE_AUTH_KEY',  'DbA%U!>~iBK7)7[$>O`(2?$0|R,@%|kC/#R#4F<Xu2I+ >]0&P>`Z@ClBVJ9Z)Ol' );
define( 'LOGGED_IN_KEY',    'Fe{4_F+zJs_`[V[.wN3)-EKyBz4.eNrPn P,4G;AE.ax0a}WO4).O!<WB#&$h?uL' );
define( 'NONCE_KEY',        '0!k(G$HJ1[aSt#x,YFlq?d<OkMjRfr=^XF*#rkrdbX%%SShVv6~1rtC<}6.i K>G' );
define( 'AUTH_SALT',        'tt`t=D8VXwy|`J2srk<bheSzUI@Nr-(SetaIWJtM_/2A#vLfXvnU:w*; qN&)M{U' );
define( 'SECURE_AUTH_SALT', 'E>IN@>}k@af$kWjP(pqXkdW23y{#Jl]:5}h4V=FRn;NDuO@GxQ[jI{:KsE$G~EO}' );
define( 'LOGGED_IN_SALT',   '2#?/?3K+YP<78Bz2&.k[30yx2X.>J*!@Z05$/f-#ztth|1O-LYeoyHJ^Q#i.]o>,' );
define( 'NONCE_SALT',       '=C=?O^6~.{Zz5fEzf^*Sfg;Kt#vmCG65O(J]}pun/D{/6UUG!4bI8wp65coH72/<' );

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

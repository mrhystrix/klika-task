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
define( 'DB_NAME', 'klika-task' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' <8u$@PGx{ezP^({#Kp;tni@rN[38Q=b~Qp)v#_&vXe;gsfTP+:ke|#g4;[IAW{C' );
define( 'SECURE_AUTH_KEY',  'P ip0MSeJir:Lpru[X<lb`x|AZrTta&VHcYH7<<e!tF!p|^k=`{#A>0tlBv@kP*7' );
define( 'LOGGED_IN_KEY',    'G|tgDdMXq(3U]Uh5r6.G<F2.g9wnLQHy:d|-n5]do)<#Jvx{^dW7,jxCO$aXWr4%' );
define( 'NONCE_KEY',        '.GsM.VhE*Kwqrf~:<t 7VyId4z=??@+g2Zwc6dQ^oUv|$o8|5J6Ln=0Fwe3=^zdA' );
define( 'AUTH_SALT',        '_ ;R|c4o_*qfWoh8.5dJ=V0lq$2GNJ5!!gQC_jv%BIY*w=o&W3D{zj5Ff+5byN(c' );
define( 'SECURE_AUTH_SALT', '38MR}wy6$v?i+HNTdMTuMv$AUcF]Y.!k;S,CAk!RUz[Vcf#x2H:8}TY^(b-*Rr>}' );
define( 'LOGGED_IN_SALT',   'F-b#R;sH6EzYBROj5c1S~x_Y<inC:2%`=3!S|P|+:=MGXlyq]Gr-hL`c[{-!SmQ ' );
define( 'NONCE_SALT',       'tx:vv%y#^?EabiAW%LCxTTZDm_(vY*|*p%>X3K<M%jjFEU)9d*|LOqqpR`tgNs`B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

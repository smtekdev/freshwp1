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
define( 'DB_NAME', 'freshwp1' );

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
define( 'AUTH_KEY',         '.L:=IJMVN;:({{WL<ETuj`ZA&hg?Yl+6@|&7gntA=N-`/b=SmLzsx{d]5V=Txy|&' );
define( 'SECURE_AUTH_KEY',  'Sp~saj+ffrB&V+&@{ g~p)a/hT=^m4s347;X0_t)uPCB|C.,O<h4kA9Nr)S/a]7p' );
define( 'LOGGED_IN_KEY',    '5CMEM?{;q&uiK9,QnyN@vx<C6$Ji1-pIVX6%J<X])/gTlH-<]1 |aPBjt0P`cqC|' );
define( 'NONCE_KEY',        'C?dW4~||0dgx _AOsiq*hJ=]FgRmY8GDv`lWmHuXu&sF>:1%i`dO95|M 3u~0bx$' );
define( 'AUTH_SALT',        'f(_?7uuFcZ-A9}|kBg`T;Ev`B7_<f=nO&xV]CV-):[8>GSBgu[O_=|&*=Fix:sbi' );
define( 'SECURE_AUTH_SALT', 'TV*i(iwMOB01P&O@`Lk9OES*Qn--[ !4`If?8YynxpuI?@cpeRF/|KOBXC.b6nPm' );
define( 'LOGGED_IN_SALT',   '<vR.;aJFiYoPM$LG<4|+j!KiH7|<oq5,j!E)_BGVQ(;TF@_c6r#sG::)AHn${G;8' );
define( 'NONCE_SALT',       'Jq7G9:CQ_ #sDhJH9gyzO#0=WQ~F~B9m$<hd{Q.,1QB0>$o9VIlVfc9h+<T1*y3:' );

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

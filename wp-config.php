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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_idm250_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '{p6nF{vT;RuXP B}[f|c${[t<qMga`?^uzNhjDFrBzF~mi9jg@@#&%$vJKAJGsx_' );
define( 'SECURE_AUTH_KEY',  '2au9!.i{H|;MjTLFwECi=fN2h>d<8n!/]}wz6;{.-/*/kh6x( +bEf^UY~4fhN+>' );
define( 'LOGGED_IN_KEY',    '.)TS{<DAt28(|*#?M.|wWNage24B=(nfF3NX&<:wg&82fGe1:B6}V0b,hPLO3CIl' );
define( 'NONCE_KEY',        ':p{}L6d`13!Fv[M]F+Y.r+$HM&(4PiB&0.*wih7^5c3,6>g.k!&@FUH%|Bvv1900' );
define( 'AUTH_SALT',        'C&]6sY]C%F*GL2]=qG<n9tDzBRI7O!@`fc9RR^aobu<.~sX))YnEK^IDg;=>?XS{' );
define( 'SECURE_AUTH_SALT', '-6Yb^Z2X.z-=FZnsGP98>YF#oiBH87:I*hl<,oa%vt)r59gJttfq]#tuZ1rz,l,^' );
define( 'LOGGED_IN_SALT',   'F2bbBbQB$h~!!Si%#+nNy.E4 A=Ea;z|lU}W(I#s%;%Xvgf/de$>%EmJ(&_t:B(D' );
define( 'NONCE_SALT',       'Aa-EVj`HW@Q3ODHo`Y|~hm9:`]/f%eFMYZ #C6_ev<sHaAc1sWe`E$Z3Dk#d8cgF' );

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

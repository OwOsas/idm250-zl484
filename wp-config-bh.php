<?php
/**
 * The base configuration for WordPress
 *
 * For Blue Host
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sylarlic_idm-250' );

/** MySQL database username */
define( 'DB_USER', 'sylarlic_idm-250' );

/** MySQL database password */
define( 'DB_PASSWORD', '7qRHgjmEcHYx3sy' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Qe3=g`vI^LOy >v#mn3qV!&2 X_cj%$$X#WB:&MgAz[dIvi?|]~FS`I2QU]cTUW#' );
define( 'SECURE_AUTH_KEY',  'WSotfZ~!cQ@q]$L&OAJ<GMHHNIs%t{l`ii:qE/@k>U2MVIEy;)0*rf_L~lZS:2X3' );
define( 'LOGGED_IN_KEY',    '9dqTXlgN-s6Q#C4+UqJ^?wq,PTC.{+ND@m_uq^_d;Iyf6#0ETw:c[8,Ctm&yi?qg' );
define( 'NONCE_KEY',        'P*x_Jd}0^tnYC)I-96Y#pF`vp=)O:?m/A1MY-mvhh(z HR u!`FIph{^r]9 DB3x' );
define( 'AUTH_SALT',        'wb1~]HQgif)uYcd2!D|63/V-,BTq=YW=_l>!?*BudUkULE)M0QKWC6x#pn+,MB,u' );
define( 'SECURE_AUTH_SALT', 'i6WFeUfMWlRE)OwN.HQUrTk)z*uIb.U/?3zWFSVk| /T-klo$*UiX~!m]MO<cXlv' );
define( 'LOGGED_IN_SALT',   '0D!yYYn&{>,ayv~^`:^p;EBBKHff8Ec6E6tJ[!|9L?W8OvtVw-{;-UZuo}-,e]5Z' );
define( 'NONCE_SALT',       'xI##v fBN}EzY^JD)^[t^jk[RJ%S VZ^HjE%Lawr;,EY7SH~y2!_o6Tj_L/>TgNt' );

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

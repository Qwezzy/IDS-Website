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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_xwyv6' );

/** Database username */
define( 'DB_USER', 'wp_m6k2f' );

/** Database password */
define( 'DB_PASSWORD', 'nS_44%JUBDk7ANuf' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'V;16UhN:_~u@/19D0*-539+m/5jYFD4Jl;7W)ns7cJoM]6M/x72W4ugR)k#N7kRz');
define('SECURE_AUTH_KEY', 'D30]TZOq1[1Py[|tObgi;RfW&l9_yrGD+!W[&*:/Z5Y;)v/L6shQ!P2K*h%2sVp4');
define('LOGGED_IN_KEY', '+Bprp7yuXcnq442nQ7W;wtB4i1p1VdVHm*%)EZsO#3lfC-hi6!hb3R|b+K];S4!P');
define('NONCE_KEY', '2wW8Cn7]]Z|/e_LyD31)%+Q55WDQ_ylA1W3dSWiN25@X:e1r47USt+p9/)3(5zo;');
define('AUTH_SALT', '@4%9N5Y%*g(+TZbp-fcO%+7+[*8m)~:13(B51[Z09%%J3@7D*y*|Kg(@;QH90mW5');
define('SECURE_AUTH_SALT', '@49|W~13BQvFd4V(e;:7ysS:35/r!(m8B95B9u9OCvwwv4SS2XrC&*rK;t*9Z4]6');
define('LOGGED_IN_SALT', 'Mdr;093fyyGFSZ7o_qOyy23covHI+UDV@)5r3XlZ*Gn;2bzBhl3#KDN4qu50#/6D');
define('NONCE_SALT', 'z~QF&-9C0OM9cC*t2YOA3_]mWl11(*:E_m6yXpfl&~cL92Wj0JL[xKtS682c2H7a');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'l3CYs_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

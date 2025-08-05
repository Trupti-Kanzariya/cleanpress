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
define( 'DB_NAME', 'cleanpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123#@!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',          'a rh!1,YT^vIbd$M!oF[MS+Yr>L&t87YH*>Q^XJW|{U{1Ir4p}L>p&D%c XaCQJM' );
define( 'SECURE_AUTH_KEY',   'Xs$lq(n>M?U[~[eYUevb:Xhk3Z/?b)4TJBP:j!Aj?QmXJ;yO-_h/qPCBP!@RSU&Q' );
define( 'LOGGED_IN_KEY',     'If8w%:$ it^F hSeK#5KD$JN-s^{n5dud(Adg}$KT47lD0b4$HYwqe~Kfg#hMV&4' );
define( 'NONCE_KEY',         '^l,Fy-^VczHx]vY&/3eT,R=3/S%`k-B$O:l~iB;MtqKY|$Cxx61QGlKJV#6/T=~t' );
define( 'AUTH_SALT',         'V}4&j7D8>br6%<3kT8-3s3wf[-X,r_x?)%Xzf0s7OKr&c@tuDoq*7No0_3b0%2v@' );
define( 'SECURE_AUTH_SALT',  '.B5*qr`}b|eiM(4e}%5qg%n[2*j{mG^6?FI+v l/|I,?$i:7g;?<1>7 6y@UfS3L' );
define( 'LOGGED_IN_SALT',    '7O9==pb3TC3*)X-E|c>-VfW5:v NWKY+^(omOxyaq1VFr~`2q[_6UP^,{U9MvzPt' );
define( 'NONCE_SALT',        'm5(/[vVc#pDFo@i24weJ*3~nT?oaoR0iGzYVOz)Tod47Ey1+de^BBiby@iQ@@g V' );
define( 'WP_CACHE_KEY_SALT', 'WrGI:mwij`FaJG.PwDMj+>X+V~7MgEx-tNYnklXd3Zc*^SjvT TKwU=2jm4<xiZ/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

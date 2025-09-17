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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '$.V8BZ $S[Ms0k<uJ7iYs*b#;l{t8G0M/x8;J0F+[lQ6D<LZ_5T*z74c*`Z:|cN~' );
define( 'SECURE_AUTH_KEY',   '?&Lxx=f!p}%<3fL)]aBKU3kxi1K@utvA!IT syj)De9Y7H26w-r%1L]1~SJ?WD2f' );
define( 'LOGGED_IN_KEY',     '?R{-4Rmn*1HRQ4K<-e$+6cOWI$s2XzXJ(|3k`2PChp}6no*#GFmz4#w{> ;F>n!V' );
define( 'NONCE_KEY',         'JY@J(K5>MFUyKa) u-u20]I@*+2`So<`%zLvH<@ n0YkhC+=X[TlAVpRkX5-yb6r' );
define( 'AUTH_SALT',         ';NqE{^L~)s@@ 1H3U2,8lc$Roj;,PJM0>w/L@<=i.uO^5*[8-YVe%Ceh<CN4gybZ' );
define( 'SECURE_AUTH_SALT',  '{}TF7V)5.@,g:4{5mJ(AP!+L+=[BVEGkWURFEN=Iu=lE_r4MyC/=cnAFj~ct{TW,' );
define( 'LOGGED_IN_SALT',    '#F.gCgtu.t.K]`=an(bkUqsVd=p<3-eMlhIhx`Ahg*F^?;Q`IoZZ^K|WupyExlG9' );
define( 'NONCE_SALT',        '@yY;@BTYrh%{b;B2T3Brnje[<tCj|tthzEK?Q%<5Pu8hXQ4t7RE^IvR#Fbc4[J1o' );
define( 'WP_CACHE_KEY_SALT', ',SXrU~JQVa3zc&|#$H+8&UOM`<]A6YqZ|TMZXm6}} aHSS~**]VA@^a>Gxda?m!A' );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

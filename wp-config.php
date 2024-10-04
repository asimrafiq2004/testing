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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'r[63Cx#Y8TJ<5d>;>agpz&Q;-d?6Q(uE8wc7TH.BFjJPr-PIJ.PJ#}BBGdG*AYRX' );
define( 'SECURE_AUTH_KEY',  'K$Pyc7d6)U/( h?olt1DxL.K(6!ojW,DNVWB7YmNszPTs{xaz?U(uuybU@wbk@L5' );
define( 'LOGGED_IN_KEY',    'PNkjH?S{jZ,bi.*vn!p&n$!JM:K^?2M5wu`G#dMOKHv>LXhpQ(O<p25]E8!FsF}c' );
define( 'NONCE_KEY',        '#8)mwIeQi[:W8B#m+bx4TiMO|58Ne>g?#u)JkmSiVs0}K}`MJ20}~5.Do$t8fn7D' );
define( 'AUTH_SALT',        '$oOX0c*}}HxGC}iro]Tc&KqA`t<gb=:JCz.kQ-c756KEFGF.m*}wBSH(KTx3Cy~e' );
define( 'SECURE_AUTH_SALT', '8E+b]DbDgsL`n-{6LNdyldAGLL~$-If~,t~S%*z$*?=OpJ8PsOx!Ar]_ti(k&]h+' );
define( 'LOGGED_IN_SALT',   '&>]dtPjG@Elfx|HTL?x1=a:wU|=1Kj8_w7*>|p}@glX?Gl<4T7rztdO7A_Hs4Jbx' );
define( 'NONCE_SALT',       '_hOe==8l4KoH=Zd03V3YjNJzTqJ00}]cKpBdJ3@_K^/?]*C/d7NA))fyEr+xr6P~' );

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

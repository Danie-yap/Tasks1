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
define( 'AUTH_KEY',          '2bDta_ys4&[[yXQiqD[^s_Czjhous/1I~:I@@*|I Y|+Bk)dYPCgqELLW~ug[-Z>' );
define( 'SECURE_AUTH_KEY',   '!gNH?(Og7~COIJ/asv[EL=EdF-N^gW [ d7cX|)(VQb&?/rC|7}Nh~9<sYI& YqM' );
define( 'LOGGED_IN_KEY',     'H<&$yN(Hc]t=c~I#_!uU*h_*Rldd.nl1=6{*f`PKTk`k;2ta?}g2rzYQy1~Srj-[' );
define( 'NONCE_KEY',         ']sM|9BM<^b%I6W%rem`M?$ahs&| ^tg8H4^._LUeH=U1CS++B#$tH2JXY%Cqa{XA' );
define( 'AUTH_SALT',         '<TTR1uUE:;7NTdWUrJ~iEZV!aq%K>o[MQ<rmprV%^m!agX5BE26r=t<4u3;1ng1v' );
define( 'SECURE_AUTH_SALT',  '2ndG_fv0P-^N%]`(/M>g(S?~t!Mt}Kp$ZnF#!hJ$b/M<O:/BJ;`r9RBT+/M!9s>P' );
define( 'LOGGED_IN_SALT',    'HsLm,Y2% G0s3$-jNb$j}l@l6md!h0Y+`oZ{s[U2b=`L>zBr!o[c^J4Is[UsMSGT' );
define( 'NONCE_SALT',        '=cw2Lnf/ibsq$^[z7Ga/46:zw[:gU1zt=0yvqZpps3PWmy1w?}/3.S)FiREapV-3' );
define( 'WP_CACHE_KEY_SALT', 'WRPFl.9M@Z6N)$Y$lX}8rZeYfg 5>+*|?4} =nytLl,t#uSyx>]H(L>7kxUJ0br ' );


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

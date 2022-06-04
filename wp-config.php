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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dillowpillow' );

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
define( 'AUTH_KEY',         'EB $,R@s:~V,&`xpm=sGo#)9zf^kIOOY=?(AD9qF#cuL<K.<T+!Z6jN:H=-1Si3u' );
define( 'SECURE_AUTH_KEY',  'n~#.lW%P%0hVK}!BR#Zqz&;ufi9Pe?>QjLkQV]%V_*L7<I]i%s0DcRGJ!+rr]K?H' );
define( 'LOGGED_IN_KEY',    'lbW*R|@vo71^X%U1?v[l$Z.>y]JQcoUAtci7}gQAVv;H:d^@=ECyzCSuniVCIgB6' );
define( 'NONCE_KEY',        '(=[4AG{B4R)gaJoeG6SI.dCFEzW&z*[^Ck_^Bw!+r`N6c%vq99/;:2,h]BNGh8~V' );
define( 'AUTH_SALT',        '~|~BoPKx},1#ws;7cY;-M!p|NnbFk{!|0YGu!dCj<^5tSikdn#HFs;UE|czpR )y' );
define( 'SECURE_AUTH_SALT', '0Fnr#%m7cnj^wv#dZq-m=:jJ:p&`Tv;Ckt+LN.X4gWZkb#2ss^3*tAoCnS~z+h n' );
define( 'LOGGED_IN_SALT',   '6d;`x2~m#MtMcVpAbo>f+W5mUOqR,d*^C=i}1c,lLJY?a;:Pxq $V/Lr,LG@At&j' );
define( 'NONCE_SALT',       't_._<!6M?@atjb&Z(EbTwj;Y[RTlFGEI3;(>_L:=E!grFOb: i4q*y)ZZZ*2PDUY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dp_';

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

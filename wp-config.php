<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OSPanel\domains\kaztbu\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'kaztbu' );

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
define( 'AUTH_KEY',         'h~MF(OU(L*of%uPM&6(bNu@:s71;yc}Y=Q4[dzm@bxv.]0`<`mMAmPwPeKt_=o)#' );
define( 'SECURE_AUTH_KEY',  'emRm6}6W^>0Q(}<_(G VJP#{mb,)tz*|i7@A&N#n{FHC0RR#^pd<H6*f)>&yjRgp' );
define( 'LOGGED_IN_KEY',    'Z%]C`k/TY#5yyF!.C))9EN%!Jja<DOg=+)F;pzQ)!n6:K{s>1P1gI<E5f1[f%srk' );
define( 'NONCE_KEY',        'Bdh59=?rU`fq?MLyBj@,=*45Z}};{ZR>B^)] 7>@5(U8.,@?WNVWK(`NNX`?Y3JJ' );
define( 'AUTH_SALT',        '3*/LDYc0&Zi0q0GnbwD$T?tMzHWta4^u[n>M_n2;p%4alp9$u<_?siR4N[|1:uZN' );
define( 'SECURE_AUTH_SALT', '^JqU}=Nd^lSiVkqd+@og~L@xlb,?#hsLPy! ng5~]lu#KD*I xvd1|9k=^K5d%kN' );
define( 'LOGGED_IN_SALT',   '#97[3W;i3;a14$@s[;_ID}f?t}M(bJZHo[O)20.l/L }kUp&[W*n29??`%fwNh@2' );
define( 'NONCE_SALT',       'IXmD6hLPcI|u9xmPJq?fB9[Rx5V)G9dyR_0$>sTP:^h=9Z`P kv=7-ZRaDtdVQJ0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

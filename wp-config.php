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
define( 'DB_NAME', 'otrapaginaweb' );

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
define( 'AUTH_KEY',         'Q9ZFPC4A[i$V:SF+H?pyR:mPQ/[=M+^gvg&kieY4lhc}4&H$4,^x>$c-~/~/gW>f' );
define( 'SECURE_AUTH_KEY',  '):[Llr~fZ,,|wZ2[8+*}Oss{+`3]kO^5P@Wu~nnYTOdTp;A4wE3Uv#?@D;XE3O:f' );
define( 'LOGGED_IN_KEY',    'wqt*lh<-^3=GwG@_=f>Z)D-YBI;6U/3 JWVp.?CgjE:,aR-{J4;f2)A//&%eKTvG' );
define( 'NONCE_KEY',        'EebM>KJyw<X9S;W8wvN~-Igp.sh!P2&.lSMCWFYFS<la$}2|5G6~V&7jM04iT8[j' );
define( 'AUTH_SALT',        'I5DnQ9=V/dtK~&aj@yUpadyMP0Km^>8} RD<7mYs~;tT:AY4-A*7 4[x))xZw^;v' );
define( 'SECURE_AUTH_SALT', '@7.09(Xi[F$FI^cwFLt~>;u$)@:7WpuG&hge:E]_7uUt@QyWz^Fe!l[*$Q~im}7s' );
define( 'LOGGED_IN_SALT',   '9t:[K gsjgOk]`*}l!,jca]w:(KUye<Ei$Gca&*kPz^#/*8tHriHqGVzy*lgICBg' );
define( 'NONCE_SALT',       'b7:W}JgF@<3xl.LLFfdn2wQ<epRii_6B@uw[NQMt,=ERd]`I K.+MgD}OU?$F ^7' );

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

<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'hamza' );

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
define( 'AUTH_KEY',         '[DU-!uCjm0tK;OBwFqviQM3s9{Twb5K l}orJp6HPs(uTfTEZ#]5XWZP#,SzVGtm' );
define( 'SECURE_AUTH_KEY',  '#**I+No8IVXFT#]P13ZAW{VS. 6CE4i.,?]?|eJLt`IwBM&gir9Xcx>_{Q<3(AOU' );
define( 'LOGGED_IN_KEY',    '2p;,Sf&.tVIgneM#QYp/qiSi*7!Fm9mA,OjiM]^:@Ns|w&nsV4x>5M5jX:Z3b^W/' );
define( 'NONCE_KEY',        '/t<qdjRbITy{pRVa?bT^kB`P2]K`szI9=Iq=471<5.{% !r}.Ctn:]RWZp5G#eWk' );
define( 'AUTH_SALT',        'T9Vra&U(kjeugJ+f5TM+bOmJ~FRTm5IRCriPBGM,7L|g=uORMZ^fomH>OcSWN Jv' );
define( 'SECURE_AUTH_SALT', '`R4X1rvx=ON#t[{BU;MQPIz7gUGYL)+d2f_AbOimge3z-{J!7,-j<`cX`>PP){Jh' );
define( 'LOGGED_IN_SALT',   'NcDMv8}.O&$[S[BoR}e:/TYJUH^84B0:M@;49a1K7Q`%jCv.V%jlIqG7$0`7]D#z' );
define( 'NONCE_SALT',       'i2Lp^hjr7-!zUAZ{:-s$YwC$Z4p@^1y<-M<%i!loyi>iQCA]2|Rt0@&n0]nBtbr=' );

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

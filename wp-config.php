<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
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


if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
	define( 'DB_NAME', 'nexgen-builders' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', '127.0.0.1' );
}
else{ 
	define( 'DB_NAME', 'nexgenbu_ng' );
	define( 'DB_USER', 'nexgenbu_webduel' );
	define( 'DB_PASSWORD', 'zUVwL%bhkh*^' );
	define( 'DB_HOST', '127.0.0.1' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0fr`#@nM%$1qDGIHE~.Z9k*&[7KAg/=xo8K;t{E+Cxr!p5GC=<.! wW?p{YYK?7%' );
define( 'SECURE_AUTH_KEY',  'R77,THNqKRUUDwaKMp9xcEk6FA!&t/PHx_!Q/fNUO&?dyT7`NTsVAJ#lm#0?D%jo' );
define( 'LOGGED_IN_KEY',    '?n,Tj37Qd{2P1wL7v-c+0tm9t&mwKtHFL@QpG{-Cyu7]/U>x,Se|;:`mIU$kM)XB' );
define( 'NONCE_KEY',        '[(f.10r:k3:~/)BrFi<}acK<2wSjwIwveEOh%qu595um93uHKP.3YsOdsV!X6wG9' );
define( 'AUTH_SALT',        'h2A{.[lS9I8K31XH#iCdtyIYOk2_{qigpY{nWqc?=!)#BZVM:zHR^3z0JdXGq}SN' );
define( 'SECURE_AUTH_SALT', '#2up#TJro:TdU6Gn6%9IbCyR{VQS9Ob~8Y.L36}pg-x:(7^V+#hE7@;mBrRiD%Tu' );
define( 'LOGGED_IN_SALT',   '}/-+MfguXy1M.eP9m5,GT~YurWM!5d4z[LX74az,zlO7<Q^.2a|+}$kv=<7S:iB7' );
define( 'NONCE_SALT',       'ZY0QpvRw+?7,U+_y_#.S831&|li|>;ez%7hkN^qslK[S<3aFl%/cOODxSED~n7t-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ng_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

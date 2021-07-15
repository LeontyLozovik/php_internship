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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'GjyfCBF++9TB%8`a&XCKeov1b?do#=)PoZ&j*!<-u_krC~ [+G6`hL-&c.gs3cLE');
define('SECURE_AUTH_KEY',  'd@}.9%F%>^|TD,M+?Z$&1>|d+P;cw+=*B?;J*IXbv8{FL[_].Z>f2x+FtqkHv jA');
define('LOGGED_IN_KEY',    'IT]`A6(|oYYOl%OanFot,2E^mdT#5XQG(}^ZLQQa6,}9jw|?^$:/z~^mn0l`P%rp');
define('NONCE_KEY',        'w7t?;xmkgTXEJ8<jNa+$y:-rhcDs* 2)`}aab/Py_K@K|c(M8SR~T/1+WT>.s*J=');
define('AUTH_SALT',        'ci#$PRC4xX=:#Z??&]1!Y%+lL3<ZKY3gdD I?<#~%~<jBl<IpXf;-<P8b~H~TppE');
define('SECURE_AUTH_SALT', '3!+db,-:H{_DbYSF,{ZtO6{W/f@u/[8-(U7Bxe.)0/uY=hs*CsJ:@84IAs{.[Pk*');
define('LOGGED_IN_SALT',   'a>r+{c2|+4[,KW$nxt:E6_~O_}zO[,xSX?8]avGoz+kjYk1V<TZ/CB]B(<E9fwRU');
define('NONCE_SALT',       '(Qv0*^zNr:+ePe3:WgEJ>S1T|(]O/!CXzrYKDb(},/pswlz8-o)2^MTn1O?%l<}n');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

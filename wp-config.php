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
define( 'DB_NAME', 'decodervansh_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '1/A!<j 6;+% ii%L=9im+k.mWJ$HE^<&SV)v[lr(uALP>#0N:v6E#PSW.M@*a`f%' );
define( 'SECURE_AUTH_KEY',  'CtX>z8H,*Jp{U6qqw$(l#U[AOpxs@a1e2u@/*/jW09Y*[vxu];$baI]-<hbWgtzJ' );
define( 'LOGGED_IN_KEY',    'WGzZ3g2%@?pnR9:%Hq5?$~NjWdq^^D6iu:b>|j7ryIHNA9&{s7{NU30!8n<`zL_w' );
define( 'NONCE_KEY',        '-FhcUO 8I@@b~M[-wwavv.`OwdCqUkCQ&/*7HP*N:WD>QLC5XTpL_-(SPur2LCmF' );
define( 'AUTH_SALT',        'KA_1h-<j<~>jz!pt_:5iA^F=*3<@Npya^9DWL^SIw#n?9=jaO_x(m7$ZcxIYh4--' );
define( 'SECURE_AUTH_SALT', 'Z?$3P!*v^@>>%Kjr*oggpB7WXb<7$Y)QE}[ks3X5x)j{$#9yl>-yFl:7&-xF<(Xz' );
define( 'LOGGED_IN_SALT',   '-dO/uA*//{G#Tf|{(`?; &l9_A`S?7CR@;-Wh9 5uu+:2qD{LYOj;];:Mez{2T||' );
define( 'NONCE_SALT',       'G?^~Zan.2;[9f<DZvZ4 BbgF1`iqi/;m23}85o`IqsOO=S1{w=hXf~Ok#[{{(=&|' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

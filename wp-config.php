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
define( 'DB_NAME', 'site3' );

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
define( 'AUTH_KEY',         'emM)H;ylTkDjY]_nTv-yP5=h*%G9.@z~_bEf*}m,u?v$_B%b@y#Pjg<OAPR.IcAb' );
define( 'SECURE_AUTH_KEY',  'eyDs]4.=1*+Zk;i.^&BM?)+*Z_ #Ik:_z#/m:o`Y4Ca1p>&J+2*>K#IDLpe5v |z' );
define( 'LOGGED_IN_KEY',    '#W,& qEqV!LJnMm>6iazJI|FUGn)V<!g5GX3M}&C%!;?jYtzI0&j1p^&KY+X1SKL' );
define( 'NONCE_KEY',        'V~E0Imm1JaGNV=nvEh3|S^6rJO<4cu/v>8r(%M} gGd <[`Sq[:..cCN67H!_x~(' );
define( 'AUTH_SALT',        'I-yV<b)B4(AAbYoq_&bk~j_}ik^7~E$6.ul].v<chT1n.xB{T/AWH0.OIz|C7 :L' );
define( 'SECURE_AUTH_SALT', '9{%{P&p;xMa^h|A2F&3[S{n,QvZw?cq` >n(%7*Ru0o+p,n0^ fVB[3B;,S_r},0' );
define( 'LOGGED_IN_SALT',   'XMxyUMyC+_ur0DeRBgd/0F2=XO2q)CXk?`6novZI!h4^+v0+!RkQu0K!>`9t{eIh' );
define( 'NONCE_SALT',       'W3Qkf:my$> XRvjH]L{YKu7jjU0NC@l_}7%[#DgQtj*!4^.PH~LR]g*q%7w~n_9K' );

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

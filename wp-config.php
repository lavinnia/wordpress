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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ix]A:gM>ZYL47@nc8%;?bZ^m|m$eh+^0Fr16KP/%a`I2lkf-.y6Pj1;N7_Zh5OX<' );
define( 'SECURE_AUTH_KEY',  '/>^TU]4}Ya*XN+HfK[5COBqV}x[;B);Pp3gL1Uwdr HxOeWiaoW_jT1[`voH2zHK' );
define( 'LOGGED_IN_KEY',    '>ndq7Vd(L),4[SGO;sbYDd#Yw9S,lf^X@_9_w.O~Hoaqw_SbVbO}IHN=Wy^]^cFD' );
define( 'NONCE_KEY',        '33d@w]dyE@1xN{5Bp_*+@Bpq6qKreob^,z_jW 8$$v]<G;s.?~GGud.Bz$wOrP5>' );
define( 'AUTH_SALT',        ';d8y4?hnFd[hjDj=FwW6hCl>Citn/O%`o9~Rj`vanh_QTb@!Ln@uj?7yQ^=HG34V' );
define( 'SECURE_AUTH_SALT', 'AL3FvL*3^i?TaBG9rZ0EE$9s|38qU{<4RQ wcFaX62g-HZ&Lmq FHr2k E`WAz`5' );
define( 'LOGGED_IN_SALT',   '4[[1!@^3# T(ge30t4#[W IUb#QNX{G{Kv[p{rV{bAt!/h-(vAsOOl$&0~P4K8{T' );
define( 'NONCE_SALT',       'gxt]b3To3TT[Yk;Tgclup/yFY`7}w!-2cOO]c`gd++0ov0/#iGgI6hnhMG*iqScS' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

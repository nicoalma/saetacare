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
define( 'DB_NAME', 'saeta_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6i3Su92P8l!J<$59bil9`gc`CSlpY`ls4SgN+< +6%bg)8EGX^O$J=1WIY/g`>^F' );
define( 'SECURE_AUTH_KEY',  'qMcY+4fNNX-*K6_}h>cFXd-C+g1V_KWOoOo2.)t2_wTF)`DHw@NfiDhcllwgh$mv' );
define( 'LOGGED_IN_KEY',    '%X#e(CruY37I2jTjf/Q:1QT),w!xAl%1V_+CGqK>7R=fU)2]}P,z2=![:fuQ6qm:' );
define( 'NONCE_KEY',        '`2q]1?1~h+:UykEeUx2_]kwq2&#B+eeWkYvOa>(X!:6_g%wxn I<{(|vvCI1_DYC' );
define( 'AUTH_SALT',        'O1=y{I;_jlqF:3d|w&K^D ]H;Tv7O0VMW?!z9O~<nKZH:W33B5W7IN%J7+vZ~B[9' );
define( 'SECURE_AUTH_SALT', 'jh`VBq+EvVxPz|Br+_7dZdn$TOL,,e!Ar?PqB(q7GW4_y!m8FnJPp6bxA~7}K,jb' );
define( 'LOGGED_IN_SALT',   'vO$ 5@NK#T8|kny+35O9w7(!x$ahe@jrK`4.qfl{o4b#AZX$*,?+,#r2k1.V@>nN' );
define( 'NONCE_SALT',       'X}[&WsXz*K7K*e&NkI{9Fj6c3I|ctZWkj/`_)VF<GqMJ^0YM-ma$0tl@]/,AD3A)' );

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

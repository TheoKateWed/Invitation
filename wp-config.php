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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wed_invatation' );

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
define( 'AUTH_KEY',         ':Lg]zJJ/W  y[e]6=l2*ke5w D!ZH5fIvs2M{6>CaJ6N3N|l*7s/wgv3+OhA?kQn' );
define( 'SECURE_AUTH_KEY',  '$c{|vx{@g.J,m@]eG55R4I8:xL5sRo{o2&o+58p}o_AN2sS[]QZ+^j[GApVhKgGu' );
define( 'LOGGED_IN_KEY',    'B,!pm4`DfsHhR1a84Nn<y7!bF &RPp}l#6_h_rR(f<.Y3*ZpOXLxeaHqp`h;oeW#' );
define( 'NONCE_KEY',        'L6ac$<iy3>;L`K]sf#<*Q)QzlNB:y?:Qbq9eWh>de~nkFDWG+?6gB[I &mH5uXPF' );
define( 'AUTH_SALT',        'jz7HHALi10;JZxg]~Ovk:-IQD)|&d@/Nb81{t-34n]fqC4-Tr-f[$jD=8oa&j`bc' );
define( 'SECURE_AUTH_SALT', 'my}_faR^lU+KVpIoOjBE$GMMcrSyuIRSa,j*6negla4(D#Sh_pH<2bUex[*F{,m%' );
define( 'LOGGED_IN_SALT',   'Zv;Uezo*IjT;}:7gkJ8:%tIXlvcXtj49MscWHKT}d-R|DjcT2h]UK%Rv^a4IYbHu' );
define( 'NONCE_SALT',       '@!SX)nRsShde;Iv^Wk$G/(3GxN>xR0T/.nd_SI1=m?v BE~44s];n$VDA_~>GzC0' );

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

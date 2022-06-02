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
define( 'DB_NAME', 'myportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'L8$MV|@-.e)9+J)%U*Y ii+ZUTGfSY*].#3kFbH+;[F20Nb4RZZ^?in23=rhtM1K' );
define( 'SECURE_AUTH_KEY',  '2s>T}w.cATh3g:TDY@Suj aL joT;xbz{t qWhpc_w#RO[Odo<Xw9<c%.SjVInIO' );
define( 'LOGGED_IN_KEY',    'yIoFlWmQ2z<2hFhQeWYFSbD5pX+hO3#DHBa|{X PWs}QBA9T#KTC/N2E<h0|ElMx' );
define( 'NONCE_KEY',        'W~X^+~xlT-hfps[Ds`y$;(pjV68&qk$kvmE^i-M;Qp!a_LekR_cXLs2f5Vrp2s2V' );
define( 'AUTH_SALT',        'o ln5`-kl_N6-~fc!dl;Y8nne2ysQ/1}1W{N{}i.a(UTK$[HyGvz8I*0j^4p{d+(' );
define( 'SECURE_AUTH_SALT', 'Z|KH7|e1hW3<Tm?Ki2nJZU9w#C>B?aW^$6nF-s.@{[u0GhAls.Ps3%DrFY[:J&$c' );
define( 'LOGGED_IN_SALT',   'k2:1DHf@_;i.HWj:R?Wt~Kdko[-I20N!_{Yp0Ey?&IX5N-W=RI0G`R-1$,IzC|>D' );
define( 'NONCE_SALT',       'bqmVme(4Bd-c?od%98+AbvU2}2:H?K+jc4W2n_paAiRrUyl ht2kUX~]^1$A*hw ' );

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

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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'coolmat');

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') ?:'root');

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root');

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?: 'Ak.aK.m}o$r`JJ7X|PQ#W;$^0V~2kzsUP-evoyRQo2tfjG@N$zJWWt|TA*p ;kL}' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'up#g}c>v?*7pAyyLDrjd;-GtBI_?|GA$P!zl mF8[-1=M[;p6+a}:C|~y91^o}I>' );
define( 'LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: '3^?L$_kLq:N*Q6Z(TW9LzDR{[g<V=Yj8P_l7w1qnpa*w_7MAgP]HJuy!=?;39M-z' );
define( 'NONCE_KEY', getenv('NONCE_KEY') ?: '+g@B(>fb3L#5(?xX.o60L&- yDU{j/kXAKizI7WoxTR90 RY]EL]%b{>];@uKPt,' );
define( 'AUTH_SALT', getenv('AUTH_SALT') ?: '<X2>vudaEOyhbFNIQ2 xaM/ $z7MCae{B_?NW}7.Ne(F>t(;7+}oz>yS!D0]pA>x' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?:'7?Z#XMWBjHliP(dgGC#F*N)mqdF_{hM|0#yF]?Mfq_18Lhrk1`.Z@A7L-:Ti`C#8' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'sKhmD11} 21}L[0OK8V[o0N!&xs3~9ET<_gzT<I}wm289VW.IJ7l/*9^Ot Ns7|[' );
define( 'NONCE_SALT', getenv('NONCE_SALT') ?: 'I%zD_El$T,,W[yW%Gp-Z4kaa.n}RKrMPkC^YGM/Z?GN`;)=d7[Ot5]NeYpLv|`AA' );

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

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}_29$Li/FZ:/$etLrI}LGzkXuTwr#KhdIr*8hG]xJo<WD `zU($Dy-w%i/cpI5*:' );
define( 'SECURE_AUTH_KEY',  'ZI7ml!XA0y9 MNbp+$^VXvIcst,;`C-tMU8o=@<1KTzt$J<1~Q,RA17d]Fp3g8Lx' );
define( 'LOGGED_IN_KEY',    'Z*{uD9Wp]N>f*O-RSIQIYRt*M;(Cz))B~AhgC[n_/P4f;++ok(As=Xha@QUYw)IY' );
define( 'NONCE_KEY',        'v9E2vHr(/lZaa*jDKcan}p8p+O?Yw[YDwE|k.;dIFy :b0sUGx!*8[#FOxkJFPJ5' );
define( 'AUTH_SALT',        'R1%! -J3_W`qo86)=HI=L(0;(;3`!toBydNAY~cv/3,K8GZF%#I<]cOS6jmE6OeA' );
define( 'SECURE_AUTH_SALT', 'u_;C[0Hj-zrQgE0=zPS$)I,JsY<8,X;Gpcq}dg05^)gM_*.ncxYbjh{&kYTmRn!n' );
define( 'LOGGED_IN_SALT',   ')PZ8>MSq)OX[j]U3(4kuNSKeC>xNw%/(6wqk?=OE:k#UagjBNXv[Guv;)Gj1!l&7' );
define( 'NONCE_SALT',       '> v>By<v#NB%s5tT( O/LhYu;wWpLHJriXjM&hFl%BA{$t|Q$$,M`4Vg/E0!;Twz' );

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

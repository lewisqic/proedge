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
define( 'DB_NAME', 'proedge' );

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
define( 'AUTH_KEY',         'H.]bVnz>!6i[OEU7JcB2tsB[QNZ0lb+kW9TpCi*B@blVPY[7H%[I#{BXBI4|`V)e' );
define( 'SECURE_AUTH_KEY',  '_/dE)`EE7Sf>8P1XJj=l4.0Go.v;NHH]`m;^%t!AJHdz_ld@%,2&F7?vq5phN3tD' );
define( 'LOGGED_IN_KEY',    't Pxys#x-.>Kog9H%ZZ{naOQ)zV?WD&If8hj0h_8[(iL|sP!-3<D&|!]Nw%=0p-X' );
define( 'NONCE_KEY',        'p^yHl&f/7W{*xW@sHD}ZFx*.5JP7OH)$IbQ|~t`LqP=(P`MSK}!v0u*Z)F,F!^b>' );
define( 'AUTH_SALT',        '`Ss[g{$?D=(~a`BhSW}B]]zE|CsbRy7yo+kgDh{6S<RaAlNSJ)!E)R]S%^A:v,f!' );
define( 'SECURE_AUTH_SALT', '8.M8cY[E@g!gE4BWvqe=pa3duk1$R)yXd/7[Z%A6r$5-1eop[/m;Y?(UVjdn=^<1' );
define( 'LOGGED_IN_SALT',   '%*4YF6x{e/_;}y*L{}kQ{.!4l&|PR<m)j3rA 5X8>1WDYi]#&+5c%ubzOya+tw12' );
define( 'NONCE_SALT',       '^mnU[oY0#feC[Y]K,Sd}RsF`yI0&wATI<IU+Q:8(u^xinviL?YEI3#17g%]kx%E(' );

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

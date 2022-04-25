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
define( 'DB_NAME', 'crossfit' );

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
define( 'AUTH_KEY',         'h(}<yx8s[HA7KIB^Lwo+92k[-hkH99OQndBc*j2^KLMUj0B2pghlkp78Rk1NyYlA' );
define( 'SECURE_AUTH_KEY',  '/T(|<p(G- lQ)qVk| $U$Yf~a19[)p)>4F:7sR%w#e/Yv3F*#$D{^fZ9_^TW|O[J' );
define( 'LOGGED_IN_KEY',    'P0QWv]Dc,J%Prubb@W&41tm_YQIk/ix4V.T?y69_;+o}<06C`|kJM.L=yqP#a?4<' );
define( 'NONCE_KEY',        '<2:(Nwa@-x 8{2&l6Z<.`%,dBWh|(|:38fF;F1c`9T1p>`<G-hJI;[@CaR2gPX]*' );
define( 'AUTH_SALT',        '}hWX60,w@:En5,}7C[S%8UTMaQOa?_Yo6>sIMp#42U#jAGp]},])b^bQ!YuCf,M&' );
define( 'SECURE_AUTH_SALT', 'wq4`mVHZHaHx/SPnO8S ^R12]<mYPY%r|c`V57IBn968<xBI=)^F|kSGx EUJq>$' );
define( 'LOGGED_IN_SALT',   '-ob^&WnulBW/7~A4EcXDt^ep56#aX$L61(ST.;Z[uz^=4QjXo@7#$BGBXvLaItAM' );
define( 'NONCE_SALT',       'qc,gRrU`;0;htPI<4[Lhl3rg/1^^T6xadH`R`bP&=LlE4}I*QOAL~<h32+E~!e*p' );

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

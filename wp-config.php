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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trueflex_rgbstudio' );

/** Database username */
define( 'DB_USER', 'trueflex_rgbstudio' );

/** Database password */
define( 'DB_PASSWORD', 'j2s36@#tUD' );

/** Database hostname */
define( 'DB_HOST', 'trueflex.mysql.tools' );

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
define( 'AUTH_KEY',         'O7t:yr .ryaZqzi1cc)8$goDO/A7nk;K`#9ZXd{r$6!y5q;XcVw>kPwS]+W!p?VE' );
define( 'SECURE_AUTH_KEY',  'L>hMCd aNJ=[]_11k]_yxnYSy_T58[Ldxgut[l^sZJd3?->bfO)lR9>j{|R.54ac' );
define( 'LOGGED_IN_KEY',    '5L4O7ro:bf;fT(mj0J8PVz<5Y-+y#3=:vqqP{0>z5R} e~`q3AqA74.gUTs6.ttC' );
define( 'NONCE_KEY',        'S,4{:.})`b9s2&H2VejmYcrdxI9Ja4NCTc4D.?J?LV||@(p*l7VUWfE~]Za?)su$' );
define( 'AUTH_SALT',        '$Ljtj jeZeRWlviJ~5uv8+_(lpt/_YCy2:jfWf:xO|V(l2B(5qqKN(VtJ:O|OGt7' );
define( 'SECURE_AUTH_SALT', 'aB09Ln6Pr(4k<<@,d.}P)p28M1%{yxf&=U8KB|/<67_;1}39/*?vZNVl1w]OkUu@' );
define( 'LOGGED_IN_SALT',   '9[v]Vk|5MC.>xbIFk3IP2<F+{@FM.4/$MK8W@mQe&!j<uFi(VodRrk$zc ^Yzv^U' );
define( 'NONCE_SALT',       '[zPO,bt/$<Gb6f4`Jj]tUO9<%qj@zkd@C7ky,yQ|DU2<8iQ1KJ^jPJoI,^{;}X&c' );

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

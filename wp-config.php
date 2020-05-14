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
define( 'DB_NAME', 'influxxgit_db' );

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
define( 'AUTH_KEY',         'l$j&8Lf.#*0F:N(N}X&`Vj4Sk{?|BB.g7P*/Af+SNi+Q~5;8<nv}>I]ga`R1wCW3' );
define( 'SECURE_AUTH_KEY',  '9`>4jw9X?*jw)]ZWLP#@6UodBnhdd.E?kio/6}67zcU>;l2@/D?i8rh?dAD#<cWv' );
define( 'LOGGED_IN_KEY',    'JJ!Xh&t|,xgz|q;/,M5:yl(Dz_8?Jq_/A 1rKP(LJE`mSv_4.~F.k#Z*ZwgmECq|' );
define( 'NONCE_KEY',        '(5?E!o@4%O%2rwJ&$#&!^WcE +802@K.vaamgVmc#{q[<F<.2y~kD+@@KX/=N_j~' );
define( 'AUTH_SALT',        '2nj&SyzQ=imm0XgK8YYY}bj:iEQKV2jvzZ&na3.OP&Q$|/?9jw,/^J%N._>DY)ox' );
define( 'SECURE_AUTH_SALT', 'jEA<i}_ILgOjz=IM6*W<#/i1^r9MINNNs0@u%)u(Ei>+h|t4CocUUb/c;y;UV2t,' );
define( 'LOGGED_IN_SALT',   '!4l>Ar{x}cuYBUUWxp0s/9#=63L0fhjuv_qQuCe5oH*{E%CWk_7?Rl*fN|R.w`8W' );
define( 'NONCE_SALT',       'AvvXt&9SS3J}^6Qt:K-{1o#y99#fM8u0|<&:OqP=*DxaS$ :qBGgf(hv5d:f_0eC' );

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

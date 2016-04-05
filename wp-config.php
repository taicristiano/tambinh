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
define('DB_NAME', 'binhtam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Do?HYXnB-QlO[L|+5:>Gsb|b-3$PfEgy&FzKZb9#W.8]I+Rr*y5-a|X5|FnGkre)');
define('SECURE_AUTH_KEY',  '8IXpTlY=Z]MAH/]aOWgS|_Lp%cCm4?(]Vb4WUe$K_y2SL~W0vc;@P9g<Z+HBJ7lx');
define('LOGGED_IN_KEY',    'xwb^o-+bC:-PlvLcLwIP9@ |7!Gf-&^<5ce+c6-|1g!@]@6 UC7_))uA|_7>F-N(');
define('NONCE_KEY',        '96Ih%r-ER&fs=sbg(g8>F1I,9uTU*Lr]@N-1uWrJP56o>nEiCj*PGT74T6d@G7yJ');
define('AUTH_SALT',        ':k&2%oP%k`?PKg-dc-!T5=r>#rq?j?8iIm*4U*koo(o[{lQ!!l =zJuTZ%R4ET:R');
define('SECURE_AUTH_SALT', 'Q=6(7U$^):q^4nvfC*tW8+|+T[+H 9C4E5I48CQK9_]>([r_hHZ-S0lK1j:a#$}(');
define('LOGGED_IN_SALT',   'wl@;<|fY=Z3<.:anYhY{(FGI+OkOq&*;#iAX+UWO],:ADGG?BJE?X+Q0;JT*bN+(');
define('NONCE_SALT',       '4p]J[/n?*Fk(>9CYT0Wg7c%1S(vNCbJE7|TRUQMD||twJ]*.Yr:kZ#W;|xxrxQt;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

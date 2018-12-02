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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'ymm');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'UCk>|;<*-|)s(K*E{+D4sme-SxxtGm,vL|FnBTCAPrPybH<!uwy17-WPE.JHo}_1');
define('SECURE_AUTH_KEY',  'pi$OR|Vk)p_X-iut&`i--3+joig4].<}D,+q)A]&Gp_Rq2?~Yw6bfBG$~J_rv;7O');
define('LOGGED_IN_KEY',    'J$;*a+R-%*23-{p9tuR{1O`|w/_Jc[{ej1JZ8;G)ypTJ}`>i}NuG;68#c5=t.rU-');
define('NONCE_KEY',        '-;<A%5SGkrQ`/zO@w{GgW-|{DBZCGzA<_pH++`6wb6YyP^>kk/-P|O@JaWIAz{+*');
define('AUTH_SALT',        ',?!BQ9 ey]z-)%~StjuIHDWuCyLZV|u}59WRJQB[U!6Br8nD)l=DO1R/+N-xqu5B');
define('SECURE_AUTH_SALT', 'o|8LP5-4c^~K[xOm:;s4tijeK<;*COQxHp+c}Q_HmUf/7M8o6G#S@y-QocnR`<%Z');
define('LOGGED_IN_SALT',   'Q;Q}Ha?/x!F}s.+RN-{-ZNKB.$M$*%X9}J9jC|,PWD?4d8gJsm1mj/r}pQFE:n`M');
define('NONCE_SALT',       'RN8x!0KPiK/)` }ezA.=QeDCO$0`7S:vhIX}O(9ybr~v5+=^+e^7%k{|2gRoo^1o');

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

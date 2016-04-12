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
define('DB_NAME', 'wordpress-experiments-march');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/7XOmG^H6KfYh8;.pN|-8~j}9^[xN5XqE)wB^;~V{jkfD-`?UONC.-zw3EnXa5=.');
define('SECURE_AUTH_KEY',  'vqEelj.2`9I [G7f[T,&L|%-||]nc:xxCAfZTA/]f4W` Vv_0jPCaj{Z6S3/z/(^');
define('LOGGED_IN_KEY',    'UWQZf%Nj7}|,^wuQu9bk; XhqB0LWQ/nv>X8x&,vvz~?l^_~/~pFskpo/G]9HTt@');
define('NONCE_KEY',        '3p(BW%0e!0{8^VB z?ItQ##pOOZg*I[{!f{oBnN+] v:qEnw{`{r~L{;e7hGTkjn');
define('AUTH_SALT',        '@lQ<p<t:*ps-d%*w$.3h/:_Q}(oq9N<7zTuy~R+?ou+paFZ~MYz:d$l=r;0VW?]$');
define('SECURE_AUTH_SALT', 'sT. ||!c_=Se*?JK7ZEr&j8<}Je+[z!.1FjxFPV~-p6q.}T[TT^ZTcDZsT8 ~C><');
define('LOGGED_IN_SALT',   'txs|-Buo5)n0v6m>g=oq|hiRfzN(tZU&*O`e)]cb9dwXX:3#rtd&<)J@;hfpl^)t');
define('NONCE_SALT',       '@+I]57%LVd1(ii+92w>X`Cr)no-PO,TR9K+xOyplT4i:}+#ChpnV?tb`;+?m+Z(4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpressexperiments1_';

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

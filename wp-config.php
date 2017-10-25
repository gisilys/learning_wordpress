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
define('DB_NAME', 'learning_wordpress');

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
define('AUTH_KEY',         'OxG8f+[p[R&fN$q$]V,W[i{$q>AWB2hVz+/ayo|RiV]6AYU7-%p~+x1WnTBAjDGr');
define('SECURE_AUTH_KEY',  '-m0]A-W.oHm7sZDEEJchFpBoIT#cpj#{ee,ngF?eVJxo8ze(8eT3Eb2Ya0h[{K0}');
define('LOGGED_IN_KEY',    'RWn}.s94M;tb7[R%$g$0/9i^}txe0t/om!)VQO;H$/|u>z)|)cFd^5K3<;iD-W]W');
define('NONCE_KEY',        '4|$h+7&MAp|4&-S6DHvYUU^Mk)lvTrF1ixH?_mo`b:^1l<*}0u=X2K-LbiM@a3k-');
define('AUTH_SALT',        '[)2bA[nGc{nj!DP{&}MN_hzsjUHZFX]2H$G^#$2:g nsSu-swHc ge_2ga|omYm1');
define('SECURE_AUTH_SALT', 'r;D%({6Tz9vd!a^Y/S+*/FREZ7BW|QFw+NX0Fpfyux.13f%)|bU+f9>4d4EMUo}A');
define('LOGGED_IN_SALT',   'agAh&r2$;Y1GIp0MK_cXASksG|]j~oUm2`zep5$gKB7(x@ICMdH]Z~8=cy-o9Jfg');
define('NONCE_SALT',       'zw.9_Oi^&fby.iRns6rgpu.j+GwI9S[wa}I~1$yH@k?_aj+y&fkWX, i%iNU4`hX');

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

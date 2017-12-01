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
define('DB_NAME', 'plugin-development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>1R<k9sIP}`RvMTuW%FJgGprsYkf(.|#H815L~3?#m#[A5sA,3[7XVf^vw22Q(-:');
define('SECURE_AUTH_KEY',  'ur9pDx?IP;)U[mC`*r:m0`H])%&ztl@rnNTpWntVVtJum6 djH99jAB]E!|GlYL[');
define('LOGGED_IN_KEY',    'N$uz4,-#-%pS,-~[2VWX+X!P63Qd0301H!4?^|7@TE34Xa{IBcAa?}?w[POjO4/O');
define('NONCE_KEY',        'k>_aadQA{O0N:+|x]<we$fPFLI1Sk}TaNZ/wXdtVi4^Sy8IP{px[=Fdy*=L.6g`|');
define('AUTH_SALT',        'UZsHJ}+It+JWT;#xOOZ 6/8(U2_E1Q:no113%<--mnO`_}`5^`C9>#jFvwwtxGw4');
define('SECURE_AUTH_SALT', 'lkHys6cr13{LJgj&#-OEd7ij;^:[h>]dxZ(FEw@e}fn.l;1*|R[()p4gsCn1lXBb');
define('LOGGED_IN_SALT',   ' jC{*^<,Sg>84:8pccJj~?cV(Wx-L~d/s$pB+AG@h0`K+Q^jDt{-UV;s{hS>No2]');
define('NONCE_SALT',       '#qi09ZBf.H`=+$SnInL4=<:W,msa.VSpo<.6P[pp]A(*1,aMqJx~Hg9-9xx1(~#6');

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

//enable debug
define('WP_DEBUG', true);

//log debug info
define('WP_DEBUG_LOG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

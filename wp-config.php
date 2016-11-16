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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\mywordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'mywordpress');

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
define('AUTH_KEY',         'd{)W+j5u;i-T=S^~Y6OpW+|8R!FP~te:{.)L4M#/2v3C;[rV7{Q`$1/RJW3zHC53');
define('SECURE_AUTH_KEY',  'KAo.9| SM{/.hq#_oeI-S~_8`wJEKh``7Y[gGidG/=U5z;@F+FzYOA32o9Mhi^qj');
define('LOGGED_IN_KEY',    'GqPvJ{ J(LQXQ8-~+Y[/aCMpP)/obwnA|g*[IL,/mI>A|-e<e]}GRa6/G:;q[.j(');
define('NONCE_KEY',        'l AymH(c[,zvu42[Xb8}xBz9a9LW_JG61`:-Q}?=MZ7bF%!Yk@J9P1|oA{ra5U92');
define('AUTH_SALT',        '0W][{$Rse8K}`pzvHW/hCQeRF<]yI,(TT9t2_r=Bw~L||aJw$#w2I!yr967|Yp&:');
define('SECURE_AUTH_SALT', 'ALh(l/;=G(qFQ>~)2,8h(IWy/r4F1+|oW8e[~2`X0(2/-^SPK1^@+Fq[,_^d<BlM');
define('LOGGED_IN_SALT',   '3tXm >rRRHNiKgZbnmymI7AhgN7di9iY CAaxCsQt,rP)u+3Kp7Fyk;]vE+q#Xoy');
define('NONCE_SALT',       'B_u{kaZt`deYSaS%?)WiWPxrBhy3F[OCF_}[g+*yRm)YL}Ngmb6Y)x0Utqj4;a*(');

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

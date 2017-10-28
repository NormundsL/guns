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
define('AUTH_KEY',         'Fv8t{U!j4jcBH>9pYehNYWG@ZilZi5a`HS3#4-kr$#*`.CI,{N2/]Y8v^WRH$EG~');
define('SECURE_AUTH_KEY',  'yZN0mb;f QC^H3-E(/X,pf htQORX`3oja?a w::vUQj:q{NxgBLjmfkjAiV8~dh');
define('LOGGED_IN_KEY',    '6=$r(NgV7Z{&dk`bu=,3!%F7}>A-uj*Sa~f%e(_O$#c;%E9TmthIrBN%bR4A~f8A');
define('NONCE_KEY',        'D6//uHF4!C&[n-wYev`=.E(|8ziLq6UFGdwjGBVniLzC?JI$Yxk %,#St:[xb6ro');
define('AUTH_SALT',        'Y-plBT9UF^;b[m]4(`^H(ih(z`.py XKxSRwMMWPVS~nk/9{qb[o4J>,ycXrt;jU');
define('SECURE_AUTH_SALT', ',tn_UvG= up2`^~%T;q]}g2B:%JuqZ-Yp43t+Q~USLY7FI|6K)=]t<]Sh)hLz>sK');
define('LOGGED_IN_SALT',   'BHPc,OVjf~A5_xKH5/?G^ZSqZW7+N%Sf(G]m n/0c-3-x_>X hQCq]p|]=:*sugq');
define('NONCE_SALT',       'F{:7F-hBu(:MoeA6<uD R{)<MA51V:1&iMQEw(qbHzfE-AdiL@b+%Ge:YkG$}#a@');

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
define( 'WP_MEMORY_LIMIT', '456M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

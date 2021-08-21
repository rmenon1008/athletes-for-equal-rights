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

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ',u(v`,RK}vs}HLY;z55/V|$h5ld{5>#Smb&hY1z|$xJr!Qf5^?8|~L?tFJ1pK_hl');
define('SECURE_AUTH_KEY',  '2eT=P^tD=o#?pQ|sz`gm(:2x>aQSZfMK%p195M9m7;xDu#p+!dEY-A)ktc;6]>74');
define('LOGGED_IN_KEY',    'WM7EJtm@9AX~,-t08t?,a,5ewVKT~EA8ro0^G+|BCAUwv_h|.$Or^w]?i{WZ&!gP');
define('NONCE_KEY',        'sV/1l}Sd^[MbZi/QLF]|u/f(V[1TNU8xZx0&wVsZRww&b-5{w>-ReoD0Gh}_V1!8');
define('AUTH_SALT',        'mqr}B^/)H!|M)!zINc]IM#5MTqymNHLx/J+)Auxp>R,2/S-oE4${@mpL0n>i9swn');
define('SECURE_AUTH_SALT', 'T73v2K{}jnB 9AC:U+-BbmUr?b`kh/jNAK:%dsW.@Zwbp4NfzU*>S3Xj4r qry+0');
define('LOGGED_IN_SALT',   '[4N[$+cR0.7.,}_Rdo-]hca#.~5GFh:j3+ij-6A+<0latWSHLzo@|CdS{lD|3d~=');
define('NONCE_SALT',       'xDCEk711,Axnzz%T*:=NvJy-HS=:G|Ex2NT(f-ZkEc=FDNbVM;-QM)F{H`pHl&57');


define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'horsestudyshop523');

define('FS_METHOD', 'direct');


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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

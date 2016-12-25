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
define('DB_NAME', 'u231325133_home');

/** MySQL database username */
define('DB_USER', 'u231325133_admin');

/** MySQL database password */
define('DB_PASSWORD', 'oIlF0gpDRh');

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
define('AUTH_KEY',         'wj^hd4+kkZ[8uL<ds0yRM=EYoLCIGjpO{*@|cY BEA:7F,>@3a*SY?n;QCnr+|ST');
define('SECURE_AUTH_KEY',  'PFYH3AToxr<B8C}6VkAi/p+wMF4a~^v*c@W[=*l^].R&-@s(KKZLgfoGWXCR8jJ(');
define('LOGGED_IN_KEY',    '/L~78a_^~yFVn7nG)W@G&($n0o84yz][>`MJ9dnP.O{=mMm5Y@4rMb~+u!9jGmgR');
define('NONCE_KEY',        '.cjXap.I*h @HH&7?(VXx[hK*=i1G+RQhp_]J-SK`tAdrKG?$%hKV~7yaLK)n~Dl');
define('AUTH_SALT',        'diUHORETq7;6ahP>AHV (&QI]uP/^t3a?HYWHXFNw3.2E^,[-LWR}=]odj*>(QBc');
define('SECURE_AUTH_SALT', 'Q?=_qGQ;K0VPjnWsMo2)55^we;shy.rcFq0q?m!m+g^^[C_O+sN9(qh_EJ&N^dz!');
define('LOGGED_IN_SALT',   '8{&SI?k3b/7zSd$5K8yjwG.IW4}21,_Xc<o6wN;F!tT;QMEa*Xs{Fb`S:0TU~k]i');
define('NONCE_SALT',       'aAxPFypcvaHb;E_VR7> YN=d`U5nU}mUYb_7`YBd1R @b: 73P:Ot12(B}`2KBMF');

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

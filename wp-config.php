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
define('DB_NAME', 'chevrolet');

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
define('AUTH_KEY',         'D>Ly=G<Ov[l&80{#S030/DzO^v5Gb?WPZ;dNGl-M@VCUMP%6C$rKw#A8B/)=.SLJ');
define('SECURE_AUTH_KEY',  '5V`i-}hZIml*OsIim!3Ei`BAoBQ+_V82ev^_7>%3jo7z{.!cv@(EmzhN[&g01Cu&');
define('LOGGED_IN_KEY',    '-9#)GeN)^*+7l8fr^H_NG(2yd{*E-@=+-wSbvtjR8EK7)zf&Sn(d0.uj?K+=)62V');
define('NONCE_KEY',        '@R-7E:.zUc3s6WnT[HkdB)X R+yK)|*,VXbd$R@{W:|[>73U&Xioq}VC=-n.D!+K');
define('AUTH_SALT',        'u(`KjD;t+#pu^a54szxC[s8`89Pf  _?-GGqqJ^0~V|<m{MAFy4A0Ly-u#nW*qXE');
define('SECURE_AUTH_SALT', '}/O+1pqtu1bY-cE$hn]ixW<~2*+C;3_Cbk|&7&2$~+m0 ~@+UxWwu_+nLc}A(RtP');
define('LOGGED_IN_SALT',   '^<H$zwle3Q~jX`_}=01.Zvx-D`2hDx_Tf-RU&9OT_T=RrLgi=H^G{~c6ma)wID!@');
define('NONCE_SALT',       ';E+$WeL8@4Xg(3LR.|Vv/&HJ=Dq.J0/`a--@?6eHWe_|m>l*]Ygx`)x7T vq|Tth');

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

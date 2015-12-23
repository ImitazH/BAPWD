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
define('DB_NAME', 'durjoy');

/** MySQL database username */
define('DB_USER', 'imtiaz');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'VH-y6 +6kEGnhtOrYBTB.I-K! evd9.N|0jp)9+3N:bwPE&yz^i~Cb,V*A>{:q$P');
define('SECURE_AUTH_KEY',  '5 jH{!=Xh!]iH:h}<8W!QAl[F{<+Qy3;Go?<ew2OO#+r%qRPjHLph:qe!+g{-HSZ');
define('LOGGED_IN_KEY',    '+;b+!0p*sL:pB|}-=OU:|yo81Gdk0UZ]%w4X6],f@TgFlv]xdofbSa/RzI >3mPL');
define('NONCE_KEY',        '~ SF##0W9Ek14v{zqYk)*T,^W6P+T>cF]A=jLHv}sYB#~@#p|ma8i0nsW3 {ktb{');
define('AUTH_SALT',        '%9fQy$fzp#W8{~f:7C2 ab?)my(VL_f#D+]leA0Q#eQApkKhA(f7k;(aSPg`D,d-');
define('SECURE_AUTH_SALT', 'ZZ+(E14/K|+3~)}CdP1.K+Xknh3:mH)[idH-J9>9iNnf{J ]@% TH8>IVnvR~&xS');
define('LOGGED_IN_SALT',   'WJ}<>^T.[Fd^Sv.c^V;O A3f(@:wEbB|h*{Ns+C>)AMB4{|]+z(5x-(j=?f#INt.');
define('NONCE_SALT',       ',n&tJ:Uhk7pgO<GOIv(q0&ma=$kR)Dxu6DZ,S*:=|Mn4CX[Xob%`zkKyk$i~7 }^');

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

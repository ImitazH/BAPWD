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
define('DB_NAME', 'class2');

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
define('AUTH_KEY',         'dMdrYFCot{ZF?t|r,nS5dM0}Kt@0*%GxF`Ax|p5xwnKw]PGTg{dy.YC>wa< |9Td');
define('SECURE_AUTH_KEY',  '0>^<WlE(z7;dlK*- Nnm+-{y+vEy1}`emEGfwv-v#>=*Bp&2QD}bt[?wFn?Lt8l]');
define('LOGGED_IN_KEY',    'nv*R6kSfE<q-#-ake_:o80*N&LK~lBakbSNbTWfZ)lWn}j.qQQQ+rA(0W=1T%OK-');
define('NONCE_KEY',        '2++2!S|ecv:$Qb&+}6ZSm~zV t+2KCMwv!Lo9=hK/ MCy;884:^6sa&l$ >,KKzb');
define('AUTH_SALT',        '<?v,nyZ|$p&aF|,7O/=tjJ5(r,[+M$sU>/V]9}7^Z]KL?zKku yz(^lz{eMUiY]r');
define('SECURE_AUTH_SALT', 'b}FLMJDMo>mWxAcS&k*Rj[ 80 NW{B<5*zt.TeiS_n1Qo9hq|I>5FjmUK?#x`,rO');
define('LOGGED_IN_SALT',   'fQ+v8s}-^J2AnHFb7l4[;~Cl+f? M6Ky,JzD}K|^-J`1*x7Pm{[{tqQ``0M+is6;');
define('NONCE_SALT',       'O3{PVZ@%b@fn<J?#: c_]L&w+6ee8Vq|Gs8UQ[{kI2=.`js9>^O7y$VliW$>xd!%');

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

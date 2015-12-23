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
define('DB_NAME', 'ebit');

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
define('AUTH_KEY',         'HA|-i=jOUY}Vt,53lJ*`r5inWj8q4hIT<hFz-8>IjGBlz31!j<1sSO9nUEG4#X Q');
define('SECURE_AUTH_KEY',  ']vjx^&D>23HoqE1,4ppOUJag6ku#!(Ekl8@[C[CqT=Dou.p@cDh,@4e1O(N4AhhD');
define('LOGGED_IN_KEY',    '}q91q|WGuRp+<7r}FuVTC=|llG{>~nyfXcy2A3fWUmYvDc_kS~.1C@Bf+IqSFzs.');
define('NONCE_KEY',        '{Tx6>K(:e{<-s.ej%89_8mtx9^,.{AX/[@~pUxnyuL{PGn9?WO-#=z8^-ZGtZTs_');
define('AUTH_SALT',        'K,[`^>3%x #e)rY|Ww|S,+nP;i5>xA,Tg/[3n %)HPY(JL1d8:o/9]<N)P<?vN!K');
define('SECURE_AUTH_SALT', '2cg|-@&5 9B<e3KL9;t:}[dlkC|M<@<c3&lS+!@6Fq~u(8l@~]86IMGt?%AV0}+;');
define('LOGGED_IN_SALT',   'Ju<tRqpuo>(*B<sso*5jcybd1ojZJ:.[xiu-##sQ)0!0d6BPFr!SCo<i/FS7-!V7');
define('NONCE_SALT',       'y54aDuTxA1rUl[r]bTV59u#-!2Q&]O@z!w-ik1 uPhoS<d?3wNk;4k&japskc{1u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ebitwp_';

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

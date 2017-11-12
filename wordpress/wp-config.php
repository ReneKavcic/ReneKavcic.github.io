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
define('AUTH_KEY',         'p;N:DK6@*-q^OlY5X@dfT^3:t]IYe}/y6&20,u@;!zlZ~Znm#%B;$%f/({-_.qVG');
define('SECURE_AUTH_KEY',  'GG%_1ViDBZk$-iu|(#)Tz}#Tl*Sy`B_FaE&!2<X3!gOHmD@ 2rPw]S]o8O j}#4J');
define('LOGGED_IN_KEY',    'NAzvof1T)v)n=?p@ty2iHW:Xz+X|V e}#:}__GQJmefmoK3oMOk^kZTVb/(2s<a,');
define('NONCE_KEY',        'g-ASeKBf0JMC+eN`zYH$#t<:~:nXXY5J(RMUgbMpPHI6l%`x6</g=pBdp=(vY=80');
define('AUTH_SALT',        '%4[6wJ6./|.Ne+#b*Pk?8G^|a%%7q<o.FH.tO8K853LC{gwIL+OKo@s/RSq5)&> ');
define('SECURE_AUTH_SALT', 'ry#4H /sD4P3.q?JWj:kYs0rtbH36&Dm3[Lcl3Jf9wwr^I:.sRI6J3mxZ^@Izeis');
define('LOGGED_IN_SALT',   'GPn$oJx-;M7nDFP3G7a~;p|,c&D~#}gV:!}8Th3*/!}KOpc4Wz)_D9ST-t?||!|E');
define('NONCE_SALT',       'B`:wD_i|FSV|%,nMW[JkKkO=z}J5;{y+uB&guS-z@AB(,Nj#!<dK0JT2ad}%`(zS');

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

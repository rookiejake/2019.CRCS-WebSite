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
define('DB_NAME', 'crcs_wordpress_sung');

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
define('AUTH_KEY',         'yx~l@?bVy,Xxu2!6[pF#!l-`A!XKKZHd}hGJpAo2(Y))l*)gi6A;.N/_Vw@]%6wc');
define('SECURE_AUTH_KEY',  ':UXEL3&-xl*>kv0#_-awQ#;69=Qe0yry*6B1PNw?gVh`l#rmA~KF`{)zocA)s:{S');
define('LOGGED_IN_KEY',    'CXV[v0Q`<xGx]+hZx~xC9#Xx#}^wD| n!Jl<rzEF$y[t RZDz8(E,_[$W4Ea]. E');
define('NONCE_KEY',        'gQlPNC4wVpI^:JiW^u`)u4Wo8BE!W-ToK:o`k|wB$kN5)7n~3[>sTISJ(kROZj+o');
define('AUTH_SALT',        ':#%abZC<Hss99LP[g3.ZZiW&*|G[3IlB i8&s9T5;jN.n5RJDM@kDuCk6deWAA:9');
define('SECURE_AUTH_SALT', 'v`ACjOJ2o+?zWJM1gnT~VhET0 r+!*MM7lUF<$.5o#(q!t67N(VqK7W>bi`+F0h]');
define('LOGGED_IN_SALT',   'wUczHN1/7_L{2r%1&i-[#]oOgkEI)IVy/hdZ@>PuN=TC)-1,T)So[4+f-EoAx:KP');
define('NONCE_SALT',       'F9ZgA$dVfZB`bi)tx~#~%{N4 r,}6ZBVw#Nrl)}&yl)-4giZpb/kH6[X3xL?FNF,');

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

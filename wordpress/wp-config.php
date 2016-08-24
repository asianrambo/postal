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
define('DB_NAME', 'crossgnc_stephen');

/** MySQL database username */
define('DB_USER', 'crossgnc_stephen');

/** MySQL database password */
define('DB_PASSWORD', '26091995');

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
define('AUTH_KEY',         'lO/puCJ4/ RLhJ.p4;Tv].D*^_*LQB#q}l?_X|ajt+33y,%)i$^6*VORW{YN8X?f');
define('SECURE_AUTH_KEY',  'G89PWWfLplx0>S/!K0h`|W;- :PNX*6]_Ul=n}*>$t# +=oWA{*i-hkPbW>vHr`p');
define('LOGGED_IN_KEY',    'ex&Ey?vAXT52V6}O+H!y3cH0M^rN$!v_(zv+MBK4z`[~pgw~J+M}oi1-!fB&./vr');
define('NONCE_KEY',        '$A0@<P;D ZqB5!*{d<5wz23q{ N:NQB$xg<Otsuo?8icx@_Tn)t0|ug2^;kvjCPq');
define('AUTH_SALT',        'ltVO^-]$yMvVyK_c=}~AG0|*+%ZdvG678r`I?8pc=x.HKs{`HwvLXF_p&x|>]kJ8');
define('SECURE_AUTH_SALT', 'YQ5E=~`5fnxIgK2R(g BGilmqCPIm7H55*P,Q61y5$A{L)W$H8l`>UJw8(a&>-9A');
define('LOGGED_IN_SALT',   '=SvOt>|PIdZWeMjQs=rfmFZ*k>< UG FHLx5,K Y|(t,0}N~N#0^G.%f+UX67xZ(');
define('NONCE_SALT',       'U_GRi>Ea-}y3R?-dkrJbezc5FpmMd5,T#P(%M#b5xX=NXqEM=FTM`iwqu2RqU5Y;');

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

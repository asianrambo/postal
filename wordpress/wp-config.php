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
define('DB_NAME', 'administ_wordpress');

/** MySQL database username */
define('DB_USER', 'administ_wordpre');

/** MySQL database password */
define('DB_PASSWORD', 'G6M&(hR6~L*V');

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
define('AUTH_KEY',         '02}0O(423=)f^Q&Hff`)_R8,&@aEXRX&Vt.l^4ge(=@S;`p1be(&1rG~,h5M~RS-');
define('SECURE_AUTH_KEY',  '7K:Qa47,P5pDJ[HX1kqF8f7qtj8Arwf$w$7HS}K+3|<r[MB$ipdEdU70a}uOo >t');
define('LOGGED_IN_KEY',    '1k11o`.o[ahiz)$rC0-=5fkrFsT?/Eaxg3d*oLA1T},c<WY4Nu~g(;+Z/r#`CjJQ');
define('NONCE_KEY',        ':0vy=zK?J~]H+l.UAqrk!Nf!wzQa(]-L;8ejig<6poHKQ23nL Q61)@P6CI<u;g9');
define('AUTH_SALT',        'fZVc!9cjbKuK]w4?OUke)fWQgcS^;`$iQWrWV1wAnUgUEdfP1=)=J<AMKXlXc5q#');
define('SECURE_AUTH_SALT', 'dhnD(D,OjxabAqhIG-hqYMzvu0oVL[!t=)DyW$o%UC$yKY:rQFz4P(!XqH~o01Q9');
define('LOGGED_IN_SALT',   '@!@Tc,xIb.i>Yr+!ai&zW2;E051Q{zlR7JGCfr>/zAS/tjdkhZI&^P)GjE#<Ku16');
define('NONCE_SALT',       ')B8<M$YbZXSdblB,4zcnEiCU5X[6hq}X^!pAd(u`&=?&6oaw;X+!XO1srR,$ Qph');

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

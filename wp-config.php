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
define('DB_NAME', 'list');

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
define('AUTH_KEY',         'ul`i7))v>GTI]RPKu1U@i{*:BJ]d7ufkJn$ X$0DFwJ&33NVN!#I&w||GJgv(93*');
define('SECURE_AUTH_KEY',  '&mOV,wD(9]y}qX<XEI`1YC^)~sF<f*h)^/diRxas=C{r?Y[ho[*n~hl$s5$s>>(+');
define('LOGGED_IN_KEY',    '&Cj <</z0}NT *BJ1|2Co~Q3x)@g~iycS|n6*,2YA${QYh<++q@ht.{I${g/fgd/');
define('NONCE_KEY',        'u7&z_gt+=b=%Aq;OOhZ8cjija[0`IRJl,fbWb5}ZT>+|d]Qp0xvt=$*tZ?!JE7$A');
define('AUTH_SALT',        '2%8{#wN;!gr,PYS3O#dn{#0nxB(DAKETWqbWBU`h=hb]f(-ptDKT89.D^1& ,o&$');
define('SECURE_AUTH_SALT', ';aC%)yfZpkyf[wsF1:3bTFZzDnh.0w0 QD7w9r5Ubz,XT/3s`0R j-W8 wgk>9t$');
define('LOGGED_IN_SALT',   '3qB2xKO2ez/#<r6f;-me}%`rTy:RFqAQ_/3k2Kt~t`W?]BxWcLa6wG)U ykd@bwS');
define('NONCE_SALT',       '`>pgq3B#cvW@CM=+YL mk&$MRLNj|:CXS<`T^aSPQ{:`02I7S(Iea:|Qi0}bybx5');

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

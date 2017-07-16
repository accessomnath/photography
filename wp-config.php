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
define('DB_NAME', 'e50646');

/** MySQL database username */
define('DB_USER', 'wpsql');

/** MySQL database password */
define('DB_PASSWORD', 'Mysql@2016');

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
define('AUTH_KEY',         '^l~da87dVd&perbwXQ3^@!5{@_lsmv4bGfFW:*L<{Q`!O1,dk,mzINJ<uD4*yiSX');
define('SECURE_AUTH_KEY',  'LIgw(^.>f.?-(7_hbjg/+u[!Q_<[q74Q$:d3ED]-vhm--i.%e#vcSpO1)P+6}L_J');
define('LOGGED_IN_KEY',    'f3xd07%N*-LfbyGJ:>&r.ag^Ar_Q:-k-*m]bc<=YG)x/Yy0qfKk4Xenu[K_>:*/T');
define('NONCE_KEY',        '_3K9nU=oKCB`w{p.77_w{Wce#vzoe!Yo]By|D8%m:C+UP kbXb){DXA9To$`*&Q8');
define('AUTH_SALT',        'y*RmdKu#J B!t!5LTw4{tAe6h1W9}^fc8Wf[lhdP|A/V#ao)7op>B`tF8Z7%4lFM');
define('SECURE_AUTH_SALT', '>QB`&Qd]/#)Umn5_czt/Qx1+Z*OVs-!?Q$r5 }/4m(ZaC92#LIlPFsGl}%ZBIR^|');
define('LOGGED_IN_SALT',   'nrm)-NJ1_(sDw,T63Pn__gsUX@1&A~ULOoxY}9/[ub]Vy@1A)(L &4:?D8xM1_Ij');
define('NONCE_SALT',       '7FLnrxV1%/@~3wiumf(@(}V^U./n@+_dVLet/)mNmh[/N{T57UahQx):5Vl:lt7m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'byavi_';

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

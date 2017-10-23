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
define('DB_NAME', 'sql12200837');

/** MySQL database username */
define('DB_USER', 'sql12200837');

/** MySQL database password */
define('DB_PASSWORD', 'WtP7ZwxVBZ');

/** MySQL hostname */
define('DB_HOST', 'sql12.freemysqlhosting.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '!*suT_fr40-cUEc2%+~<;iz~BGpf_y~M8pi,S]FWpIdtWZ}9jqZzco8i`ksU%`;_');
define('SECURE_AUTH_KEY',  'rNva8{|!QsnJZQNi)(_Tf(&J56?RC;tfBDv3(WS@VnL cb#{nn$qzFIAGicH;ONL');
define('LOGGED_IN_KEY',    ',hyw`h9nY^;;{1BXv9y[A%vlmSW_r36*<=S%K^QVIbRtPk5$&P8d1Av|=)v9`oTg');
define('NONCE_KEY',        'Y!}k6zih`t7Z0UD]=tfv/n&<aCNe/!jKDY=e9x_j7*1:cCt((_Yu) P 6sx,Cb!]');
define('AUTH_SALT',        'tT V}~nBl*8enPmD3t{f+i6y98BM~0-o[WEGmy.QT6a!]Z]sX0HG@KJ)8M~]ha3)');
define('SECURE_AUTH_SALT', 'JMpaGB|hiD?M8%R4gKu0MZ}:wKaMQkz`DrZ:;1 G|#hL.qNEz&_Y[0/AnI`?YGJ.');
define('LOGGED_IN_SALT',   'r-#!_fe68Z U:ptV#Zf_3|tUpE5@p-HU .$ol%B,PCL8 Y.yi5l^ *Cc!Hr)@To_');
define('NONCE_SALT',       't(-lbS<9X3H>!P86F5Q, }~vZp)MC)jKng{k`gF|-nq}o2[@PXk]8ji)nhaDBnnx');

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

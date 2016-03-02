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
define('DB_NAME', 'ready');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '0yiW6/; B]7*.+=M!reG9H@MVe}/9lk7}EmiH@l--Ly79iU2|+fZ}!.n]y(+1z8M');
define('SECURE_AUTH_KEY',  'y~+d*2+/TIklxMKx/dT%mp=/HgC4>CjJsjsVJC]E$VtSZ+t7<X|3JVRn%LM)z4gO');
define('LOGGED_IN_KEY',    'Ij=[s]6;Q.EcP{nsO;aVgDTS0zZI-5rRDn20{EjX;(XGm&@:-GcGhU+2|bw5?=[m');
define('NONCE_KEY',        '~lM@sKU`+RS)ltWofs{_mrGz1[kprK.[04X!l*LoiL QKQt=O&kQ2RG!XlITP[_{');
define('AUTH_SALT',        'qSAJ;:^O=m?`_^CD>QucMht>K-NXzaKI}iB4+M8/oeD6^:&c]J)pPn^PlWyzDO,O');
define('SECURE_AUTH_SALT', 'dK4?hJ^;j4|*!l e}<|_~62}o`a+K17:c1H-w*8H~E$(!y)g&/qnhxae0 X3Nf;<');
define('LOGGED_IN_SALT',   '[In!ui.WeE>bW-&%.aQGg>7].l]Wa/4QE`<Vh>0AB/0g1c+U^PsdSKO 0)wQJ03Y');
define('NONCE_SALT',       '^;4LNQYG%6ZNR+ch`=;[-UkywWqIf+I.[*,K+ EEh<(1F-rs<i..$3FR:W5,TL$0');

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

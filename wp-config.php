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
define('DB_NAME', 'coffee_time');

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
define('AUTH_KEY',         'k2:(i]=$:rWYM%j08t)asi,ZZmv5ylP$[]JTiRzyc>PXN}cYdF?EiqzfaP+4[l*6');
define('SECURE_AUTH_KEY',  'k)Xe(0rz?9m%q`Zv5TamsUb5==(O}v%UYS|:SfMEk<3lnowu +slK,aC_#DdHA:`');
define('LOGGED_IN_KEY',    '-f(=TdhJmEMJ*>?M8WC1InsG6`hL6x4*<}$}q} kr_whZVVgJ4tne,B{)1)~&}N~');
define('NONCE_KEY',        'a)jm@,6&uz$OueJ~hQ.;)cuJ2azPr#AX06H2F-_&Qr-,tNcur)9`/9q:#}2b >|F');
define('AUTH_SALT',        '>wgemw CekMSz1+}h$gfLUB5^/H bh67Wyq;0,0+Cn+silFoZ0IaHS#W6z!61@I[');
define('SECURE_AUTH_SALT', 'l6w(#p;(*6YBfn1cjAv&-0>4iIillI_}fPy87ZV;%~tOm$JCCtOVyl[Q-6tS;Xk<');
define('LOGGED_IN_SALT',   '+-aFCYBl~g?bAD[XxdlDP9n=KrY4*^3Ob35<`{q$1y-b,%EwetpzIz~>@:;n?W%T');
define('NONCE_SALT',       'l#j`0^;`n[<ldmI2uf]hLi:Ztqc|%0j%{L4N8&%T3K8|sqA}*tf5]d[rOX%ZvnF#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'coffee_';

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

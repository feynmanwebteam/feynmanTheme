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
define('DB_NAME', '4g3tf3yNers');

/** MySQL database username */
define('DB_USER', 'd3b3Ztf4yN2l');

/** MySQL database password */
define('DB_PASSWORD', '3Zf)!3Y32^&#Z7');

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
define('AUTH_KEY',         '0I*;r19Fva0%VyO|nI0RD3j_)wR:-9kZH3oZ|R_X.k/?:e02Hn(1izwh,Ib5_r9c');
define('SECURE_AUTH_KEY',  '_B@j0|QktG8Rn =]IQxjv#3CtM(po`,eweqG{%Xv2kfD1h.WB66TFvI+Hy/b$}=W');
define('LOGGED_IN_KEY',    '#Q,`%ReLrt0ae6R;Ac~amQ,HMoL4j0AViNS}p}S?D2#IKJ6U%,Y1u[,9&<2epj}5');
define('NONCE_KEY',        'v$(0*fRlRl@b1ka.s>c[u]zmR]XyrVmC; ^cy_-t7BX`Z4gw=O6c5+EE3fH<;?S@');
define('AUTH_SALT',        '$5|7:h6%S-U$6iS;15IOC{LVSZRf)WhXWhmubhx2 qI=!v$[mUsx04v81hOz5u{/');
define('SECURE_AUTH_SALT', 'jfBQOnIDX=433|r;; 0S}Fkv1z<O.Kv%.Gr_Nw$J;@lMDdj;8xRB?__,=IX[nJc ');
define('LOGGED_IN_SALT',   'U<MYF0+H$w3bd%M@p$t|b?:KuY{Mc!fEH:bXC.Uf{KN<X  .Br&.}(7Tp~rCYx;)');
define('NONCE_SALT',       'f#y&b$Vl Uuj7vFcg ~@cwmYk9|OcpaW0d z9:t4=UpW4dw3o}56J#3z;|-6w?:H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'e3x_';

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

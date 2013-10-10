<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'krayolabs');

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
define('AUTH_KEY',         '!a6XW-MFq1GBIs7*Xw v(X/|!8Ti+yx&r^A*k,1k;8mrSls2q y)cG5j?2Fly7HB');
define('SECURE_AUTH_KEY',  '`v_u*YyZ5BAc09xVg=0eSJ1H=XEH6~tT:]p/{z!iwWK6?>Six*|6LP?RM#j,Z`Lq');
define('LOGGED_IN_KEY',    'hExy/FAtO&w<IE=9G4/,z>gR$Zu@0)}IH,1{plv3VGQlGm;FbB#Rs>Phy8Jtr/%H');
define('NONCE_KEY',        'JO;ISq`$]z_+bSy1GaZA<Er4H!:+QL~|%Ox])QD-2}63]3<6o_:BcpZCm)_zL:f!');
define('AUTH_SALT',        'c6`vGRj;vjZh5?K+#uQ;]4>k3e[p2I{/zcrD2cqJtAwXh%6&@5:rD~79s2u>zN)Z');
define('SECURE_AUTH_SALT', '2?|LxO&-ZK9.T7{/WdS6`bH-v/)iv:^iPv [1Fu^-9cREkcC<Sn5h$6Xs?UmvuyS');
define('LOGGED_IN_SALT',   'N<eEW~U;*:D56Jg<Tc*kN6IPKd$vLC05n3mx:gmJlIZa~s-!S+X#AxTz-:8.4U!,');
define('NONCE_SALT',       'ilg!zkipFS>Z<*n`/Xa}^ZqeQI;,)cC9>BaUE;5o ?OG-1gRCzt8i,/k~Ez#|59k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'Noel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' b)`S5T*izs6}gLL,WQK.OC8pK,q^);zVt%B3wwmfV<FO8([pXe_6&nc9PD6}(!6');
define('SECURE_AUTH_KEY',  'i~t9&leBo9@f=gs`3LTfbXClO}s1U0hs*>J!/l<39E0/`QNT$Gg3TLg(X~c2Gobr');
define('LOGGED_IN_KEY',    ';XG_Qp0L59fZdaq}ocPHJb=FX~Sze=A<GMa:P)al<|[K:KDWeR-}b>pl3]=PT~=o');
define('NONCE_KEY',        'a[[jIh)@>1@1qwr[gjq.Et(nl|1=BAy{S+/yJ}*j)sWgC9tm=Mhu6/9)mEJ2Hy]P');
define('AUTH_SALT',        'F#h 3bxY78z+7=s +>l;~E*b{$5K38?lfRp`;iw<RwYB1Ws_x1pk|>|w9;0L&XBU');
define('SECURE_AUTH_SALT', '$q/,bhKi($;ib1Gi={7Wn*$]xEB>A70WOTW+&o7Jn^hKS@>f/X2_4Jw`H|([n@_e');
define('LOGGED_IN_SALT',   'b?-Ps[iHDtN,xes.uMVNh![M?#ImOo[}w;:]dd5q(*}?k_98_j 7v<Zw8((w^6Ez');
define('NONCE_SALT',       '?3:YP<n,SdZ:<C=8$$zcEostAtT9qtE3-D5eiR2&L#*O-l/9eMxfeX6yg(cIx{s1');

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

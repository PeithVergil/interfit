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
define('DB_NAME', 'wordpress_interfit');

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
define('AUTH_KEY',         'uyW%bEN*XY]V|Z]d2zTf-s|+53O-+ZktwBt;|g,q,My5Fbk2j-3T!MrWZ Y-K9c^');
define('SECURE_AUTH_KEY',  '%f[6vz8kV`7!=X]h:zxUa-^8 Qim]W3Cq[]kwoN,FZ[H!qt){/r;+n%84.:~Td2?');
define('LOGGED_IN_KEY',    'azVu3iQ[.`3_t]Q,}Vf<,m?rI[p3?#ljW8)=uc(sR@sLxMDrT`Kpvk|,9Dgo|Jxx');
define('NONCE_KEY',        'ucW]VWJh23h=| >!O?xAsl5|[+/K[p!Y+uJTqNWgjyZ&S1D{pP[~9`+FHYbmBx/d');
define('AUTH_SALT',        '7Uay,p!Y}uO@H#gNzD|RD6^45B<-dDxi%L7~*}V:p{r+$zoy.r5@y.:$-6l_6QUA');
define('SECURE_AUTH_SALT', 'u94XP7xjF?TUW_-6XFLw**D3^jA{aLj!?k<K>v*4>D-,<^NqO/FFeP6,T[Q[->`a');
define('LOGGED_IN_SALT',   '59?ypR4etzdr!_xn6fnWZ@N&/<AXL3x1o?@#l&nRuwLtVWS/-B<fr>-B[v;fDu#>');
define('NONCE_SALT',       '*A;<-/4U8TdAhk-Dp7P}CVwrmEXgqk@m:yce<#HM+Y}@-<4c3,%kvs6{_X=6FXiY');

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

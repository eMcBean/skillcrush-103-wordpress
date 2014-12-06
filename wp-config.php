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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ',jW@y(L@{pMv_>.&[P4XnD$nO`Q~- ]f)gBk)(B#w3(2#{IBK}ZyJ^|D|Zvhvf.k');
define('SECURE_AUTH_KEY',  'ZGFOqyupm5P,?*e}@_Mi1 ,GM%:%{61z7EqGgL;? L|myd>^VLUB>24~CmQ-XnHw');
define('LOGGED_IN_KEY',    '.c*)7+1G9Y{2#H+rQ(kP/PbJW]Sn{e,7z6Ze /hwj6f7,n[<q]{/)-AK^QLS%m4E');
define('NONCE_KEY',        'BvEa#Zlcwov?V7HU-Y*!&&{(7|a*<^yK#.{k{0|G=O`&x`qKX2[*&J&fr0Db6YVt');
define('AUTH_SALT',        '#$N#f4l%s[#YDcBrm PBG6CVZ,5:pKQ[2UAmO`bUVK^;c^v1){*AgtgBkOAQ;hD<');
define('SECURE_AUTH_SALT', '_4^V@^1+C$w?lXyy5rn6*(5A#Z1KD<%R!IeQ5RHy%]_HgUEO]Z5Q=mp0~s%!KMYU');
define('LOGGED_IN_SALT',   ' 3=`mNK,L|)7{+IFkN:uejq1?vItb~q)z2%nFLcJkvybxsUH|L EKVU^%0l)|$Tw');
define('NONCE_SALT',       'c:nXDj*KCvn3G5LOIw]Y3I%Nl(^l;FdU~8J$Te{-<K>h!{q k?33pwGWE]AXc+nm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

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
define('DB_NAME', 'dotslashed_com');

/** MySQL database username */
define('DB_USER', 'dotslashedcom');

/** MySQL database password */
define('DB_PASSWORD', 'hh3gTrHZ');

/** MySQL hostname */
define('DB_HOST', 'mysql.dotslashed.com');

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
define('AUTH_KEY',         'vU5RL*@*KFd&u6T2b:MWYs8p!#EZP6c3:R!^Mjrc?j2vb$1&_?4c_FBl7#wH@9EL');
define('SECURE_AUTH_KEY',  '@#M0|B6hzJXQ8(AOaOA!q@JAg$gkip~Klbl1jpRw(I"fF8KTXF@O;#5K*BfKtv!w');
define('LOGGED_IN_KEY',    'DI$M8UqNr??EDs0s!J?nb)JSdU~@(%osX3jP;ohTBwjPJebF8^;2|D1gFB!KT93$');
define('NONCE_KEY',        'Kp+wojv8*DKl)Rf3#1A4|)sTvs2EXws8Nawm(~dBF&Yfd@vXvG`YtQo2bDegnl|t');
define('AUTH_SALT',        'G8FJ#fbC6sLVu(6V7C"Mo8`3!T+XW)Eri7VQAHRT(59qM?2Y$*z?S)W5@U9W%8R$');
define('SECURE_AUTH_SALT', 'vf8b9:Mc^35o0Vd?|Oy&2t;P?sDrBq;Fk`M(TJ`3s@N)Gz/oP3t)`9x@S&Q4!m:K');
define('LOGGED_IN_SALT',   'vKilS3eR^wDv`^G*)Iw$/";83V%!nZPGe7SP^4$x3KXx_MB6lV"3M5@|$x5u/%xN');
define('NONCE_SALT',       '$G6i`yyq)IFm0!?H9Wol&ZsMZSy+a`(!8pNY8zy;F9j#(uyi_6VsHqZcXz5zHWzu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ytntsg_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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


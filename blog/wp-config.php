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
define('DB_NAME', 'm1CrGaxv21');

/** MySQL database username */
define('DB_USER', 'mlcRGAxdbUzrv21');

/** MySQL database password */
define('DB_PASSWORD', 'Ka9(3j4J10K01!jJsd');

//This allows for local dev on this site
if(file_exists(dirname(__FILE__).'/wp-config.local.php')) {
	include (dirname(__FILE__).'/wp-config.local.php');
} else {
	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}

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

define('AUTH_KEY',         '3{uZrMir0nQ4YAIu*?9pA1OaB`lg+ZS*V]+na^P`303y+xr4+&%M),c&K]M$9NMD');
define('SECURE_AUTH_KEY',  'n]h*^7j7HLf@EW& {.TQ*K+HEx$T4{PU}7;`FiN^R>nmSW%H6|AQf!,LI!V{$F5j');
define('LOGGED_IN_KEY',    'q+$t-`+w@|-zav.VE;#63:f/$VEExoC/cl|I1HG}W6#8d&pxRG+(s&|YZS5fz(RT');
define('NONCE_KEY',        'xM)AEEIcG,~17O($0M%d})u+eDx6Fg]V_>[(JBUl7jC`|)n8zBPS%TLI:;J,~9.N');
define('AUTH_SALT',        'XIx+}:s5tl=Kdlw#x5;)50.-$A9Tt:ub|%ER[S*dBA:E7j>?eC%$k_8eS-dt-g5H');
define('SECURE_AUTH_SALT', '@/`j#|,hd6{o[:,c4%`*js{~XS]CY>k#UN37TYN7v0-,J/g!l%8J8J(YS~%7]&Pu');
define('LOGGED_IN_SALT',   '+G)<PXc!@;O%mnTd=Al|#blf/~9++)x9]Re[0BYh_#1NDB;ff;UAX)4XNJ+.Io|%');
define('NONCE_SALT',       'g;az^~[^Z7xR4Jn<z__FFE8&->Q[`Z0~B}5ZpHIdr&.Y;fBQ{O:R!c2HLm#x})l4');

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

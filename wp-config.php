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
define('AUTH_KEY',         'lYTf1ewuuC%s[/zt*:X+r<tk)(cMC!w[`h7`gtY*tue9X-hdUy-v,e:5XTX}F6YU');
define('SECURE_AUTH_KEY',  'ZPtC|ew0O(<ly`V dM*&A{E8%oz<!RkXjoS|!O8jF*4k{8^xCNF6jxO$E@(C.>49');
define('LOGGED_IN_KEY',    ' )f(#r-8GFvG@MLjn-y78]Ji??vP2n@QJj;|~GkqVl}_b+G}(Mm$ih/nk}i#i)-8');
define('NONCE_KEY',        'E1.f=nLDMyTN}3-V2`{v_Te6(IT%qt{}C7=+O]R :44e#HqA+`ds<:Dq]Wm-[m[u');
define('AUTH_SALT',        'eH^S@c2q>gHW1m%SB:ozAnsX]GKeww|4K-%X@Ub&rQj3f<oSW{}vSNTm8hQDSg]#');
define('SECURE_AUTH_SALT', 'F&A%3^P6Sb$dk>TZfoQXa=wT#[E{3-RLf{ 8<s>4dWOSf1.(1^5.xqb=$`uQb`o.');
define('LOGGED_IN_SALT',   '/37`0eum[Iyb-o4j-&%(<N=Qs m6`SINz<AtM1>#wf;oRd@/5T.+20m%[tb1rf 2');
define('NONCE_SALT',       'jU>{GS{AwX7+/v*mXnAgF6J9xQpmFTl4Vy[5Wq ]hU(xp|VWcs$Jo0q|E&SPXI6-');

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

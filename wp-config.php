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
define('DB_NAME', 'megan-smith');

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
define('AUTH_KEY',         '??N7;a.+DOvl4i-xJCBZ<Rl; +IN3KbQD!INdh^k+2;_Kjv%1t9b9Wh`jQT2OdY+');
define('SECURE_AUTH_KEY',  'yVM1_NcIq{OIr+B{9Y4_6P@?1@Ifoq:+|.;Z#x9U?/z4.W29jGWFlbsmA_0!6aSm');
define('LOGGED_IN_KEY',    '{&DSG6<)J74[0p)vy{MqjxW9bA|0@.ikk3`$eG9b=_/!8-oY[s[*5!VvhU]k^&Ah');
define('NONCE_KEY',        'i,JBaA=r?egbO,4=#[nu]&;TxZk]Lv|U0M[^u)3%ve8J3p6y~}6AM7ilFc,{2_WE');
define('AUTH_SALT',        '0.Inhwl-jU</_+7dkLeXR2#sIc,!NG+mK6bqZdND2-[-2F<``:C$+X;LbW7X+4 !');
define('SECURE_AUTH_SALT', 'S+xJPfRAps90Q_XxeRHZo[(p$~<Z+ck828@FEy{p)_by/XgbbCa5YYf8mbU[@#lP');
define('LOGGED_IN_SALT',   '-_A,T|Yyuy{.(Ya@Ez|vqB%)[[G[9cC GQu&(<|-?a2<UQ;G+/l}Zt%CNioJ>^Yp');
define('NONCE_SALT',       'T<}F6whe]rB8P@xbAvtg?tk 7.>cLm(U+~WDMf SMj9ozNzlsy[w5z,zyjX{2`Hz');

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

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'k<%ZEEObosct{xk~NP>zIQ|n2VK-g:u_Sh1<.wG /6xaQ@z|9a=RTs/li_@J%i}M');
define('SECURE_AUTH_KEY',  'Q/~uq+XM+/oj+sfQ=p^NJuUs8@D*8EnRx1!&=MyA$F#|j2-DH  F)^&bt?oeScxK');
define('LOGGED_IN_KEY',    'eM8XJq#ctILExIF_`SMRjtn.T4[@z>4RrRwGP^0trc]+YZWKv!T6QkgT/~d}czk?');
define('NONCE_KEY',        'w Nh3Sez.l;v2XtVlMqA.m;+U?irSBw^=.>lo:vKcFOXKe;rhHh eUz-KPa^~D(J');
define('AUTH_SALT',        'ms^zVbHdL<;),O<8TN%u3eQ@t2?[3)&pT$WV9&jdEX[h%)kzgE)FH)8MwLh$#}`g');
define('SECURE_AUTH_SALT', '$;O 0Au4Nr#8DniB@U@?+$Wa[TWkFPj8lZ0CB<KS/}V5)}h0KU{Sd(i?9$k7P_IZ');
define('LOGGED_IN_SALT',   '3uNtRu KvzhXEr<o9Q#$-}tqgAy}J=X*+2a~F)h/;r*gF%VA-E[IHi~Gfcl3:p.J');
define('NONCE_SALT',       '/@PBDs.>E#qa3` Q50Btq8jRF|@Wd5l|03H8e^$NarZL@Y.bqU7oS|%4}%+)WJq7');

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

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
define('DB_NAME', 'mastersofmoxie');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'z+3%:mmd(6B#@N_,EhYC>6}$|QIZ][sG=Ft_^HWNbgQP8x>P%jKKa<[RcZBH}PK2');
define('SECURE_AUTH_KEY',  'B XI*`~nbN`|G2x3>m5E4gAP1M)C=p]{;3EVx,, &Yb],1G7k}*$+=2nvP-v3}in');
define('LOGGED_IN_KEY',    '=3gC;6iO)+coW5=W5D8QW8/Jms,JmZrH ~(|S1RVE> :8~lmJo8<yj%osRx c-r*');
define('NONCE_KEY',        'J).L:$n(,gj=Wn(JvjWBfriBz,0C13y%=XK-PTw-1<2o([nICTR(g-,7TE#O<73x');
define('AUTH_SALT',        '*<-p)+sy@h=ix]S$Wja7{wy2CwSvp<l]W68QCz=n#wA}OM|-d:-_#{C=Utz6_ce`');
define('SECURE_AUTH_SALT', '~NmCm.sgs;RGcwOQZs@^AE}LFE_x=/W)QPGCvE^YaB,+VdpPKxsL5:cAg|^Dw{j}');
define('LOGGED_IN_SALT',   'pef&4dsaO q8H)zc/adV!ra0,CE,pB7(63!_?=I,sk$_RCGJDecj<drnaWM6^JPb');
define('NONCE_SALT',       'CJ4`4`2_,4I?{|V>=@N2C5ymTu,S9X*?]yCOT.,8ePLIoI+d`(vR-RI!GRJ4B+!e');

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

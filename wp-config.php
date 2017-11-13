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
define('DB_NAME', 'cms_f_12017_wordpress');

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
define('AUTH_KEY',         ',4F|6w MSAfA[UzK%ss#>~Upa-_Xv~guxT0&*f)7QWd@6hN/w2hPHCbqM90Qw8Mm');
define('SECURE_AUTH_KEY',  'Yl@P7tP0C4/|V<X,y@r5XEBUNHC5R.*;[YuqothB#W;%-pP4X_gm[x,^q*an[mAG');
define('LOGGED_IN_KEY',    ':P-YkLA0N;.PDdO7np7BL<s%(&QH>7:3`K`|]}LT{LyVc:MQijMmQ0)+YVmq>$=f');
define('NONCE_KEY',        ']fG[I&R*a;)lre/vrv|q-r|Dg4]! aVmKD(&bw!iv*VU2h=mHe/am.S3PcU*y+--');
define('AUTH_SALT',        'gI6M4s&54be=h<)tk-}!Wjo1>2K^@.9*v|@]{*r<0c:}__}^}S<iPxOXB#u?s}n3');
define('SECURE_AUTH_SALT', ': x:o R&O;oBn4bOigl!h~-p(X8b|y:Ul,(1Ql b79]1Jy8NJD@Y Ej_pV[apTgg');
define('LOGGED_IN_SALT',   'IAK+PC0U}+=J72e%)2WOsbLFHayC2&$i2(yq^@uM@1[Sqm+laRPc92zyx>:XyCx;');
define('NONCE_SALT',       'qU7r^RuKYIW8CYRS2{S,.YJQ>Cq?e&,&B(@-(bBVarF:</x jn|/wX!JMob,;}9@');

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

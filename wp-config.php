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
define('DB_NAME', 'GTmockapp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'passme@123');

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
define('AUTH_KEY',         '8(3nRNb_*X&Qr]Q!j-eHVlhn &_=!n`}Os5yl07z/}9[O0/rc&LBR,f{`&IaPzXc');
define('SECURE_AUTH_KEY',  '/m<aFdDiP1tzqNZT>6LNS.VHrt<bQY78U*k.:MV 6 zF-[yFO&LD?opF0P3VEuZ*');
define('LOGGED_IN_KEY',    'gCu9ePWs&yw}]U~&lHC>E[/HQyw4cTnMh^(D Ms$0nr(=j-:Z-2C0I|d8rsS<HlJ');
define('NONCE_KEY',        'OloH[L[?,*n7Bs9*85shkv~%hk*bAx{=i[&}D[)Gn)H?EKS%##kyv&r2*l</Zqmo');
define('AUTH_SALT',        'L<`.=8&?8q9-o>}GIz&6sUYpff)z2qUce:>yK^W|*BN|MZ||3y%<1V4s:f`&g-V_');
define('SECURE_AUTH_SALT', 'B`c%U6S#m*~WK(!KpP)Rr&t1Z~#g>7_Xwyk{cB2?pTX8D&#_Sr/1G9X=?YBF)!V>');
define('LOGGED_IN_SALT',   'nUy,&3=$Z:ihz{om%bMHW9K5;3sB#WxQ6R(2L}<vnxHOK1z}s}NTkNb~_6Xq&?+_');
define('NONCE_SALT',       'XXOM>ys+O1P[)-1HiIj;*IFjq*?2sztTQ?<lM9!I$+jrt7HX]m)t5P=XtY![_7^U');

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pastry_wordpress_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AMtB$1j{up-kOarMYZvXv<NWd@5^;|whdcfkB8sS8~ic|X}%4@}.E_,>1SR{W(rS' );
define( 'SECURE_AUTH_KEY',  '`V@?Us{GF#CCNU5BtQhO]:#S%vzeY<uh0AcnyC[WYGbQ$fHkGy-}1Ox4K|HV~-?V' );
define( 'LOGGED_IN_KEY',    'SW&gY46y}aoo#dqA5zV0#`7SdZqr-<ZlAB^bs^55&L.-!WzgmfdM%KK]gI,xyu@M' );
define( 'NONCE_KEY',        'g;Kl5?UuAW#Kvu$Xj/;9Zb/c4~i,6^kYat?.7=:Nh9GO!,nA6D;0NaV(o0YFb&Ys' );
define( 'AUTH_SALT',        'g;Y8Z<(+<uxV?qJ@<*--vwQ)eyY<EPuur|aoid&Ge,=]!jzpk|c23J|[1%.$ZLlS' );
define( 'SECURE_AUTH_SALT', 'BRYZxX%X>]Vb-2))%AC(l&WJ{g[ZJ$O0xi++ho6mT`H%x2,6`ksGgzStkM!Vd^Y>' );
define( 'LOGGED_IN_SALT',   'q?ziN<ex!o%Q2#.u.TjQGRtJxzlufS82}Hb5fsmU]_ufY(v,yj>u?? tYJ>RN8E ' );
define( 'NONCE_SALT',       '@_)}u43##YV971*xxI7#>Kjiw$NvtT</*Enl23 4$+_k3l[2V@GQrEgpi@Vg9hKJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Hf4okM_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

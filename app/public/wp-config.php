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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'P]MOOVV?vz `E<1[Xmq^|c)[3!-_Pfxix;%DI83tuCM^Q%q9@&y?KFoJGv@|V=_A' );
define( 'SECURE_AUTH_KEY',   'ujTscn/%pDDZXHTmI,x:Q%**)?L^M.:V6WzYg_HI?2]9ehvM!o;I)IJ5WmT8,6)d' );
define( 'LOGGED_IN_KEY',     'i=7*6.GM[P,?q<=s]iF!-1$7A,u^XPuwfZOV97(H>6a_}4c1nr^:PH1O^fmN2XmJ' );
define( 'NONCE_KEY',         'z;;Dapxm&zn|7[|8hxvP>9#8o&KehuaJ+L}544Cj$:;<13`^3]6WPyF2|p rpsiM' );
define( 'AUTH_SALT',         'x;ofJw^^LdzKdkZ]>n%n}baa(rF|-Q[)D7P~}rz_BzEwJ5#s2^2hNjvMB@yHFb-Y' );
define( 'SECURE_AUTH_SALT',  'V&.VbX`]rP5Asl}I=*dWH.X+B9r.<F[|32cK=8C&@!#tCLW{!kTtMavY&BxCs$Qs' );
define( 'LOGGED_IN_SALT',    '417f)$g@1./hD)p#*Uhvt,B[QL.RK)ORdM*<w/D;-%]w+>9p,6)MJ`tmt8$ReVTG' );
define( 'NONCE_SALT',        'Bb$7+W^H<J1iUqV?P%%dy$r59@1S*Vl$HjUk:HYs^3k_Pi&S]p#:G<yTjy_Q6^))' );
define( 'WP_CACHE_KEY_SALT', '?A+ARz.^D2Of)f@PPo]N#,c^F0y:CbT>0F#FZP9Gu%I&uy.%|C.%jhnTO]rVKAic' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);

}

define('JWT_AUTH_SECRET_KEY', '220304271200121270ackp?'); // Setze hier ein starkes Geheimnis
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

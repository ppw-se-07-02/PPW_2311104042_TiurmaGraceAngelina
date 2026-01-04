<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'mDKi3jZVY:fd;CfC=v|RJBpDAVxN`dJ9fLVC,nH3]yl,{]~sWm;tqfp?!q/LY>],' );
define( 'SECURE_AUTH_KEY',  'dD(8ew41GgiC`|MA8!=V=h!S3Iy#/3:u$@yk y1-KcEL?,wd-3y+ok3wZ;bj4rna' );
define( 'LOGGED_IN_KEY',    '}J{mAX{Is5.hzhfK v=Sn/&3co%?+E>x*-4Ye87w*Yd-OlMxgpS=S-1CLc^V>,w}' );
define( 'NONCE_KEY',        ' ](,iaz~K&nLxj~!#N<+h:0cnIKR+mAR`63wT!{spaHoN6DIcNlTm/!`iNpl`hAJ' );
define( 'AUTH_SALT',        'Bs  9wR 2lzQj{Hg:#DR]!j( QVq%F-.0xO~y_il/~sem)wID1ZFACf2BR7Lri#v' );
define( 'SECURE_AUTH_SALT', 'rwh~&Ea~NaB#OSVSpYn$3$>*Uk!}Tb(29lckW@Xd7WVe;^(Ts.UGY%arMp6ies5W' );
define( 'LOGGED_IN_SALT',   '=PGFhMx7_S<IfA=^%4,e{I<{YT2HQ@9dI}AKXQgD~0 :8aSTZO+{5tx ?n7?]Aev' );
define( 'NONCE_SALT',       'NTp~$)}w{kLs4a($M~yyaTgb,0@u1tNjo~%];*i7#@-bb:{VM?p,9bL@,;aa-{vw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp34_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

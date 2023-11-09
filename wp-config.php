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
define( 'DB_NAME', 'webjxl_db' );

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
define( 'AUTH_KEY',         '|Y;NX_QKb%EVAw0}b]U@.la ?eIthZy>mjlZv.`}*eV8pm5k!zI >)kaUI]ctRRG' );
define( 'SECURE_AUTH_KEY',  '^nP$rCYv;9AZ`upG0ZdAtvZ~E,xE+u)f?m5O;K[}As1.Tntr`m}=4:ZE$Xm;{E`5' );
define( 'LOGGED_IN_KEY',    '(v&NWRXBvu~ ~%+o:xEM0nSE+`;U382Ubj~.51%U%eE{vVrR>7Ii/.Qd4|:6]9M!' );
define( 'NONCE_KEY',        'a lk`aZmT.p+oOEj5}F.cJOEh :J?(o]>Ru41b@I8!u|QqQl!x| d1N#f)24kya2' );
define( 'AUTH_SALT',        '<b:{Z+;e_0,*L4rG-!:A_kB^:Cc5l,$oVqh^)|Sq1F*i#X}AsIqv#Uytkj@?-a1t' );
define( 'SECURE_AUTH_SALT', '8h=r|jNgW(GNa^iUEsc{/3y<:hD(A&[~2IR;unu{[3Jw9HDxr,*9wq@i;v`MG>$3' );
define( 'LOGGED_IN_SALT',   'K+BB0@_ZBNM3NGh-$}^4^h@A?%GgAMsTIlwPx.B@(#m=tp,pxeO8An8fn7m*g gS' );
define( 'NONCE_SALT',       'DMTHCz&!(>_tiLOhE@f,lwT^gr>3]ovDfLv&.1{9)%8%OnMy2 ER;H`9~f!-]}rq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin_-formulaire_contact' );

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
define( 'AUTH_KEY',         '-R;c._$!Sx|42UxTznlRyVr2oWFR#W.`Z:ME.8*^fw`<!sso|EN[HOdH[>v0T,tG' );
define( 'SECURE_AUTH_KEY',  'i/rieAt1LQhiA)%vz(jfS%^F{=`[*Rn:~G2&kikSS:0@5.@Mn8fXM=7D&>~<25 S' );
define( 'LOGGED_IN_KEY',    '}oG-dLg//5|:#Xor|6Vhf$&FJt{16U4O]LKb9D;isV4q-M_J7]BNno9)a>~Gj-YD' );
define( 'NONCE_KEY',        'c#Q<PN30@$_IqB}&>:oaPV!hse<6LB~SFzvN;va/hPcc32-MXZo`R_XA^PLCO(j<' );
define( 'AUTH_SALT',        'w?yuX_ba>ZErTm8<f5!lj!0Mv`E`8%UNj?{7WK@;Z$b=#Mz1#8^-P?i=:=qN~a5;' );
define( 'SECURE_AUTH_SALT', 'B4Wjx9>v6=BKypjn9!bP*!Kmmx-pcv.fFZ?bn[!gF&aY(d2[+ )s}|kuX{U<KsZy' );
define( 'LOGGED_IN_SALT',   'I1}fE/ky>?+]eGKJx^hJ(GA~I[Hd3vH`_} ,$U`r`0={a}i;zW^6wCmCw^hOulM<' );
define( 'NONCE_SALT',       '1mZ<@KcViegXJc&j:H)ZI5^zW4-47wbEe6l$`+1N]X!a6YGtyL+j6?96<Zv[}5l>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

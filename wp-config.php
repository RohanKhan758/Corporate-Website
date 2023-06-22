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
define( 'DB_NAME', 'nahedDB' );

/** Database username */
define( 'DB_USER', 'NahedDB' );

/** Database password */
define( 'DB_PASSWORD', 'q]1Hv[RAYU!Yt2.e' );

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
define( 'AUTH_KEY',         '@%H(Ro^S_gUmS*hEaF}ti,2WBX>QXCMT>0oh>[}Yq|DVO2Drv0T+ORK?.JuCZfzX' );
define( 'SECURE_AUTH_KEY',  '( WtwjkUE&_S:!`S*7 >5<ScvOmLoM>BeBBY^8qk!^ }PW8|^Izmi]@dU:CPa-Cx' );
define( 'LOGGED_IN_KEY',    'i9Y40y/xd5oH%9myx%=a53TS|tP1fHhYO!%C~ln!9x2b5OSiv2jp`d#xb=yy[N7L' );
define( 'NONCE_KEY',        'rzWWDc@KraIkD!2z6ct,Ej_bSzXYERG3c?w/wc0K!d0WaM7FMmnqGy4lr9?i*Ppa' );
define( 'AUTH_SALT',        'IHr&]8aJ&e>excm~f}HlP+wh~Q_+:7$~C82#lN3kh.~B_lgMj#w2/?F8GZs58u;a' );
define( 'SECURE_AUTH_SALT', '<<2~vF2MY2y2<Vl>|m/BCHQ[(,?@2NC!K>X#Y6HA2w)Nd7JI` gnSCxye)lfW`3V' );
define( 'LOGGED_IN_SALT',   '4FA&5iomD.6e ;Le+!uiQJqB<TMyF=Gi(`dk/XAEDfw0;K_bTgQw7B$~Z/r-M60F' );
define( 'NONCE_SALT',       'a{*1e,i4=a?pMS89_uY{?DGQ%7X.{eVP4hFy41Q*!M bn+R4N$}b&3M)bi{&RbVS' );

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

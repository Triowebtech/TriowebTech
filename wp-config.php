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
define( 'DB_NAME', 'triowebtech' );

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
define( 'AUTH_KEY',         'UcHZZEQ/D~;zTKa0m4u#C9q5xejY&+HTQ;9(X]`$RgGf+_[dGhaB#( Jry>Z!]lh' );
define( 'SECURE_AUTH_KEY',  '%[ynLBrT,zx4L|se&bN_xu3ZPi>cF)GY{NLLg~cPjd]sujDTg@`804i}tyRSnwd?' );
define( 'LOGGED_IN_KEY',    'NmN=kWp,y-,p2)lce-;]>,6@g9ZX7h&;^Ow<bLxwdD1A!XXaI_eZ?`j8$7u^,ov6' );
define( 'NONCE_KEY',        'Clflu9NL4.s:V,$)3,%U(rT#I;&{!R;.[gSQ#)AAZLX)37sm27C.Ij)@sDHyq.-6' );
define( 'AUTH_SALT',        '9IS-J%M!i[CO^adEhDSR,pNx%H=XLB$}2&uJu`TGp0gp#AlQt9LHZ7WkWN[XKElm' );
define( 'SECURE_AUTH_SALT', '2)}-@*gOou)r}dExVS{W!k/sPVD!C(:k&l5hLi!H%W 9x[:_`1TH}kfctOfrBDyd' );
define( 'LOGGED_IN_SALT',   'gt}EMwlKL%T=j??[OUbcPI7AEk~G),8-RF>@%(D_M]5H,&m:Ps*4i5b):DhF)x.D' );
define( 'NONCE_SALT',       'sO6e(BE{<CK,1W$w+hgz2}=gve6Ij9H5/ [Js<e StZrJI@t6h}w:mq)(S2kx:x?' );

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

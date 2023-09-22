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
define( 'DB_NAME', 'db_eventmubarak' );

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
define( 'AUTH_KEY',         '%+E`-oL{S%`n?(8350g:Rk~EqT%MVk).<E BVQWBm*E>da>Zx`jRX2!t3am3MBI|' );
define( 'SECURE_AUTH_KEY',  'W&>MT0ze^!Xc/x:&Vk?sJsbV0}4$R,HZBpVGi#1(kP8X&>tu?I!BuJy55Ww),*5M' );
define( 'LOGGED_IN_KEY',    'ANzyIlpmx)T&>*{y[=sH-9NlE8gjq93o@iCfjg*a}EGgAj~BuX]Ak<mxX#/>Qe,g' );
define( 'NONCE_KEY',        '%deXBRKdUim^OUdNY!j]I<ETa@$TajALcv@K^R=u/EWJQP=[)JY5iXmlP9%ehOnl' );
define( 'AUTH_SALT',        'n#}vI@*8OO@UC2jtF$7-C[[deZH+8l0KGKpXLrgOu[#SV=:1kO#eb I:8cB|Gyp?' );
define( 'SECURE_AUTH_SALT', ' }[dh %a-QF*}d{&`$&2,ejrGxHwhPLseku-lYY) 4/2-A>XF9^ (O.{}}:+JVAj' );
define( 'LOGGED_IN_SALT',   '<?b5( f8y+7lnX[<5q^_EIJ]oD4j>>Qa>h+!yd+<E,gjO(?bQnG]Z_Daz66GkojM' );
define( 'NONCE_SALT',       'r hUWpA{!FE kfZsUt],GFXHx.u3-Q87/@eR$|RY0%Zl%+ec1dAI7kkb3ayy`(ds' );

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

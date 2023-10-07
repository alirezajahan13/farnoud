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
define( 'DB_NAME', 'farnoud' );

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
define( 'AUTH_KEY',         'I:w+-|}zD54P}:nZg^y%Y!3h:nO^QNy|^b]`/l3gmF.T;`B5~~:*kNwv-t}zfnE&' );
define( 'SECURE_AUTH_KEY',  '-${{mE.LQ=Z|]8%+afV/8,hnK#^P^B(t+Z?Z&j5h7 z1 R)ZiVJ<F (#@=9)AyMh' );
define( 'LOGGED_IN_KEY',    'U7?~K`;V/yXYR~`Y ^(H1nzTki7y6d:j1pC3~y#b5dMrxR`)|.Dfyg<GFz_+AV1-' );
define( 'NONCE_KEY',        'EI7cm6!prULk#z&)PM cj([u>.M#Zgo9!c9FqBl=w$lbf>}Iop:0i]WqYE(Q>[3s' );
define( 'AUTH_SALT',        '~} Pv}5KbtXdZBA~F$f-Zx$f9D1WaS|Igf?ylE8wooW|xtrn3]`oSjFz(bluEx3,' );
define( 'SECURE_AUTH_SALT', '38$TN$/`%h2Kf%ZT!4jLRtQ#W|~|gn#[ul}3k2-)tB0tlu2^@O|3D8,@Q9K*}r>:' );
define( 'LOGGED_IN_SALT',   '_vvO>@{G2CSl&x9S@]/{f+z12+rWdFAOm|L[D=Ftkp?[-,vu,?JTCcy=soRX:YWI' );
define( 'NONCE_SALT',       '3%97:N.o T;gqQ#cc.RGwXwPC}piR2Mb9ug_}L/*aeZ!`ZJ4ZH8ynJLzYZYAFreF' );

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

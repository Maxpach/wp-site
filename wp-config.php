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

define( 'DB_NAME', "site" );


/** Database username */

define( 'DB_USER', "root" );


/** Database password */

define( 'DB_PASSWORD', "root" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '-]!8axDS5!G Sk_]${V9_D^L+E?SANd2&{1_cF~P}G(3y}h>xBu6;V$*{aAW2nZ>' );

define( 'SECURE_AUTH_KEY',  'yQq2_#1EFAhC|}5gKo3uK%wOpy2k@|X$SENaMl/VU!`>Hsv)7`<_~Cj/,Jv7>R]1' );

define( 'LOGGED_IN_KEY',    'ESl9<ycH{XF/E_`2jak33U6K(HrzVFsz#WT7V&s[3sb%`p+|T&;0/omsXrwJr0t]' );

define( 'NONCE_KEY',        'R$5hZm0h T4+?]] yEw6CZDMcb/F=7o~yyud(9:b?jp`g1jX5%uG YJ;cZyA{N@h' );

define( 'AUTH_SALT',        '1]^#9>kn%mJw$rO9.{cdIPWN$m&0Nf(S}~0%.dWyA5CDN;TM_?[:{$vzW`*h.V&c' );

define( 'SECURE_AUTH_SALT', '6@AKLKHDAl!O(V }trmwk{l~JR$q$S!kDa1 4PHuOL,UQ&`6=[w*zr.sYI1;cG/C' );

define( 'LOGGED_IN_SALT',   'PjaMLHYA{6r^W}k2I>9`7mG}vb*XIa Z3fP{>gV^8 J&amR2lCH+y9^Tw:8[qU0Q' );

define( 'NONCE_SALT',       'E+v%e8vyKsm{c&)AwmP?[oENK_0OdZGxNt@]7o4:=blO.9L(_t0H5nw%oG+8tuEh' );


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


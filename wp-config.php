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
define( 'DB_NAME', 'nguyenkien1' );

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
define( 'AUTH_KEY',         '8XDn BIeJd7:Ap}7dK-+bj<>2JzL[7O+>j5mA-c_F}&c@sAg[2bX[<yc2xx!3Snd' );
define( 'SECURE_AUTH_KEY',  'Y%)P$^Ga]p!H3JWB8A,1J4;/<<&LC(7:(OrTw.nc)D%[juWnulGof1R%4>@tUNlf' );
define( 'LOGGED_IN_KEY',    ')nL~X&|ejo`|Z#{kDJU`7Om>W5D:;c 6T<3|sXbS3y* c&F*R~>;w1TcDU}j?wq<' );
define( 'NONCE_KEY',        'ia`vY+%Ccg:VF$4Qbg1nAh4[fsIcueVp{g-SWTNLsQD Ka`RR09&pcIN*V2a}!Ej' );
define( 'AUTH_SALT',        'TM=;bX;_3YHvFHp*#:Y5*~+I!GH|KQ.Bc=FF1SG7.zASvcFos6{i9m&?lMjw0k:t' );
define( 'SECURE_AUTH_SALT', 'a<vk0vSp0p2 }H^nPTdrt.K;FsN#aijDx=WLx-jjPu2@:O|YnU,D1R92-#Ph)FqP' );
define( 'LOGGED_IN_SALT',   '84O6rsz3!_Wh8Xwk9uYgR_g7CG}M)~&1epY.x`f~xQ<`mVddMI8WZ:qJ%$E8VYBO' );
define( 'NONCE_SALT',       'rPey0~A;>;NDV[z*&h {o<0T,jUG9mK[BrPEOhs{tf^Ecwmftce3e#8&7,c#}B8L' );

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

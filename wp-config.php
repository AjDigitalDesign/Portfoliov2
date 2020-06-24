<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ajdigitaldesign_dev_v1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rwz{a}5Z+T*g-Ba&IVcd]!Cu*Qh4YS3,d70(~a.R/M;hBu#l2?SV}n*[)qwIMFs>' );
define( 'SECURE_AUTH_KEY',  'R`%dy3:3;+?8qf2fbAw<ym9&^oQDNq`R]#!y*/DK~3CCavs%LyY]|WFG)4jwoajg' );
define( 'LOGGED_IN_KEY',    'D!gJ(|6ZQ`}W:J@H{U_e4S,9#-L-9?/)IHOK#pD#chG7H*iROc#U[.Lk;YU&w# {' );
define( 'NONCE_KEY',        '_[av##@kNnJs8AjT(vDP;98q#13ke]%&-;7cdi6fUPK|s|aF^J9BR{gRo|{8za3>' );
define( 'AUTH_SALT',        'WiZ?#xA?:Ip*I-.*X[PFK.<]0R(E O{[3<A2I*b#ZhI_j{Fj[@!@E8D7q4*W>0< ' );
define( 'SECURE_AUTH_SALT', 'h1-Dj^hv-6[mH5~q8]s&<k&;|PJ]tNLpe?V[u-KpB.I?(`r{n]3uyDG0 @Ss7Bl|' );
define( 'LOGGED_IN_SALT',   'MM/C[-5TE/o;rsXnRCat#lla>8UFhf}5r?d(+p4`:gy>C<i6(xD+H)M85Ju+#}N|' );
define( 'NONCE_SALT',       '$7)R+J7aAqt;b2<qdVmn>PUvfYn:{pI_>x=/1h|tI_@LR)<gBUuxi?b!9C3omBL,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

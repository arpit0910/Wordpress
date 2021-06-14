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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '<-KORpGn2k555GE?.0^xj8)$PoXI&}(>vfrcX.hhONpi#vc 70tmoU:~za}27Wo ' );
define( 'SECURE_AUTH_KEY',  '8;oJbNCfxLl@5+~i^^NYg!u7dky4s!P`&WmKPv,0;]8qquDB*|jD6-yq64GI:$K=' );
define( 'LOGGED_IN_KEY',    '{jjq._]#d%| @~m!(1)f_9#_nVV;!`Q]QcSJS=K:rXC19LzC$Bb#&(DUG<#/xO:h' );
define( 'NONCE_KEY',        '#-8Nm?AJZvNSfJ5Oh&<yo_)-jOBEg^sa#hx(P4]Qxmo:3CK^h ,Lk)C[Ugz0R)zt' );
define( 'AUTH_SALT',        '3!4`]zBq@FeChhUymi*,yy<J4e`GC=a95$8Q;a>3@JKm|_HA+@G^%>:>=|)Ru*-D' );
define( 'SECURE_AUTH_SALT', 'YR#fu,IV>3?6qhGnj ydwo/jOo@27P5J5e^%81VViKF6(C-_0` FboNXVHTU[&zZ' );
define( 'LOGGED_IN_SALT',   '!~bA%`R{0o8X.?D/zX5PE&8u=YD;+P+ll.)F/pnZs8RfXnTy2+]P$^0TCT09,${{' );
define( 'NONCE_SALT',       '(GX{Ak9OWSOCMQjFU- 9r2dY1GMhElCJ>h3R;pPCSoCIjx1|4{4.5h[RcaKd0_un' );

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

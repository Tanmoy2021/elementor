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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         'a#+12q3yLg}gUFdK8|_9ZB35o/a8Y1hB6@d#vKgY@o Jap9a9oFs`zBI-t:e3:lU' );
define( 'SECURE_AUTH_KEY',  'wN=wLHyYXeC*2;h^&, TTN@?k7f.b4 d77yz@%4L>a8z0a&*xLhEa=a75a2U6xFD' );
define( 'LOGGED_IN_KEY',    '1-Z8X&v=2OnjQ6K_zZ{/ odU+&,r1xK+E%2Tzlpddp?m4=Y[}wl ZcL /s- 87+(' );
define( 'NONCE_KEY',        '&~-u|QF(Fb~gyD:NV+3HF2n}K1av,uIN~7H)`YQpJjV5%>k%3L#VX/t/{Rk/HRvo' );
define( 'AUTH_SALT',        '<rx[4/u?QV2URe1F.4{k&g2]UxMFzNC0D~u5bWdvp`{^,&#<!:;#G#Lb3uQ(=Y5i' );
define( 'SECURE_AUTH_SALT', 'N2.L8.:%z<C[1<Ek|8HS$kJvO!HhrF16u}Ax/I=jiw!yh=_MBNr>FxScO_+*>O;t' );
define( 'LOGGED_IN_SALT',   'IpAHzfH92-JY;)wSUc*Az9>X%_(84Kzn{{_k`!f6Yw%q(Gk.mow*es4h]?RsLtun' );
define( 'NONCE_SALT',       'GL}W7AZmWe:c|ZM?dRUX[=75&1#ZnDAwM||S9o1YOF^|sA_P7C{?|s@w&nXUV;{p' );

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

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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk24/3838331/www/combuilder.tk/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '3838331_wpress34766676' );

/** MySQL database username */
define( 'DB_USER', '3838331_wpress34766676' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P0VdbgrubH20v4eisH_4Yivwi6d7BvaT' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb18.runhosting.com' );

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
define( 'AUTH_KEY',         '( Hjqh3 !4St/6W~,fH0oXf}00; >cJ^S`Iy~-Vxd~S^l!<MEN{lcV0jS]h{F^~,' );
define( 'SECURE_AUTH_KEY',  'E@Pp( z+=N#4DASPZOA|h~Y(=>8AE(lI24&7hfyDr~U1Pe*OP9g#?6=:z@mX5N>w' );
define( 'LOGGED_IN_KEY',    '&<|(FYWX^7hS^GFVo{Ng<O|h]kahNJyX]-vl<,kn_U9=P`rvy?wU@w@<,7ChAo5z' );
define( 'NONCE_KEY',        'Za}<,s76f`y1bZ($5+_d^#s`u$5qtE{I2fU>2kT6q(GQ:@OJbhdLE!%(y^}`m1xv' );
define( 'AUTH_SALT',        'STf~5dzg[uC9:TWP2n@hp(yDkKg*JgXBzv.!i>{.G]&&`Ivi%!CClBjbqVN}A:qp' );
define( 'SECURE_AUTH_SALT', '2!Pm>a}cOD3p)EH5Ud1]WLdoPfyUyVoN/D<J_v_8.oeNy )6H+NiT K6}q$EV~,!' );
define( 'LOGGED_IN_SALT',   '&;En1TtS8ZOhuIz$!W%Gxw3:`x=E$OjG=BnqoX!6_+7C45[f.Dk-2/W!yCbo?eZW' );
define( 'NONCE_SALT',       'SX[#Isa^DK9O>3)V4uv~]m_}b#V_x~yH0@x~W6If<8g?04hI7%8!L09c&#$[3EuT' );

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

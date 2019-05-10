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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rentcar2_db');

/** MySQL database username */
define('DB_USER', 'rentcar2_db');

/** MySQL database password */
define('DB_PASSWORD', 'rrfZBhgx');

/** MySQL hostname */
define('DB_HOST', 'rentcar2.mysql.ukraine.com.ua');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~PJUm8D~w.$Yh==DS~/&kW|cW!_WrQto@hS0TB?XY|Z />fB%&%,30o1J?d Eje@');
define('SECURE_AUTH_KEY',  '}CGE_81c39*4B=zGr,YUk52o-ObNi90TOoDPH]5HPVD)S5W[[;Y{8=&yI<lqM3&}');
define('LOGGED_IN_KEY',    'aicM:t$ajF6/p|2MORR7Xh`?It]kkSZw=Wgs>}ACg`Zd-%{IsQNikO%hCRTz!MaS');
define('NONCE_KEY',        'x7DA/8diXl:v$v( `tDjTU|&<92INJvkm)W=ej9Lh[>&?/CY[Zs@U-X|%%ZP{w}2');
define('AUTH_SALT',        'G1/;5}As` ffrMz/-Blp-Y?LAr}:,Z8sH=S(z_?Ks#O9,5~[hf!_)n/3D(ctnqhK');
define('SECURE_AUTH_SALT', 'd)a];[!GTskS^n@x?GPxMay-Sasm|k<gMwM,ki/6j6~KCn9B1^qwXS~bsW?qfHgf');
define('LOGGED_IN_SALT',   'e%xxS3$FT$%r|,a`W72c`t.;Nv&MqCnJcI@44wjz@F!ixN$#*0n3<uoK6@$!<Sbh');
define('NONCE_SALT',       'P3q!Aw:+,OtWi2i+Bpqlq!-%h(&#=jv)py]:4v(`,OT9{nTYH+*M7_~;fVuS=+r*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'akni_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
ini_set('display_errors', 0);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define( 'DB_NAME', 'leila' );

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
define( 'AUTH_KEY',         'x=8TY7q2BLppoSb}/DD0D6sEKUI#Q3$>EjH/w8y!9]9)&VRh~#>w>rLEAhKH8LoH' );
define( 'SECURE_AUTH_KEY',  'x-D8u3jJ3b+Z^P5|hH86`H~T2]vRF3cwFRO@62`~58*WN}_~#00-Z3t@ugY`Va)y' );
define( 'LOGGED_IN_KEY',    'jl~M1wuL=A&]A^krdY<YrGOpd~xqNjTtYl~g(8kN+,0IBh/$7K7GIIAV$u SW.Z&' );
define( 'NONCE_KEY',        '[$)]109,$@-[}hU;x=lCC.v-P@:MU*|KU#[y0bY~@roww(p9+fMU>|TfL_Ak2)6*' );
define( 'AUTH_SALT',        'Q(W;S$U$.$rCoXMCF.f^zy!ZRMH@fWI4Rzk{}l0<0gtyM(*lQX/`&|jo  NY,p9&' );
define( 'SECURE_AUTH_SALT', 'U~J3-&F9[f]]aW4C*#*c@T]p@JVj]#xxlT=g^dYgZ}Z-/!(8o%S|=?^2[wYEwR|k' );
define( 'LOGGED_IN_SALT',   'v(CpB>`lgxlv2D0bC%xsb_EQE9C-IP~){(t?O^1%Q/P5c!Do; M[sRu+Ok@l1V0q' );
define( 'NONCE_SALT',       '-/B/JEpv8,w2b4@fsdzcAOOVu+OySNL.Py*!__K?F3l5W%&{V^,QI%livy+KY_ns' );

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

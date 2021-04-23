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
define( 'DB_NAME', 'wordpressa' );

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
define( 'AUTH_KEY',         'Q+90mpm5TBrWd{#gX^?/:?wBWcb-E*hT|nni(Xn)VUSCk`jmCG~0V{6I2V,0n7S]' );
define( 'SECURE_AUTH_KEY',  'EuMmu( (xV@#bzB G*qr!++h^ei@/^b<J^CQaOQ2dH{)?.%4Q$7-J0zU5`QDElNf' );
define( 'LOGGED_IN_KEY',    'J{h;5Nms43Mo_Yz+kOMm%QFqjRg.?AV()peXLgwV Uor1w?<6p2Ki00dl$@tOgMj' );
define( 'NONCE_KEY',        ':zAgK<4Q*DqI0?GoJ6^#CST/V@^LjkM9@rS]Yw5?@ZT`VE|&I|LWSQmy% 5GwO{G' );
define( 'AUTH_SALT',        'su[`g}eEJ7,r?S.4}Rb}6_Q63awI{LDR`bc]T+L:W}RgT+yj((.NPU+WJ}Neg*<|' );
define( 'SECURE_AUTH_SALT', 'gG#+L`%uc{)mmOMx8p?q$mKl-W[s>3lwO~>iJUoO%o8{gX}:RkG&LX?&T-u_7nOF' );
define( 'LOGGED_IN_SALT',   'Tw#2;*Y7L_7&a]v_nM&Gt)$ud4#;.5WF9?Cg:4nN`ND?T-zf*-$wjP#!M!/mIfgC' );
define( 'NONCE_SALT',       'gWq7WQf)ocQ8CJ=kM|d_z^}iYu]mY?YrUmJY:1LPLCn;u<}F}x#ecHc7&Z3Hjb{R' );

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
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );


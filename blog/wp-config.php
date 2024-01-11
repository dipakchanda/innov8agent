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
define( 'DB_NAME', 'innov8agent' );

/** Database username */
define( 'DB_USER', 'innov8agent' );

/** Database password */
define( 'DB_PASSWORD', 'innov!@#123' );

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
define( 'AUTH_KEY',         'W=5NaY.RLODiH)%O8rSUZ@);4EL$qSDEh(B0XN+M#psnzfTCob2kDt f#8^ImCAL' );
define( 'SECURE_AUTH_KEY',  'P%(Uh$`}p7Ufv|T4gXoqy^*-2zHST5(}m^BhA0TtHPn-K]<HikiU(/OVFBpA#0>V' );
define( 'LOGGED_IN_KEY',    '9Au?ow*S:%k5uuNMo[eebDT+0Vn?|}GNXE}$?6#t+Z ]c?[.w*qr*2ZJ7)Fa}2QW' );
define( 'NONCE_KEY',        'pDt%fjM-!},gwd8d=0:%50oDIDEOXg!(t1@DAe.^_._z8<JY;OV0;T56>gAMz]2:' );
define( 'AUTH_SALT',        'w) g~5k^Yda+c5VVJ+AAxA`l{C({BNPTic!5,Gq%PO7q6A6FV{xF^KYZA-J>tfF)' );
define( 'SECURE_AUTH_SALT', 'rlC1}gEF/}!V0C(7owweghl3uyPQbW<0oJ/R_.~s  RK/.Po,Ts(}J^G6al><ww&' );
define( 'LOGGED_IN_SALT',   '|1t^TqD/XNdRA~(LJbVMZ/]0!G~gcCVo($%^+6o!I<[+mM|Qyu;jm_m_[~=TrN98' );
define( 'NONCE_SALT',       '>Ap;* ;*GZl5Z6*D!fK-zu7f3bmG|kKe:}VvX)#U1P4qM9LDW=B!&h*}&5BNn3Pg' );

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

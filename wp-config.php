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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'aaa' );

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
define( 'AUTH_KEY',         'zkH0,X/jQkiv`67$P4oOLt*hG;Nr51iv2OR:<tDybdi.!?md_V*`}-[ff=B0W<9H' );
define( 'SECURE_AUTH_KEY',  '5~<|`2Zlg8`6I@RSzeAh!Yvq(@2-?COhOi?EQA@?]NIHnc|SDrI5h2grL!fnMp`?' );
define( 'LOGGED_IN_KEY',    'RTG]sMCK$wJ*wq+$w~]ttZTD,zb(YH@dH^L<{{h-_[NzTK=E=iG#c1~8P%fDW]w;' );
define( 'NONCE_KEY',        '<,nl]A8%.@QDo`eGi4vIq@2{})QAQV7)^09_Wjc-sVwo_k-zx9x[v{RNF6Sc)erU' );
define( 'AUTH_SALT',        'w?,:;n&fK*X))TAHZa_%6&7.wWmzu{Dn4Z,T3VJ)UJ})_|{g~{lg:%E1AG_HEloy' );
define( 'SECURE_AUTH_SALT', 'R9#|b9Op -B:9g=@(@#QqHDT29YN9VTlKH/,@lE#a(3+o*hUX?3PRN<VUH&pa[7E' );
define( 'LOGGED_IN_SALT',   'z^KyN;(9OM!J>DNDcy@hVwtI#j58$~]aQo<;5RNz_g2>T$ItT:%z{hC5GTyp~]Ce' );
define( 'NONCE_SALT',       '^Rd|0%,e-I,O(R^JHa]aszKbdR[*:tn -N2] Bt=_%l*hZ.4dSL[,JH ZFwB[p2t' );

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
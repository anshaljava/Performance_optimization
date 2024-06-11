<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'performance_optimization' );

/** Database username */
define( 'DB_USER', 'performance_optimization' );

/** Database password */
define( 'DB_PASSWORD', 'performance_optimization' );

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
define( 'AUTH_KEY',         '/%v@BB1lWCgZ<TJa1gLBV!Wbz!Sb64qt>d_?zG>}@bX2~#4qPcC#sb$RFCwWcwJb' );
define( 'SECURE_AUTH_KEY',  '2`KDk7Pz[xCG)~f/S>FIm/vC*RheG`m_#xAX1%`QDNf7%LinG$)l#=sx]pfEJl[r' );
define( 'LOGGED_IN_KEY',    '*7Y.8y#NH4ya%CBCRzi*QV^w]fN&&g%?&_x<}#fd%F0(/{8/Y*x6 N)6z%`]h(}E' );
define( 'NONCE_KEY',        'H[j!]fT$hXC .+&6iSD]B39 Z,xw#C}^8MZ7Q{VIeWKlTfy}7Cw?S,{IP]tx1N>d' );
define( 'AUTH_SALT',        'F,yi6FZ]^eG~Fb)jYkWB_$k6A_>8-$3-iAv?y3w$yC@99?Eha>&=Hf*4wGR*no^1' );
define( 'SECURE_AUTH_SALT', 'JvyP(rKjO1!i)H[VM`7yV`!w-g`x=<U7>$Z80p]qV=z)i0K6@I)V#;mYT<s*Q8$i' );
define( 'LOGGED_IN_SALT',   '77;U(EKR46yNu(GfY&+~hrt>@~,r^pj~Z_Xvu,%9LbssI7*YZ;#<`Z$@{Wyum6Do' );
define( 'NONCE_SALT',       '4dv{wt@*lNY!wnI&@|fS7E8welJC ]H~{Cc)jT}_-xB=n])AFVNEi-*~77%0^Z+M' );

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

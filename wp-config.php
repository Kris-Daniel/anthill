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
define( 'DB_NAME', 'anthilldb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'dw;.fYYD*a_BCy6A}q,/]StO+$LX![!#PhJr_,n~9G$q~JY,RnAFeh{a!:pNYsWT' );
define( 'SECURE_AUTH_KEY',  '?z$.WdK.7aaDtl?n*#X&-cE0+~?a^_SQC2MaZ;soZd.~~7-%)m*5G+`<BpxPQ[$-' );
define( 'LOGGED_IN_KEY',    'x4O:z*?9wij,3GdC;2NhM@YJs(D_;Z!I%%0lTl)>DnEIZBwCeY:R4t6G_3D-/gJr' );
define( 'NONCE_KEY',        'WOrti-| r+X|dZAa#zgXDU[p`|r=9atn+Zp$CpVr6twjWZ}jhwE3@l?g1lR#4d6A' );
define( 'AUTH_SALT',        '-~bZ4(N!TO_t3EH^{)pU_H@w}uor:6EXuxq#L*+G[|iw>``xgFF=l3w>5zwFVw;Y' );
define( 'SECURE_AUTH_SALT', 'cKuEzCt Rog_$<Ni< [ntu+KU)#AM {L3cj)D]ACcG%M~jN->e3D$zU+;:i|$^Iq' );
define( 'LOGGED_IN_SALT',   '0E6)3E.%ojak)8 ~9BvtKKNr;Td$kTo>PKGm]%@t-laoK]YJuh}x;?<q213fJ!SX' );
define( 'NONCE_SALT',       'PX5eF,Tfrsf#gyZD`  E~Y.kN<_Ww</cjCAHUR@Ea6/njXhh5>a@5C[@>P`%5|ql' );

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

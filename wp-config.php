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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jdrift' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')a@2I].56zW8TC5nT[qu=vb5a-BG;xoS EkH;hT>^;a]Ut*>in66RD(32cuBXLo0' );
define( 'SECURE_AUTH_KEY',  'eUXXh#b~~.5ul&Cb^08r>}uCJX(ZqI|ra<e0+$-vOu};h~a?+~@rVcx4yY!TeaTf' );
define( 'LOGGED_IN_KEY',    '2VWm}=s$jI[|_i.C* <Qgx;II_lZ*4YV#c/6qJ% MVv_5:0Z:G@d`8-V#vWSz;sf' );
define( 'NONCE_KEY',        'Lq8)M`(zIaoV1gUr[{Yj:9}U4?rA22+ObPW)<zqd]AeKo}F|0= :D2[S~6CVS1[i' );
define( 'AUTH_SALT',        'b[}nz!~7#OdSor ,3FwDA97z;30;a@JzuT,:.WS>b/^@9yo=XlL,G9!}J:wqL5Ym' );
define( 'SECURE_AUTH_SALT', 'L>y2LoRby`Kc)9z1c@`0t#Tr!vp&AC,8|K34bj[1K4z; d$_0?>9v8kkqEPknW&5' );
define( 'LOGGED_IN_SALT',   'o3zgW}vKu./mi/*qe?Q)Z-Aa,s6_Zt<!0q5Dn3{58Ub}n6~W lN;Zo/dXw^AFgmp' );
define( 'NONCE_SALT',       ',C-b*`Wuc<(F<B=g%P&GnIW7jeCGr9&GC+7q4=:wF.DVzp(+5X]o$i5=<[hmhqr,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

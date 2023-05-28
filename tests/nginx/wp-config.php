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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'vvarussa' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'sql' );

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
define( 'AUTH_KEY',         'YLi 9Hhc:2nJ^/lRZ0Pvu9=t^9FX6`#Lj_R;0}SDup4q[C(yy#]Led6<Gl=QC/nc' );
define( 'SECURE_AUTH_KEY',  ':GXK2IcHqAMzq?;Tw2fG,!9I%#T5J;2WNAr+)JV 2U=p%VWQ#=`U2.}}yFPDLP%y' );
define( 'LOGGED_IN_KEY',    'n/@Vg%O}gp[m~#xtzDDm,^$fk]^_krJf1L2(UF?9!1x<b^*F0C3zXM&aXk`nhFOa' );
define( 'NONCE_KEY',        'uo=k#6Ut6|}`27>%9*7<E+yDs$,x2N;T|x3=@^~Bmz-fvVU4B-Bw7*qn$vv<,g)9' );
define( 'AUTH_SALT',        'kr<Myg9,RLCg*5(6s6h[!=O6a*GH}k$=NF`~iRL6fe GnvrcpRQqS+;OeG$CY=ad' );
define( 'SECURE_AUTH_SALT', '^f!Xj<o?JUr-Rp1/j5Z*4YQ3_|(,#@)%75x]31+^kanP**h+C,z]QN/**4<qSzbI' );
define( 'LOGGED_IN_SALT',   'IngCF&c}~6- ]0yAv}r [cssGDN&n/CU7p$<xI)N@bUQ[vdPgd>WYN?X4l<f~65Z' );
define( 'NONCE_SALT',       'O^bnty%6b$wc}yZZtr}A,:%|:Dp]L:/qD9]{P=VO{OC#SkcmKFKm6Rb_{uLtDt~A' );

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

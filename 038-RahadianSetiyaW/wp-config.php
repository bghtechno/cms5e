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
define( 'DB_NAME', 'websiteku' );

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
define( 'AUTH_KEY',         'Y?u|9#ocp,5L7i#09&_L]QyNV-(@y)m:7:3_uH@MC:rl}Z}XygF63~_pwe?4,tzu' );
define( 'SECURE_AUTH_KEY',  'Fn0jV?]BUdlfxxtO:(1 %b&qx=%KAPl/z}1y-O*v8+dH]G>9,tNL7 Yd4SQ!F;]q' );
define( 'LOGGED_IN_KEY',    '<aN]~+XYzrbAelHzaw1:}.;X683TTMmWt?+jrP{&TKG(1Tldqv/Mf?LD+U[H^{|B' );
define( 'NONCE_KEY',        '>5wBBFa0tb@*dN*woRBYB5be?j|U@|RH4#/Y9JhS O&tOTIek3A>rN&8a~NL1+M>' );
define( 'AUTH_SALT',        '#&Ei}&amkS.,7~UV%PV$!C_:&[MDTp,9lS^1-e]oCO!{V^Pjbsd6)f&z+O:>q10}' );
define( 'SECURE_AUTH_SALT', 'VSnny+@;S&=JE.`r[HL<G)B:k7=Mnl[w#Q~}6&IJHSSS]ktPtxz0BfZ)G_~SV@M.' );
define( 'LOGGED_IN_SALT',   'dJb|+.zmnAv>v^_v7q,PI5?T*x$=A.b>Sx$97<WIF3X :(L{lht0l<>}y{bfxwN;' );
define( 'NONCE_SALT',       '{(oFTZyl:<4{V=1a9?GCkycQ_qI6R3I^1cmDem.}$7Mba$ld-bBdsVoDcgXR]oS]' );

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

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
define( 'DB_NAME', 'uu_adventistas_1' );

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
define( 'AUTH_KEY',         '|f;D|7d8qiw^=b62%vr;RH#Bgiy/:GPU>~?plC:n<]/P/vUQfVcxZ4L1Jv3upq*-' );
define( 'SECURE_AUTH_KEY',  'WN;&8m%,HhlPp$Is}#*wOKYX*PGBp?nTXyv1CS<KTX{n00u(K:zB{+;_=.y?DJED' );
define( 'LOGGED_IN_KEY',    'UX,hWA4H$:I:L_+yO+T;X8>by3|.NK{WLdL<H^~[Q`h>5;iWMKf8`~Rmz>AN5+*~' );
define( 'NONCE_KEY',        '8bzBz#|LMwi$,taGsvUqM>j1&<;P#x^YqYd4Ey=%i>_7AKpf!:-ym6 3iWLCJ,)z' );
define( 'AUTH_SALT',        'dcVV+z37hcvw~!Z]1g_K-|MHux_2$3KB7 kCxbAzX_,QaRj-(z$=/!r>%|8MY3},' );
define( 'SECURE_AUTH_SALT', 'dH[UdQ5l^H~b7zh9UE9VhsS SUfdtSVo[b!^(hzxNg`cjyr0TQod7]pvIKX])$Q|' );
define( 'LOGGED_IN_SALT',   '7Ndh1crTpGY!S&COpALY5t-P<T%Ejq(2fSNdw@x/kON<zqtl0T7u|B@$9@8WcSZ,' );
define( 'NONCE_SALT',       'NB3d3;k0WJ}_<9E7lYC[UQF%[!(T!e>R,OJLRZ]^3EGt@[-:UvH/cuh7S9,U?Z`6' );

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

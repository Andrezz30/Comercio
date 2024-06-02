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
define( 'DB_NAME', 'Comercio' );

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
define( 'AUTH_KEY',         'o B_OvNQh)fsnrj#?;cdx*0taB@ 3ELvSWtI$*?&=g5A2!GlpfuZmG{*?5DA=h=a' );
define( 'SECURE_AUTH_KEY',  '-o@nXj(~{? o%LO0+$kD- @/vj=bu_AeAxwy7u8DR)bRJ2N|1%;j^i:e?nUfp&z,' );
define( 'LOGGED_IN_KEY',    'BI5#Ll?|AjFD4[`_3>w8O/aQ>*hO/%GzG0PlrT$7!Q2Q~=M]sx4dr? BL;vpc2* ' );
define( 'NONCE_KEY',        '|9=M7uAk.(l!`_wY3wO9R?M<A)@26-r~b&Q+|6o@/G94-L%F`.Eykzi>B#aJHox,' );
define( 'AUTH_SALT',        'mpWbU-+-Y1yr&R1H%QY0vK7TPO8zj6zR0zB-$K+d7gHA#af5Y+Hs2p~U&OU,q%AD' );
define( 'SECURE_AUTH_SALT', '|%2aE4(3v{LE=}Sjy9HtftqDQFh(|:jSn{H[oyDZbm#k?Be=GuPwZfUE1g7Dr9N9' );
define( 'LOGGED_IN_SALT',   '>B}i&-9w[)UG%|Sxq2@5Z}[^u`<1Hv{!{9ycvdX1V3]Z(u=M)eSw~sQo%c(=aE.w' );
define( 'NONCE_SALT',       'DH_@8h3-Wmv3:/Al^]:o2%me$B:05LKPzUY6O}5bR8C_[_@f~>Rv_vJfDJ:^;ER*' );

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

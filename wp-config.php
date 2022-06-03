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
define( 'DB_NAME', 'pnc' );

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
define( 'AUTH_KEY',         '_rw5F$)VCnt>!y`Y2Jj{=1,MEkvzhH)mjFH?^+7.>!#N.s?&_,u(ox1&zqV$Lrs$' );
define( 'SECURE_AUTH_KEY',  'Aa?lV*vb{{:1b[1OJTI}}#I@zS2Ldd8au]9K%X@CJb|.+@Qgte(AH?O!]W.O52*E' );
define( 'LOGGED_IN_KEY',    'Gs-t}^FgI866~V~B2MQ ^fP`oGJn)i4(&KCU(9rNgM-CH-CnEA;.-#:xH^cx@v;5' );
define( 'NONCE_KEY',        '}Pa2/Kt;<-A_+ 2_@v|-D3j9tEFZX-*jXhL=<6E`9nP{?n<SB0fm.@efjM[mY6-n' );
define( 'AUTH_SALT',        '0kD1ZEWRWf6icO!S#n-B^~x6Ns}wre+Fqj[Mf:l^TUH7Bp)4p|?f)gpZ!jl_+*vu' );
define( 'SECURE_AUTH_SALT', '*4#B}Fn>inD_>qm/3#Sddn1UTBg7W.q4A9Z} ub.# nI-kUsf%CwqwBT.BqpAr.}' );
define( 'LOGGED_IN_SALT',   'Wc/|CF&/oCDG]lvd>HNn%`HflBev:: w}R~fZ= 7GT[S:>+mfzgtlwHysfaT -94' );
define( 'NONCE_SALT',       'Z i1Bz)gmjX`2;A!!p!FCfq;8F~COU>1] ROBZg4;BcijP<FxM/Q4izg8Malvs^M' );

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

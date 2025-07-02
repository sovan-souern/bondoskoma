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
define( 'DB_NAME', 'bondoskomar' );

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
define( 'AUTH_KEY',         'O*W:~#>,`[ZtZg6MsP<=K>V,9^8,~^ 2(Kq)-=]Sad=%pqK2+egweG.k1r![W);7' );
define( 'SECURE_AUTH_KEY',  '(1}%rQsb[@@2yNR||sbZwV4$o(9A2I+ix/m tt)e]7<s:PjHjMz2vbCRw(^8!wEF' );
define( 'LOGGED_IN_KEY',    'F|/G.?ADz*d(nb*@FHy[*(UnqPyw.T/fT)ZHzA?Lb?Zh5$fT-g,Q*KWu$du]4+1?' );
define( 'NONCE_KEY',        '8Kz}12_%w,mnpw|ev@@6U#jQIv^0v$=ImAG1|gSd>QQEPQbe6VAic7. 2IBs21rP' );
define( 'AUTH_SALT',        '9hhK7ND?1ias@X:7]]|~K8G&i{Nn{&.O[AP=N3r(YvZGN@w|Usgc%_`@[F2xi[Z9' );
define( 'SECURE_AUTH_SALT', 'j5_=|1l}:ZJet(}TQBP5|AH<f(QoWKsyJ.nNia{+*n<MY:B)-V}%AE|Qa<pONFQ,' );
define( 'LOGGED_IN_SALT',   'D6]Hl#J(L0r1I/60=Frw3z,cbQ*_X=gWrS.S[Njd`(YjwJcCcM1/E9Q[$;O#_k*C' );
define( 'NONCE_SALT',       '>l$lVoU2u_|0e%#u.kLy?Ib%1QR-Q!UO~Y#_90mB+H /v@%.DVOd@:a2+{_43yQE' );

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

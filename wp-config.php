<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'WP_CACHE', true );

define( 'ITSEC_ENCRYPTION_KEY', 'cTsjKGxROlhCfXwhM21gNmcqV1pbfjZwVEN+KCwmQ2k0P0cjKUxqfHl6KDtofi0ofmpTbDBbXS1JRGRgVz9sIQ==' );

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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'wSG5Y)ZRIHaHmurjbk&n0|TQm#c9X9CS;DcNYk~S/{*%jq0VhYh6h@L>Uc7rN!~9' );
define( 'SECURE_AUTH_KEY',  '>Zk12)LSGMm:R0jQRgcd!(YU=n`aa~Y+&lb:f?N~@/<A]SF{ypFdM#!x7=Z84qPc' );
define( 'LOGGED_IN_KEY',    'TGZSC0[,* iZ!Nu6g#Di-@9.PCG tryqAp~=](9U=Zk%>u*JH&WFy_s74?{6)Z@$' );
define( 'NONCE_KEY',        'eP[!0YR?aNAp2-kd}NxLK#2T):3U8K<*f#LE%8Ywn>D+SopA^1NIsj_b*GY~-r!E' );
define( 'AUTH_SALT',        '5=jmG{f]+!SC[#%$cAu+-PjMyYX!2~*_?FZ?ktK`>KL=4^1^H#)-kt])n&b<9(7%' );
define( 'SECURE_AUTH_SALT', 'wg:ZrZ/@J8X}JM>,;cRL5mZ) aV1Qx=6Jv9>02Cv;!Ol=t5i,83-`r6D{N%UM-ZS' );
define( 'LOGGED_IN_SALT',   'WWi%j2=xbH>4;fVv5yc#q!gRajK1-L(w)_}dZlIS{Hi?J;AFfr4kpSqG|~._gH{0' );
define( 'NONCE_SALT',       'Oj+=o}}iU,)?+Z7Y+cR.uxxz!DZMB!1. *i<3Q{st,y;]{`G@O?hHLX}5`LtIRgT' );

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

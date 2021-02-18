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
define( 'DB_NAME', 'yestore' );

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
define( 'AUTH_KEY',         '^Q &R:|N(~T!eDat-GHEA4_~S7D1kzAn^rZHe$AYHhSe/el3#)HzMRWT]Pib0c(-' );
define( 'SECURE_AUTH_KEY',  '[}l4*}@)=!8j*2)M-_NwrB.n_(O2VBtUad~Ub*qzis{H1!2KV&Mzz=xRzte_ktr)' );
define( 'LOGGED_IN_KEY',    'p+ZFb(#]&l<zN R@t3K>e!,At;DJDGV@zl$Yn^H) &.zVydUH$`UCNeQH]<Dw@<o' );
define( 'NONCE_KEY',        'B>W5D~9>pA^&7?1 O3A!|3^ov_tYi6X|}6*23Bfiv*OX9EW&,E^gQ21Pk:h{_!wI' );
define( 'AUTH_SALT',        'YZ,I{]$21hRkLj`oM#jS&]+bJ20A_F[L9#F2d#42Z,DS6D|&W]0dPqf1u0DDCVup' );
define( 'SECURE_AUTH_SALT', '_L !}9-*86$&A]2O*XDv8[? ]%Zgp=mqfAE@l){5X8p}P.g+?Sfcv;saDd_Kj`Ic' );
define( 'LOGGED_IN_SALT',   ')xiE@`Jqjm&nlIGS*hX:A6;:u^kdB8#9Q>{N@@F6*yaDa_M_oGDyapoi`b4Nj@)4' );
define( 'NONCE_SALT',       'OoZ?T(77DU5HcM>wG7wit$TB_GLgu1FaIn1f7K,2Q#:DpQBg,~z%(*cnSri(q|9b' );

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

define('FS_METHOD','direct');


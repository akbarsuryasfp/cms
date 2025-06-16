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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '1zD6W>mEp4)%xwxJVl )7E}V?~6 ^?_?@F^$lI]h6@:J-tJ,!=d_*_7b8^2/[099' );
define( 'SECURE_AUTH_KEY',   'SOy8giyT`48.~f[lxxP9L6tGx1bxJCDqk6cp1{S4jKM$VLA!ILE+H_:OGip<&Rof' );
define( 'LOGGED_IN_KEY',     '^>~LhpY_N-$0mQe%7c=8Sz}&gDLp%<442Li[4QlrcEdaEo9u6q=VfbTf0Z)UgQ)Q' );
define( 'NONCE_KEY',         '/ZCX2ya`g7YTgssxf7?y+g{z[Yq8FOjVRctD,Upf<8gj].<X9KG9Vv#gjbh4O/]g' );
define( 'AUTH_SALT',         '@;lviiR6#7}3uE6|U~8ySO%}2K$dq`fXyxV!?&.z}^G~Nn?r=h H2mcVfk )dWs3' );
define( 'SECURE_AUTH_SALT',  'vgm*crc(l.iQ]:eP[ni&H}qgL)|$HVcEfB~;16YW//Rv_-y|zbHdXw>$w?9aVd3V' );
define( 'LOGGED_IN_SALT',    'uz_u2eb(A.xN0@6enZ619-cAA7~6N8#kfz0^(LC_R|q:NYT&@:4Cfd4~]dO{Xw.]' );
define( 'NONCE_SALT',        '1LW2?iv{rJFj;5)kJRA)|$U?Xa@iOx}/s}tOeTR#;& zJj3`}UOKg%5l.E%qR@g>' );
define( 'WP_CACHE_KEY_SALT', 'w7H-XZ7?I?87|`Wa9Uy,YdV@/qRwywqww$ 5}N|=>h4zCk|t.?jY?kwxl!p4:mLN' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

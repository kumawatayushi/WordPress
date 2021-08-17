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
define( 'DB_NAME', 'wordpressnew' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'TyX3Y$|swD+LLGq}n4&(`>^(YI|OR}ct1)[YQ<?OAJ0aZfk7>a;( J&n>W$[PZT:' );
define( 'SECURE_AUTH_KEY',  'sTjj~GVPI=Jlz5On@2+V[4]sW&X2MPSW[RB2eXSVp3 j@Fr|BXDkTPe@OP$OFFY[' );
define( 'LOGGED_IN_KEY',    'f$<q6KTDE<)R25DG4<#dAz(3N`#SW6{]okuA<|{JNQV`bJ0I7y`/8{cwD C~C`~-' );
define( 'NONCE_KEY',        '{e%yP:vlu(`v|DB]]]kiWKz^RE! bU=ARc)fYF80<,=(i0cE#4QCh76eNYyit$m=' );
define( 'AUTH_SALT',        '~fp c(O.8t6NpgL9,r#3RNhco*uOCT3UAnxKeb=OG@Or4I}99V/Egs]aZP=yyu$P' );
define( 'SECURE_AUTH_SALT', 'rW0V4OscErmHdPZBeog&`sJ,qd!4I_OAHphXgxi7CoGbEdhzp 8DMihk3,!=D-kR' );
define( 'LOGGED_IN_SALT',   'sYu;|LCo[JeRvST_o/mx33.&I=>TUy*f0PnwX(.R$8r)IZjetk*60Sb}Q{F}cj j' );
define( 'NONCE_SALT',       'Qq^{sOf>c4zJz/NfX@zEX|<$+dK+&?Qa/HO3~R[.^J7<pZMVW$}R)Y95{wyHccX4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

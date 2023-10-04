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
define( 'DB_NAME', 'wp_book' );

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
define( 'AUTH_KEY',         '`x}yw9~Z^Y)$ t?f0_FcKj!HLhq`<jRg4B{s0j$AG`Y0C5^upqfiAsOZNl~`pG|s' );
define( 'SECURE_AUTH_KEY',  'n`]wa<a&;O$zD.c(/e0w/{4UeE}LVj-PZ+kn0M^[SnHSP}h+7`Lc*x*HCvJNVcOG' );
define( 'LOGGED_IN_KEY',    '7V4z4W<}vW{M]Sgx#}rp k2V,?rt5h =v},wD0(+YEr$(Z)6Wd{A:xFinMb(c;n&' );
define( 'NONCE_KEY',        'B0xK^g:x*]7PI;$AKSPe[1I*!<D>,zAc)ah/Jc|(gQE$[oD-rkspslP=ywO;8BPX' );
define( 'AUTH_SALT',        'p[y|&J>Q4JX:hj]DRh,jRvg7mj^92_qT`SHwJK0]^X~o,h/s^FQ+ymMsNgK]/cqO' );
define( 'SECURE_AUTH_SALT', 'Ss+`V>[e&g!o<+&D[qb{y{gRM%Dr?c~mUpuu%`E]!T9`/nmO5bE3`63A<*xSi@gB' );
define( 'LOGGED_IN_SALT',   '`aJ,|h9[JS(657[WnlJX&WYEF;B_G07j23hQ{@?o:::~bOIx~a~dUI?-<D;%@{~_' );
define( 'NONCE_SALT',       '8y%n,`&k/5bV]lyc}u]`kSf|V&{_lS,UVP:nR%Lqte);@E*20:8 o0|KpWP;6Ioh' );

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

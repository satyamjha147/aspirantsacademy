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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         't0PQOPdLz+j&Rb/uP2lK$|gLgaXY*k1RH~<VL_>-:Xda0V_pM^hDD.Zwhrn&e2XX' );
define( 'SECURE_AUTH_KEY',  'ueN~W4iKu@nYaM9.]UdlTgnR{<WsgqU XX>E2>R:_U#rVKSXQd2KYQ$fItix>]K,' );
define( 'LOGGED_IN_KEY',    'EQR6q/,yfxQMZ>Lt t{r,>6Iu5s[JE>`SSq)/u 8d-[]9]?>HoA:E6Dxa~vS(ucl' );
define( 'NONCE_KEY',        'f:Oc+go2is%/GybaTegAQmNkCRk{n.2U45Fv#!=4;@}0z,-k%K~PTg2WllU`+WHv' );
define( 'AUTH_SALT',        '7=Ya@&FD-;jo?siQQ.iid +b |mYmlATctU=h4Ai/AzcRn^5[x^joEGc(ck`e}An' );
define( 'SECURE_AUTH_SALT', 'l%K a]Q3J;gM1=m$yc.(V6oyQ9b>9rVLM2U2i}/08pVPJc_d*9/Wmg%QJ`cY~l[_' );
define( 'LOGGED_IN_SALT',   'Ij0g_P-G.Q(.Kl0)Qe*t<=u&D5>X.=bg g0.BYa2/B}({9_jCmc2iz1hH[5]D71!' );
define( 'NONCE_SALT',       'g>1)A@>gXd7KSFs `N&D?NnE(7vyxA a^T1#h#vaQe/lChA})BC6=M,.gp)?v#<j' );

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

<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'www3xcelercom_novo_wp_2022' );

/** Database username */
define( 'DB_USER', 'www3xcelercom_novo_wp_2022' );

/** Database password */
define( 'DB_PASSWORD', 's48PaSg2iB0O' );

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
define( 'AUTH_KEY',         '|CL@L_hYuF-{2yVt+NL<LO2-(}5{|OOCI}tdzd DTG$Q1K0d4{N,{AjKt!]O|Sw?' );
define( 'SECURE_AUTH_KEY',  'd1eCH{_Vt-v@7a{BI7gJ5L7?i(Wkv]yd])9DN=*T$M.JF[3M1W<S !5hx=wwA3f*' );
define( 'LOGGED_IN_KEY',    'm&34VOjb4|,taxr<YC*k7aOp[DJ*Ld[~Q=SY,i3AhQ*F00JM=4Ocg3/C`NhjQk&,' );
define( 'NONCE_KEY',        '5Z+GsArAeVg/gLJNP,TT<H,bZk_Kc</10]Qtde+<(HHx!_w$N~OiXHRR`~h7.Mmk' );
define( 'AUTH_SALT',        'rqgJz*@wi^*tPmjC^Vs`I!zg*2[_SbBIXM..%GsM8Ch59)N-~*AFR2v!Ldj7m2.B' );
define( 'SECURE_AUTH_SALT', '~gdbd7L;lYe5n^%+w9+cbI?3oad2M-p#pw`|#4TpSB<g]Duzb@h[RaxnH[RVPLPf' );
define( 'LOGGED_IN_SALT',   'B%h+F}bVn4aD&+@|5#Jc_yiAZUpOEq&LH[uT(;TPFy:[ybAgWGB21@NLIOCsT>Ll' );
define( 'NONCE_SALT',       'f34F=+{1[S2Y#%qzj!&5AMP,}nW1|qD_UaTQ+tH0ZOcq{l_E7Q15p.16S25jo|Co' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xc_';

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

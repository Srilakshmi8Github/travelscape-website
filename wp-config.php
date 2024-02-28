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
define( 'DB_NAME', 'travelscape-website_db' );

/** Database username */
define( 'DB_USER', 'Any' );

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
define( 'AUTH_KEY',         'j!z3$,Q@2?(ucd0ENwSce(jrXiKO){.qDkh$pB5C`|#V(A-~#Glq)oK)=Ybgau.J' );
define( 'SECURE_AUTH_KEY',  '{OY*dvbK>vsMw z$E5&_Gu&xi)3glE=^-7bZ#q7k4Dmd$N!k6/5>r*;EL^H<1-|_' );
define( 'LOGGED_IN_KEY',    'u&!a~sT<ibaLfsTR7KTq&0sHr{;Zh>s&_vSx@7qigD7^i/m}(J1>I?e[y(5dki=9' );
define( 'NONCE_KEY',        'NR90/owQb7-4bRaWDxfCHD&E.t5;R.5pDn{ZsOBCR:fPJ6{{>j JYy6L>!K}Y@8W' );
define( 'AUTH_SALT',        'Ep0,(92+%F^^[VW2;C`xYZfZBJ/m61YR=)%%RkZ.r[uoYy*dQYqIJOMP$eIYrJ&<' );
define( 'SECURE_AUTH_SALT', 'Myr^-shpKt},G ]=ps:Kw0aXv@<]SW|;h8O8C&O}=yC_8{d$#!SOmBK.~Q!4IG*y' );
define( 'LOGGED_IN_SALT',   'onk9sZ~96-O9B*2n,?*&j<< -hNk-5YdZIedF/@wxE7FjLc_{3:gVBpkoA=bgyC}' );
define( 'NONCE_SALT',       'PdPJbS+VGPA7KMgI,jSzbqeZii)&oXxW_hk&D 00M#*7SC+jcS,,_j&Wt,~Qtx!F' );

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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mmk_blog' );

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
define( 'AUTH_KEY',         'r*ezPsQrbEYJeY2ceDYiwT%D4{l!GB!m!8^Fl/ovpgL8:z~IO[yn733`;e xykCe' );
define( 'SECURE_AUTH_KEY',  '7cGX77;<-I/vsQ!9wHN(k(CIc)m/}%35NmU2]-*W7Ya hMmJGAYR[m-<VvMi!3t|' );
define( 'LOGGED_IN_KEY',    'MAqh?]ZDJ)n>FyRM5,KSVm2[KiFpU=R87UfEB0$PuP<#][OqBGQOKG=7`tC#=yzh' );
define( 'NONCE_KEY',        'VtaQ`ZQ~8G4GI!FQqS6L;V(KHn;U}*TD+|saH&-%Kv/$S+XfwX`%Aal4CHkq5uw&' );
define( 'AUTH_SALT',        'Yr&vn&?[GE5W0Yaz((-L~sf`8z5Fh&OSQ{DU4%qKB&D=N_x<vE_^?,N#gbJljHp=' );
define( 'SECURE_AUTH_SALT', '6W-D6p?RdO{x.@%ZY=u/B5O`@~Z1m5m;PPzNKOo_:3IMML87t{ZuJ~L(FxMtZUyC' );
define( 'LOGGED_IN_SALT',   'Gk&!O4f7=SCq3p!_Jt+`PeAz2i)WM_&[ID bf|NERU:ZX.,8QZ%]ZxT6Uc @ppZt' );
define( 'NONCE_SALT',       '2N}W^.N~.[j!9.V`Xg|r-s%?LqvVmlilVSAL|w}LVTW2AEY?3{3o(wG+lYp/B>}0' );

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

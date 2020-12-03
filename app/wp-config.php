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
define( 'DB_NAME', 'wp.gd' );

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
define( 'AUTH_KEY',         'AiV(&N(JNyC|C|U$enmRK,0a8IYX2p]m79A?nn$1N3rXko[E`xKuC0{NIx62`O$G' );
define( 'SECURE_AUTH_KEY',  'ig9]8#h/U<T_^Yv@?{0!CT`AL?^a-hyOtA*c@q6Vs87<Er/>{MA>NaGMdQ//,Db4' );
define( 'LOGGED_IN_KEY',    'Ot]iRBM JBB$W{K6u{*ws=@ pl}BO%!7wI[PPY?i~:SG0Wur;j:KtT5DqUu!g`j(' );
define( 'NONCE_KEY',        'Z=Abp)Rrycj^JLu(|xM#oQ6Tr^k<hqQK^w@X$E7/8e.Q7{`Vn;m|Czf|-pkb2Bf@' );
define( 'AUTH_SALT',        's4eQH;+aP{Gf9UJnMbAbIFpB#Eu$}#6e$Isl3W*Q>k&H7c)cb?y%#(_6O6r2VYT@' );
define( 'SECURE_AUTH_SALT', 'c&?MSSTvE>}>|`Y7rp{EMW{%g:%&`tKWDbwyfiJhLdVgBx!7!][8(CB#U_r?|7bR' );
define( 'LOGGED_IN_SALT',   '_DWL6<Mp(LMU_;z]a,@k4)^9MP}6lCUWB3Pq=.(?`6w9uJ8W3Nc2tGCfm7OP!}jv' );
define( 'NONCE_SALT',       'K$)M>bzSY5iss>x6bXMf{>(!N`GXDu5o[_ _>Pji4NB(,aF-lK!u4/$/rwljxWrV' );

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

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019-2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD','fd026cc75cfeb0c934c4494970694e2b278122204dfcbbb9' );

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
define( 'AUTH_KEY',         '$y.9fs(jz#qT~&VF9j+`D;CgGPH ^i<M5U?FgT^]zgX%C56m=a&tS*)q=&Ta%E1)' );
define( 'SECURE_AUTH_KEY',  '>]&5B,t|ILQNLBq=M~wOV~@JKDX&/Z gy-QIP?=^+j.Jpp5TP|5/?%FhtH*GFjEt' );
define( 'LOGGED_IN_KEY',    'tm9IMG*iXquQ6FP%dBhUPy*rbRbZ7s+h}`,2S%c5HRWp)K%&]{X=Wa/f:)Oazz.2' );
define( 'NONCE_KEY',        '~]ne%wbqypYcX8W=#:oX#+(ylVCT)z!xBE&/,|T>>Zbkz](UElp^|u&RD,0e@f$=' );
define( 'AUTH_SALT',        'KbhjH_V~^s=Wf^(TS9LqrViZi 4@x6a$+vk@Efuqw ;19A}kT.r}1r<P4{devT#6' );
define( 'SECURE_AUTH_SALT', 'l)HC41x^i#;I7ctB!dDPxyB$TYWd)WB^C5i*?>=3|wOZoN2V:KuQHhLx(hh(~x?R' );
define( 'LOGGED_IN_SALT',   'vL:EspBSKFB!9K+rplh*pH>Z^/q~)>Dvo&a2#z{}4e$q=.P_mp:1m)}<T@#aZW^z' );
define( 'NONCE_SALT',       'uhY6-(+Q2`}Za)r2>3`Q:2fVL]@b~*|$ we&To7N^;qoP[H1>G?Dfa}X1C$,2;t2' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

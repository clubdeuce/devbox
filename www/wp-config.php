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


if ( file_exists( 'wp-config-local.php' ) ) {
	require_once( 'wp-config-local.php' );
}

if ( filter_input( INPUT_SERVER, 'HTTPS', FILTER_SANITIZE_STRING ) ) {
	define( 'BOX_SCHEME', 'https');
}

if ( ! defined( 'BOX_SCHEME' ) ) {
	define( 'BOX_SCHEME', 'http' );
}

if ( ! defined( 'HOST_DOMAIN' ) ) {
	define( HOST_DOMAIN, filter_input( INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING) );

	define( 'WP_CONTENT_URL', BOX_SCHEME . '://' . HOST_DOMAIN . '/content' );
	define( 'WP_SITEURL',  BOX_SCHEME . '://' . HOST_DOMAIN . '/wp' );
	define( 'WP_HOME', BOX_SCHEME . '://' . HOST_DOMAIN );
}

if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', __DIR__ . '/content/' );
}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if( ! defined( 'DB_NAME' ) ) {
	define( 'DB_NAME', 'wordpress' );
}

/** MySQL database username */
if( ! defined( 'DB_USER' ) ) {
	define( 'DB_USER', 'wordpress' );
}

/** MySQL database password */
if( ! defined( 'DB_PASSWORD' ) ) {
	define( 'DB_PASSWORD', 'wordpress' );
}

/** MySQL hostname */
if( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', 'db' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
if ( file_exists( __DIR_ . '/salt.php') ) {
	require_once ( __DIR__ . '/salt.php' );
}  else {
	define('AUTH_KEY',         '(kGO+,s^>-||~d@<D{UY!-A;u0j86w0/fSI/o#yJZ4}NWbAd<!45p7*gqZW@aFvK');
	define('SECURE_AUTH_KEY',  '<]?p~v=m8+@(^c}@~rfKZVY5:U*K^k#d/G+Qp<0e5Rs@z.57B/%I3nRiU|E|gzh2');
	define('LOGGED_IN_KEY',    'p]2Qa]w-RvWzj/^!{r`6U:RE1VF|FP$gpNS:dAL?oGsCwB._8j<<69@*NB?FuRH-');
	define('NONCE_KEY',        'J+0lC^O@9BBv6REDXNVRJTNN:Tj|JE0 E]hqww!ACE-^?,J-BwU+eO/IDy|@p%dN');
	define('AUTH_SALT',        'l1`EtK#|}v%TU$+z]@5kBKAag-s})8e!|B+E^&~G_R8V&-!Mz$w_b@^^HaliA`O!');
	define('SECURE_AUTH_SALT', '3x@|^)pdNh7aHa4>b=yT}J9(Fsk.IqN15`g/iL2+#0n#wAs-n0D{@=&}y<7u`PIp');
	define('LOGGED_IN_SALT',   '~154$j{=C[BGS[2hK[-u%6P.3r.e7Qrh!3w>vVBW2?}cc@fN~x=X6B=xZ}o[u7<3');
	define('NONCE_SALT',       '+Hy{mD(]>}4mVUB<ha7apVit7uS@-Pwq3EIHM:gsdjR7#g]2I4PZ+XP|]eL2I0g-');

}

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

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
define( 'DB_NAME', 'exampleDBrdrlf');

/** MySQL database username */
define( 'DB_USER', 'exampleDBrdrlf');

/** MySQL database password */
define( 'DB_PASSWORD', 'ZnT3yVQ0YS');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

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
define( 'AUTH_KEY', 'rf3B,{,}v$JQ3BBI{3fnQYQYBJv@gnnvYf}3$,@,nvBJ}44^>YFRmuXe;x**#qxDL');
define( 'SECURE_AUTH_KEY', '*PbELEM6jQXXfI$.munuXf{3$,.{u$IQ3AWdGO-_ltt-dl19_]_]t+HO199H]1el');
define( 'LOGGED_IN_KEY', 'TQYBIu$jnqUb<y^.{u$IQ3AEE6mQXQXBIu$fnnuXf{3$,$,nvBI}33B,{YfIQJQ');
define( 'NONCE_KEY', '0C|VdGNjqTb<y^^<qyEM3A3B,{YfIQQXBIu$fnfnQY>rzy^jr7F>>0z^NUYFJJ');
define( 'AUTH_SALT', '3ErybjjqTb<y^y^jr7F>7^>UbFMFM07gnQYYfIQ$,nvnzck07@>>0z^NU7BaiL');
define( 'SECURE_AUTH_SALT', 'vyfn3B,},}v@JQ4BBJ}3gnQYRYBJv@gonvYg}4@,AH]2emPXXeHP+.mtmuXe{2+..');
define( 'LOGGED_IN_SALT', 'z@>rzFN0708!>VcFNNU7Frzck*<qxEL;66E<;aiLTMT6EqybiiqTb<y*y^jq7E<');
define( 'NONCE_SALT', '}0@|RYBJemPX.{u++.muAI{2{3$.PXAIIP2AmuXfXfIQ$,nuu$fm3A.{,{u$IQ3BB');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

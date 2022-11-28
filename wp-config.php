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
define( 'DB_NAME', 'timesnpc_wp582' );

/** Database username */
define( 'DB_USER', 'timesnpc_wp582' );

/** Database password */
define( 'DB_PASSWORD', '(85EpkS)59' );

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
define( 'AUTH_KEY',         'jfam7msixyd7rzgsxgpvaptqhd7xmj2ya4ih0ikw9fs26jgmumjphfs3xccmafem' );
define( 'SECURE_AUTH_KEY',  'tnlzts0n5airlxdeoogwzaqty88xvfmz54careeuwl6u3ez07tpoluqrwfk6lnxh' );
define( 'LOGGED_IN_KEY',    'ifznvegvt5sz3r7gyroecxgli9wcp4t6o9nvowm4lbf9byqmtpmev1wxkpfcr7yc' );
define( 'NONCE_KEY',        'd3ipwsskw4uwcd3jffarqmowswnc19yyg6fj2lsso6tjw5awsg7cbwjdxmxuu6jh' );
define( 'AUTH_SALT',        '7g3uc8lpwy2rsrtb2wyzelssct8xfetpvjexhihsmvaj4x2lwi7dmoir1wrc7ykk' );
define( 'SECURE_AUTH_SALT', 'eyvqfbsvcpl13jxo4sixbttvefhvkvmpzaluajjojsal2k9q6by7mw5xy7yzlska' );
define( 'LOGGED_IN_SALT',   'uj5tn5vqwtcy8ik9e4enuhha00iztik0k3utqe2f8wi9jybijcdvq8krmxvlj75g' );
define( 'NONCE_SALT',       'fktofla8uun52fv0pw01spqbqkav0i7wud7e0rmwikuhh4ze1snhmzfbhdyge19h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpoa_';

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

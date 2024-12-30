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
define('DB_NAME', 'vztqbymy_WPXWI');

/** Database username */
define('DB_USER', 'vztqbymy_WPXWI');

/** Database password */
define('DB_PASSWORD', '(l347dxp)rO6Xl&11');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '27de836ecf4c349429dc9b9ca09f9aa0a32cddf3ed99cd81daecef59ee92f1f4');
define('SECURE_AUTH_KEY', '5bf69ad92aaf9c33f30790a4b1c49e1d942bf7b6a21c9e3541fc52961b1ceb0c');
define('LOGGED_IN_KEY', 'ee96e8196f6f9bdaa1bd762ffe7876e93d5c03389a91bb2b56644d8b1083bcc5');
define('NONCE_KEY', 'b7d46340829cc4f32f7c39887a16a221f857dd7575d6598ad9b61313161f3f8a');
define('AUTH_SALT', 'a5f5b6daf43527075c61ae017483f9e9feaec54763ef2f78240e21f86145d6f2');
define('SECURE_AUTH_SALT', '50053eabfa9fe8fe0738e7c80765d9c3ab7c49fa65860b852fad93da891d2e34');
define('LOGGED_IN_SALT', 'feaacd2cf1bbe389ada1c628eb2f558f262dbdd572956752038c3a4f6523264c');
define('NONCE_SALT', 'aa5e0c98541f303c3715324f58692c040ae2d38d21a12b9cd85c4a2001fb5443');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mKU_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

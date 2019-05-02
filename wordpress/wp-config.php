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
define('DB_NAME', 'ecotrash_WPL0V');

/** MySQL database username */
define('DB_USER', 'ecotrash_WPL0V');

/** MySQL database password */
define('DB_PASSWORD', '8BaLZk76KQtqTFfWK');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'f1b43802499e0c395e95abdeedf917295750f415adf5ac56aa031f93a68e1f1a');
define('SECURE_AUTH_KEY', '1275efcf64e0801e9e5f75b9e1f8df6313c9aee180c6079191a587ecb9b37abe');
define('LOGGED_IN_KEY', 'b91ae1b63894b6cd075732030b75e62e22f9cb7e019af3e7b69d275a20916bfa');
define('NONCE_KEY', 'ce964cbc677b3890a4ab5a0568f58170985b50601316dfd08d7511cd84e40dd8');
define('AUTH_SALT', 'a287e56426199549b62eab343ef3920255f63fcdda3c455c82878dba1e384d5d');
define('SECURE_AUTH_SALT', '199abab5e3bedef05e1707b37ab35919a6a1febe6b1fb12501f10d4f9580730b');
define('LOGGED_IN_SALT', '8a42d1202ca3104970baf9443f986af589fcc3cf32622c8bd13b4b78f568e783');
define('NONCE_SALT', '16fbc51af75b6972c34e62e6d92da3ca812c38446e3caaac5d392cfe742c4e87');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_L0V_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );



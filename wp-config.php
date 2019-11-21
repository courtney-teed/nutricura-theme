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
define( 'DB_NAME', 'nutricura_database' );

/** MySQL database username */
define( 'DB_USER', 'nutricura_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fW&cV,A8zYHD' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '6zFfzbVK5RF5DS9BZkzvKSQLx3DltAEPb7hnJoDXHGUH74VN5EcP3uywEmMHVctv');
define('SECURE_AUTH_KEY',  'ugPOs6PY9FTpDMb85NP7xdrh7U7zWrFd7FKQ6z6Zgl6RHkHlQ2qpeefz8YjwSiCV');
define('LOGGED_IN_KEY',    'JyVrYzpe33zC052cN566JcSWu2EtK9GwxRZBB4fGDPVhoGXZGztxHdwSM26Jb6gh');
define('NONCE_KEY',        '7AR6QeGZEJtjQOimBWQugoKFzIDKb9ts5UQQe5MDYQ8WZ1nkfFBXsgZAQlIla2Hq');
define('AUTH_SALT',        'yjTXE3DW8dUNNTIrPGHdab0qXEVjd2Yir4kPWspnk8Aho31v5aWBzLv5uan0ZvA7');
define('SECURE_AUTH_SALT', 'usHPzeDCxcjEBYMNfVpZI58zwnNVJ9P4ElQK5vaky6HIZNHGsj2HYF7u3jOAEB7U');
define('LOGGED_IN_SALT',   'n5TeW40InH2I2A2l6Y0Ts7u3H4lhYObo9qambRh8hcQSmTQ84ROSC67nBawtjgUy');
define('NONCE_SALT',       'd4l8kzjl6Pnz8sHZGG62rVwkVsJngQR28doZ7SqoFS1StSBWtDuattvKHjhZg4Yz');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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

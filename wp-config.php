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

/* 
 * These environment variables are required.
 */
function require_env( $name ) {
  if ( getenv($name) ) {
    return getenv($name);
  }
  throw new Exception("Server setting not found: ".$name);
}
/*
 * These environment variables are optional.
 */
function env_salt( $name ) {
  if ( getenv($name) ) {
    return getenv($name);
  }
  return 'Default localhost salt';
}

// ** MySQL settings - You can get this info from your web host ** //
$mysql = parse_url(require_env('HY_CLEARDB_DATABASE_URL'));
/** The name of the database for WordPress */
define('DB_NAME', trim($mysql['path'], '/'));

/** MySQL database username */
define('DB_USER', $mysql['user']);

/** MySQL database password */
define('DB_PASSWORD', $mysql['pass']);

/** MySQL hostname */
define('DB_HOST', $mysql['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         env_salt('AUTH_KEY'));
define('SECURE_AUTH_KEY',  env_salt('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    env_salt('LOGGED_IN_KEY'));
define('NONCE_KEY',        env_salt('NONCE_KEY'));
define('AUTH_SALT',        env_salt('AUTH_SALT'));
define('SECURE_AUTH_SALT', env_salt('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   env_salt('LOGGED_IN_SALT'));
define('NONCE_SALT',       env_salt('NONCE_SALT'));

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hyufc_';

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

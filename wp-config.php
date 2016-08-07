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
define('DB_NAME', 'hayes');

/** MySQL database username */
define('DB_USER', 'hayes_user');

/** MySQL database password */
define('DB_PASSWORD', 'hayes');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '/%ljY22hb7UCJuyt!Hqz@V~n]hO[y!/IPU@k|iI5oId~EB%ri)kVk=gxTx}p+#?3');
define('SECURE_AUTH_KEY',  'IkhQ:)18xu9V5KLxStjJ+fB@,WB.fxbjP5Jla5S*&K&WM~)o64stRRgvSt0j2a5(');
define('LOGGED_IN_KEY',    '&d$N#;*@Xc+qwcqY%{hz[Aj{BPo{RZv1tho|E[T,#BS:T`LquN&hD->wsT;o54Bx');
define('NONCE_KEY',        's30~Rx<Ncq@AxO2nnmPmMX`vcI7<x+>kO_zqzDd6n!hRWJbdUTDYq5F(9?-E|zDq');
define('AUTH_SALT',        'aM~dyRy^PKv5[ga@ra4Fb$iDxf42#7)zb/!wPq0w0&iM-JH:uw/N?d|pm-<RQ@h2');
define('SECURE_AUTH_SALT', '~Tb0y-u2HeM4]_AQ?HU{+US#0<dV#pwm>F[b4rR+(QqN|f<[sm{A)hZbu8,jcNGf');
define('LOGGED_IN_SALT',   'sBYq3XK-nuMZgj}NwA&+HSeIdQ/br>&!^:K8+/PL18}x h6~Z:?ivb}PEIk4-mKZ');
define('NONCE_SALT',       '!pDi,JO4v |d(NfCvtqs7-_t1@VTsI:3>0^rixn&rA[TPt 06$o_DpC}XFgDGUw-');

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

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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'snTgqbODJiG+qbEYMSb1N/0BOktmgHow8+6JwCd0ZSo//0N+hM+9NyIZv11BqkIu7bYcDDmc+6GEuTfg5YYxcQ==');
define('SECURE_AUTH_KEY',  'JazAZ5lM/p2/apa5ly4KUrKfFGPu1P3/uXvzzwtKRltL9nYNpvBOs3rGY6IMbenuMzBfB/E2eKgZX2nqEt9dSw==');
define('LOGGED_IN_KEY',    'yWn26smM0F1Q5q6rGJG8UDVX6qJpZWjcAq0cvLVKSTTQuus7/S2sxFvsNIBlGXTNRp+J4yISU7fy6p2ZN3Zcnw==');
define('NONCE_KEY',        'SfJUhlOXVOlnUkWkhnM8VBYSp0qBHkz9Ds9Ugxt3IaS5/PATls/rt17vhx16joRpRznXcurQYAcN2p96bMZChQ==');
define('AUTH_SALT',        'zHh17p0CEMl0Mx7Boyk3NgN16lQhf2WJWB4rvvLUhRM1mhlnFtVStG1Q16u0z9A3ajOfzbT7Rl8RcGdQsdjuWg==');
define('SECURE_AUTH_SALT', 'CZm8fUaGOtoIPSkHT3oiAKjRWCcaGeAmnDuPwjAgKAvU/83x2kVdxfL3qhQc8DrKBhBSPHoaGn4HeNJVjOBc1w==');
define('LOGGED_IN_SALT',   'W2cjgoVDGkkVSYd3IhximL73pkzpShydVjQsq3dJE6rZpOObGIu7UXL3Lmy2QEYIRCsPnll280JL9jFRdlYggQ==');
define('NONCE_SALT',       'A25w/ip5JDWARw22yQGYPcNXQcqxTG+hP8MU0xlGaQ3HelCuCdbsJiK8NKvUOc8vjf0Xdrbtfxuqsg5Xef1aBg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w9th_';

define( 'WP_DEBUG', false );


if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

// WORDPRESS_CONFIG_EXTRA
define( 'WP_SITEURL', 'http://sageteamword.vm' ); define( 'WP_HOME', 'http://sageteamword.vm' ); define('WP_THEME_ACTIVE', 'sage-theme');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

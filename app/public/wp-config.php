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
define('AUTH_KEY',         'FkNRSSTxyo3XKA59L9bb9nSUfbmj28unakXMRVxv3bVDCx5ooBi0Oa6HIwVhmx4GqUBrsEPT3ZANVi9FeMfcMw==');
define('SECURE_AUTH_KEY',  'U0WfDeVwh9OtgVYvSp+lg84ti3CLjqazJSTQTQmXcNeZZCU2144WeHgd01rK8Xnd6rbnQaLdhF5ME/LjA+haMw==');
define('LOGGED_IN_KEY',    'W3XewXYr62Mz1WxMzh9XRMu5J4X0CxrM72YmPSLeZsBWPuFpFgPsYvbdr1NhJBvI61MbEB7rPPpZxVDavEKH3Q==');
define('NONCE_KEY',        'Jm1SFdVSyOasUPiUejzlY/8dWI9/1jj6f/Rz+mvbryQgeSZPwHBFxVOFc1uuI8JPFxjty9yrOGvjOuBoxCB+mw==');
define('AUTH_SALT',        '4wqAVuznExZ9840E+KF0ulZiDWR9tGVMIpMxNSrtryUs42iQCVlvOyYrVSflOnur6OunRogdXpsTURLvytVYFQ==');
define('SECURE_AUTH_SALT', 'jg1VaLJlsVcADr2elS24y9nr+KBmsN99SMTqsLpFIWmktwzFYLsiUSDBd/9SwoIIyoanSF7DVc5t+4NDZWZcxA==');
define('LOGGED_IN_SALT',   'S9r4uocYeNNbNM1KsRb+kXzxtjiuqhmnCJPtO8JbOLwQbo+ysH3VUoXzjJz68KVa4YitzCPfq+ILMJ1I7YUDdg==');
define('NONCE_SALT',       '4nieI+HUHI3rOVrSyI5Jf8J0OeXq5FXQpFneIF63960iL4j45NRmWTBva7lmED4i7LI1aQmqciPsQqsEs/ZGag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

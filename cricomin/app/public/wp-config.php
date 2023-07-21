<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'N76U/iCzLhMM7G2Nvsp4TjNYh9Py+WSczC9p7CQ/tD+KLBskLj+hWRilPpyTZVNR+t1hwOzwfo3XyJ5dN6eIYw==');
define('SECURE_AUTH_KEY',  'bZGLdvUx8Ba34oIQ+c558iYXLXem/uxRkbbMDtThaY4ifPDXvVrO+ghaeyH6EA1Sn1J+ub4od5NJbZc8Bsaqiw==');
define('LOGGED_IN_KEY',    'aymAfMdU0GGxp891hWiakJ4zXz6iYNtiC6WF0y7zTe+9qzu8stbDbNKnj91JlJCJNAkCd0m23d6oKswEe7KPFw==');
define('NONCE_KEY',        'y03Lro2Hd2f8JoeBigQOYJBlvlfOFSLp1siy2ZVAphGEMpZR9HR/WrIi02WOw0+iC9PGp4Wx/W6mcZjlL8H5xw==');
define('AUTH_SALT',        'PCQ9MCRdWjIwwog5t2VdvHUcQ3GbFflaYBcgUGahWu6Qxn7GU2pcko/4xEhhBTv7MPnmJyJvoML9rEH3+LSykg==');
define('SECURE_AUTH_SALT', '72H+D0R+jLxAhT3oehH6fdyx71vfODqm6D9ocoLKUA7F5uJJxMux1p2T7vLyhjS5k122jusSmz7w/OxcoCtyJw==');
define('LOGGED_IN_SALT',   'Hqut2YdOq1lZNv1xPZ7vpxikw+TtSkua9MZBWT7qzX7OA1s57EMjR1JeeH+0oF0NoMWsekkXubutTfSx7AhX3w==');
define('NONCE_SALT',       '1ip5aJ9LI9rRz4Mg9+DYjfzE/JSiJ1JzTpGQ+yJAleGVJrZwoz+SfZEUZ6fdG9p6lCBuiMyHPR7ivGQlk2eH+A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

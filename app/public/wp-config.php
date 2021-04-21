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
define('AUTH_KEY',         'woGVydMzhk+LVTmlLNkSPI/iy/HsNW9qD5mXaMbMOy/348VT3UEAQQBrvDDgLi182V99Z/iRcNgRCa4hfAnegw==');
define('SECURE_AUTH_KEY',  'uqEn0IlwgiIT+pYjVJkRcQCLmeWSoQbzF/4oSeS2gaIpwayiNBB9LYa6H+jS56Cjd8PAoxRXXbM1BXv1bGaqlw==');
define('LOGGED_IN_KEY',    'RB5zOKrSn0kvoXREK7jW9ZIj6rYT9J6YQh8DwZ2zEqYtOWEA31yUHcnOip5265LsDwV6b5bTqaxNujzVdI28EQ==');
define('NONCE_KEY',        '+bHIFl25zL/M348Wf5KJLzD61JENH+Od42sPnB6M7LAgArPHI8vnZLeTBNQnn7ZJH/Nq3RPP2UI6ijJLXoVT/A==');
define('AUTH_SALT',        'lc7Yok2pDqfoXj4+o1jfleF36RrVqB9XbESZ68sCcQvWCIKRndkDCusnB0DTuliYsNF1/dKF7saSqNBmB6sgxQ==');
define('SECURE_AUTH_SALT', 'XUPkwaZEHNPPolYxSesMivnXexecsEvtd4cH4SuLyZTd6Tf0KjfXkBIpY3LT/c8yKRgWyOuqmlv9wL7g87s/IQ==');
define('LOGGED_IN_SALT',   'noUg2MEXO1xeEIe1ZdSY0jJIXvNSeGScGNR1P1bqPqG4OZS36LzUr9GQ1wE9ifVOyYujnbIiyEmJ0szRUIo4ow==');
define('NONCE_SALT',       '9LBpudk3XYMUbYY2Ea+3iY5cp5RajI8PHHgOSadjwkOTcdGTqBGA2F4oxzJ5pNMyYq7SCdcITYcqe4OiCtZS9A==');

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

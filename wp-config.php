<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'mygoldh1_rr11' );

/** MySQL database username */
define( 'DB_USER', 'mygoldh1_rr11' );

/** MySQL database password */
define( 'DB_PASSWORD', '56Q-S9.ypS' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'peh0sgashlo5m1nogoiu0cl9mlyfwz0b4kqjeg7pcphmrmzgolverbrphiq7jxt1' );
define( 'SECURE_AUTH_KEY',  'yqd8xroelhsdgi1gq2shadoiqn31svz5gftpsoosqytucookpwu9jyuow1rrmwx0' );
define( 'LOGGED_IN_KEY',    'vy4uybkqzgazmwybev56lhz10s0pcvkid56tmtm4jd2wucag5kv6lpcxxzzvijka' );
define( 'NONCE_KEY',        'wyjhoygxnwgtk7gw7qp4qgadmmxapfm7xkopzrwcugug66ltf7xfhjr9bfever0f' );
define( 'AUTH_SALT',        'mdm5e4u55oqbqvlt3xbvi8ui03mqscqaqvekitkxvwpf3mz5btqvhd9x82rlwlqc' );
define( 'SECURE_AUTH_SALT', 'vwgq1uspzkcvg1tpjmtmd2jwiimgyhynbritapi7bshfe7zx3ja9sbwnkpsiigs0' );
define( 'LOGGED_IN_SALT',   'oas7k8rxfu9qi6imj17oxafzrzgk2xg2kv1asdfga3ldxf2wss7tmbiwtycbqo78' );
define( 'NONCE_SALT',       '2fqxdeki13k8yz9tknb4re1awskysfki0wqqwodklxu9idb019vdu9wjfoi3eox6' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

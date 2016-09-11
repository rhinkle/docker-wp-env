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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db:3306');

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
define('AUTH_KEY',         'Ly#o4@WdO^dr%~KuSv$BW`v{%QN)M:iI]!ung,Bt]#eI&X}:X,W i]>2c=^S3DqX');
define('SECURE_AUTH_KEY',  '#.4`I]D;K/2xvy4HA 08$yLV+e>MO%y:14bk}M}Ce:8wvZMx#)rM2DQbsl/>YZK<');
define('LOGGED_IN_KEY',    '3c9$=c>)-&C9gM]o8.SlWIa#_c5kByb!.V}FkK*!_[Jk]y|_+ml[Qbz]xy=Noiqv');
define('NONCE_KEY',        '>P^sJ%,b^8V -4vg9YLm.[,S_Gk!48<p_=Uq5eu;NRn7c??VKwEry<<eZT4>P:`Z');
define('AUTH_SALT',        '(:,2~UAhiDBg+CpqP5Yz%%-R#V=>ekJOGD4L`dMuaaInmZTJ~of[Z@H^06{.+j4^');
define('SECURE_AUTH_SALT', 'JGjNc!>]=BM Xjr6Zs+E&1<]&}lOXZOw8=WJ6+:o+.-:45[Jh*b]5c5fR:`Xqabk');
define('LOGGED_IN_SALT',   'h#%o7( Ai!uswG;pxJ&1HbA@gRA#ga$$YK11^v4w8a{ x1W{C(5_Fq~Y3t%wpg(W');
define('NONCE_SALT',       '|WrJ(E`i)k6bV. k(&2+J:8Ce>A1am;HlJ6WAeoW`GpJ}GcaL0%O{[S;.H{```@M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

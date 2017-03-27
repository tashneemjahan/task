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
define('DB_NAME', 'globaly');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'i-.LT:y#v<GFuzbLBDP#>&C .<dLxV>WLxZXI<S#:{H+J]:b$0Phg{_rR0^yJ1&B');
define('SECURE_AUTH_KEY',  'uBxc8rQ/AVhpE+YdqJf3Add (;KN(+aH_(hP+(16,SkMjLmH^Nm .{B=jfIWMm;!');
define('LOGGED_IN_KEY',    'Sw!m~i<dJsi7b/m*rKv3U ^44-ufF]$|l*w1SWj7SE;H<&&aU!7gHHCtm=K 5TH3');
define('NONCE_KEY',        '~ahss%=i<)42<Q2ltKBobMV3;wWt:3{]?qWZw=(I}|>nPZ:PDW@}cbPn&:e.x}c]');
define('AUTH_SALT',        '47$e:R~`UT z)([j}XT:`p9IX]W||Q!TJXY0_(]]<bv%U)x<!(DF@@@I)nAH;npE');
define('SECURE_AUTH_SALT', '.f6%fZsC&Y`d3[)DncO&hB$>iehY9d_A9zd)x$lEUo*k1AEP56,/Gx@<e<?G?bYO');
define('LOGGED_IN_SALT',   '@1miSVkee?3UUZw&f!=_s2mQ5bmn8HBjXo b&%(zI+%<vTVdJd&4sp;Ga0T|=8Mh');
define('NONCE_SALT',       '+[#s!g>J5:g<J;d0Lz?kU`oIE,B$E9l~`cvSUtBQ^2,b4*oPGYt4%{S-elkl^1S ');

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

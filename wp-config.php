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
define('DB_NAME', 'wptest');

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
define('AUTH_KEY',         'K$li5$[MqV7EkcrHu3FNXe)^{n*aR7;(Ee(A_HwvdPmJYDql>O,Es%fh<=!2w0h=');
define('SECURE_AUTH_KEY',  'y2[f8BJh&UbaWH&a`rDEv}s7Z1R@#,=m/pe_k/#@#9K@(MdQ/1Q/NaD_z#Q8oE,b');
define('LOGGED_IN_KEY',    'n6u!az~g!q~45/_V>tknxLj8ULy`#`ZrM00)bg%STn>uDe*y9$F]+IzK%7eaHUH5');
define('NONCE_KEY',        '<l@b-^4wO*^_}Aa9zONm4tudV0C+CGzl,eB>c9:NFoHGnJ%[P;DpiutE]t(^u>b[');
define('AUTH_SALT',        'YGtc9YO=2n`P7QPEKSnC~I@O2v^]-Yepg_I~]kR:Eo|.Wzf~`]([1s,2L$~JNt!=');
define('SECURE_AUTH_SALT', 'YI/E877:FU<ixtj1%X}:V-?M<&7q}:{JX8VpE!V(%V-P25eTZ6tZ^T+mv&Jx{$%v');
define('LOGGED_IN_SALT',   'rC3Av9xWTKizoxc8Bx>44]xsv:FeUXfJoOD_[r!4$Fa@v01*97=Gw4[lXQovV0c@');
define('NONCE_SALT',       'L>Ny{*}S?bwa%,[UpmUk[=;SbE:u=rif+h?2Wby>Yv18k)zidhE;1%jl6}lEg)E~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'esgi_';

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

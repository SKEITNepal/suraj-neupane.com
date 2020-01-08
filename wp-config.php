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
define('DB_NAME', 'surajneu_wordpress');

/** MySQL database username */
define('DB_USER', 'surajneu');

/** MySQL database password */
define('DB_PASSWORD', '0fa3UNk-Mg[2S3');

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
define('AUTH_KEY',         '4F#RE/]wGqAOr/WtXMn|2M9;[fK;5uFp;3FtztcFh2SMyH[)~qJ@#Fwpiwqr!;]N');
define('SECURE_AUTH_KEY',  '?-Q%eb?Tosj(>-!=)i&{S~Ozb@ZG?*N[)-&3<5;Rzy*E*zuavcEYMAlr+&<Il@!r');
define('LOGGED_IN_KEY',    'hIFN#S8q<qRIV[<|EbJ$q3ziOWD_`&Zv&WtOf?)p5Q8C&%elOU^UkGr}C1(+F$qO');
define('NONCE_KEY',        'Cz$J4J}~-#mq#KN,qEQMBF{Vy3sf.lW=o@-7d&{ G)9r4wW){^Y~PP3yZN}Zd9_a');
define('AUTH_SALT',        'xe#cn,^+~^F8P), #)&E~x5n9{>$Lw196(]PMeD5;9CEZ1=h$wXUxJdGadO+%:F,');
define('SECURE_AUTH_SALT', 'RAk>_02R!sv>03AZnr:AsyDBK+g_CDJ<@i!:LJI0<z z<81/}@aK:WfqwvhP^A(]');
define('LOGGED_IN_SALT',   'f/>*8`1H$=&;XkBf-{&*D>{iMru(IROdYQM^qKJysbu@`3s;w>oaBp~+jmB9|~v ');
define('NONCE_SALT',       'R}$isf_7I@,kyhnY0^*pi(~.x5~gb8jHBf,Mb^Zd0dFPS,QrATKV|54k^!#1!rQ4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sn_';

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

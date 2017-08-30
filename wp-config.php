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
define('DB_NAME', 'wp_theme_bp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '!3S*u&5pK(T%,Jb}z$r,A-,txm3[wa{T:T;.~m,,|P@eF]SXP5[{`++L<A)FK#50');
	define('SECURE_AUTH_KEY',  '~%in-O[{I!aDtex8> 1!P+MFj*w=3hK;DZ->k$NRO-AOnw1[sxg8 {g}kpAg7$)1');
	define('LOGGED_IN_KEY',    '[)^7FpDS&--~h-xLa$b+pi(5LJ>>FUBp 13W_RDCl4Zy(ZqZbq7l(R(5D*1!v*V7');
	define('NONCE_KEY',        'U`T1bTl.:Xf5/Q080(^Z(I{yrtA!Ttxd3oDHyKF+JdSKM={Fv(@jxLD%>oQ#u l)');
	define('AUTH_SALT',        '|866hcVX[.+G(^AJ(,jZIrr:15BqbQZj}%/|HHw%6b/#^RWF`Q;[C3wXV[hybc&x');
	define('SECURE_AUTH_SALT', '(F2(F XX(lRRe:W|fgeI6b(j-I3C8kTq|NOjE>/ <+;WzLsmm/9aXu8EOA7c%h9Y');
	define('LOGGED_IN_SALT',   'UGzkk-):OP 1t9F9(Yyd-!#kV+[TflQ n<han)o%7E2fSqlVXr{ys!r($gh-&ppe');
	define('NONCE_SALT',       'bz3el&;hPPAVN)2jVLNEYhuz3?Bg`g4zR8OkDE^bt}Ps[ppv3EP,+z+wBp/tS/Q!');

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

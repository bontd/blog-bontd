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
define('DB_NAME', 'wp-bar');

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

define('WP_HOME','http://192.168.0.74/blog-bontd');
define('WP_SITEURL','http://192.168.0.74/blog-bontd');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^bs%U3geKlgV 68 =/VyKiF8ask`kHIi(#}{jUQ3cE%qJ9C:xR1oPIfkS7p(u,A%');
define('SECURE_AUTH_KEY',  'by.Zqw*tT<pgY]=6Zv~o_k`|+:DKFfA?[X,bx`c@K@`1Si,#:IQTOkQX=76y` -c');
define('LOGGED_IN_KEY',    'nRKjCb,Q/eQJ.FNo|BK:7:J6PGqd%?xFNtAa{Vs$:)d0x9|af;JY5IUZv0,a%Blj');
define('NONCE_KEY',        ' hFGlL2n2&>metF;zQdYM+r}K*xomqO[a*7mP_Ob_1K|f 3m9IR[hx*)/*@ADz#y');
define('AUTH_SALT',        'tHUr 2tF|p$GP5S}uva?{,YJ1q0_CQ,}m=O~nJ/5J5wy9#|{>i(xw I1x~a6Yq~,');
define('SECURE_AUTH_SALT', 'll.Z=sDBzFV}H}](YyRu4>jX(}Q88C35s5$h+]7mnMR:]d2Us/<|nY_^8IK_%qn0');
define('LOGGED_IN_SALT',   'i)PyON.vmmzab7v[Mw0$(eSs]s }[N~@{9BmC:xjV),YuirClPDAn$2SvaP|J|TW');
define('NONCE_SALT',       'nH<aYOtAjyF1aK?4_B5zmnSB0 {XRLEFMQx+DYHo{`1?v/TX<TzS$/$?i~vofVX}');

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

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
define('DB_NAME', 'marlboroughwines');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Fv1GHJxXX0`!Zhb#2YZ8H6q<N)S:CdojOPVAQ0kYnu.l`]yayxy[!v1`d/4-F3Rm');
define('SECURE_AUTH_KEY',  'aFyrdY$DH<xnpx9m/oH:UAk*wPYrp$$mh*)r%^H.z9s+h7y{588_ehZ%?>3W2P0;');
define('LOGGED_IN_KEY',    'tY_8i.Qy634[#5]LT^&/fBDKcF0ckl<7xs+N=YtZ(3%.F[0KLcBKm_{r/QGAi$*H');
define('NONCE_KEY',        'h1ZNdN,Ni:fQ!~V+mDqS94g:ErEcDY9wo-D=Mntu XEu23pS EyO$B<O0yu]oJq.');
define('AUTH_SALT',        ',1+M5@4Co!,m#qz&T{[WYxGiWu(4WVsYIr4&`#U_L$DRH]:}&VdnQNcpW)z8+7K8');
define('SECURE_AUTH_SALT', 'Oxefj|ii3EwyijVP8q^V?|1]&?L6j({)i ^NtZ5.&>Z}6t1ZQ@3Z^8Jo=o^h9RL+');
define('LOGGED_IN_SALT',   '[F*cd)4.IA5~p(qGa6?8|K(C re;X7^R9I-R&d/U1z1vc(vXV9A/f.yL`5-.UT/@');
define('NONCE_SALT',       '&wG04E Q4_ooM(rs/${^6LE3,Y!)N#0zGQJCE~tEEwr!`+12#US9Tc2<-8v0p#FI');

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

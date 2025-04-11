<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travel_blog_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'uxr~{VlVuIR/28ZfY E:,lx#weS-e|gX/H1I 5)/MOi;[`z*T9XF(c1vvXALMQNY' );
define( 'SECURE_AUTH_KEY',  'DlPf=yki&iI>CssG`e1m@f@=H6Y~Vg4iI7RTBsIeOI6uJo]0~4}wceqn0UR9mWwg' );
define( 'LOGGED_IN_KEY',    'PHUZlt#WIPeis,~FmT EoQm2RYkX@@v/w/RD!C):%+azL|)ei[tBqq)@jveCRkfb' );
define( 'NONCE_KEY',        '|g@AAB56V1(>rAgQyRw$cs*HEbt(=gUD-hx*B/=np/fisgs1U@$p3S$cj+:5u5qS' );
define( 'AUTH_SALT',        '|w]GTi0eHQNSI%*hA:xF0O~0ox;V98Zvir}/ :Kv,S6g[lgloQ.kuT)Yi{cu2vbC' );
define( 'SECURE_AUTH_SALT', 'PLb+~?un%`BU}olQqr_t+F(LUf.6-FLh4eUx:JSoRit.rX~*Ve[Vfr^Av =EWm#}' );
define( 'LOGGED_IN_SALT',   'x,mZFAd:^hbeT&TSd `+if2,Fb|?:2rO^JsjNi0JBrM~$%1n/;0M}BTNz(X|gmx]' );
define( 'NONCE_SALT',       'FQp~o5^Z_)k~gW|1_%}0b4P.I6YWV?t(H{XtRJ/$|y_^4:UAQ:XBXp9#;qG0VEJk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'travel_blog_wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ABConduite' );

/** Database username */
define( 'DB_USER', 'ABConduite' );

/** Database password */
define( 'DB_PASSWORD', 'ABConduite' );

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
define( 'AUTH_KEY',         'Y[72HN1M]TCWt<^IyF(/7I=^o}_p5cDEfFBgT)L(1m?Lb@;=Mna,i<qF]6N~Zd6Q' );
define( 'SECURE_AUTH_KEY',  'jdp8RQ5U#gQCo+8_iYlun<T}w$;,X}LvBoCkpJ9%WejN3fTB$fx1vFW;CvCn*<lC' );
define( 'LOGGED_IN_KEY',    'XSX,p dIhq}=651!5+gp4-Q6oZe.tvo*~HFoXUl%;[q%s4R)}]iu1QZm-8vX:(}I' );
define( 'NONCE_KEY',        ')Q[U(tRk;)f+:q[1FUk.*4&W+nZnW$i6GkeK;w$)F(hZN2yMYnX8|[|9|C9W/7Lt' );
define( 'AUTH_SALT',        'BS_{jYu^Kcid(5F_/`807lAmKIUj>FiJE{0We`DV6w,AUt5Sm0.Aa!@usJ-3J5uW' );
define( 'SECURE_AUTH_SALT', 'Qg8SS&d8/.UZckqD@g/~Hr;Vd+MpY1&7bQH9jp_VESVmid/=f-^skjP)P*(T7g$V' );
define( 'LOGGED_IN_SALT',   ')<N -/CC[VcEOnG5Dy}mgD$:0oC1F03pZ=Q(L2txtwvNki^M7.M4w+Dc^UWp^$|*' );
define( 'NONCE_SALT',       '!M|22OLL}AZ.G<w=x~>rTM(-5nLl]/IP9-Xh%JIyIM$1j.3h_H4uO0DYG96JUU].' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

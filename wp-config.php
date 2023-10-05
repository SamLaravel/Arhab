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
define( 'DB_NAME', 'hellodb' );

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
define( 'AUTH_KEY',         'AwRlC|c:#5UZ-ED;g.i +O`U5@]8tGOX+ +HPDJ8xRmz]-rKYCVR-x._}w&^wV.7' );
define( 'SECURE_AUTH_KEY',  'u&M,d`g/YzI?~?>8az61qxQ4.x?j`Z,6vE^wE/J:p=ySvV^=NXj}j!DH5)!PLL@4' );
define( 'LOGGED_IN_KEY',    'OICoklpFsR;UrZJ.3/^fS$U|si%qB`@D:{o6yUeQ{]3<wyK98Pe?jA <AQTd(d~(' );
define( 'NONCE_KEY',        'i79--F-*gf5yK|]r+(jY~Y0+EyTK;NO6>U$6r+;N+7VPuG?!,pcC[zQ?A/6&,T4~' );
define( 'AUTH_SALT',        '3+)WuZ+Oh5Nm~5K/-E~ZZgDm&X/nUmtJ<zcq#C;0C}ACD<^mH(;Mo3fc?(@?-AR|' );
define( 'SECURE_AUTH_SALT', 'QpI8,^PDP(=T&_^*:p#R)_8D&S^8WfJ=EZXN27?/]4Bq)+Bbh!r(<HP,wI04B`X-' );
define( 'LOGGED_IN_SALT',   '=JkdLwDp0K ?;#}kz*uiO:apTs@LJ+6DWpKh2R L7bJ0Xeq)P6HFzVFDgWYWLy*=' );
define( 'NONCE_SALT',       '@2pq$m.4/zY=PibO>{V+Yk]hj>.vU7NSU~~or>wS9tiToE-gRy}k/0cCcI.gO+w;' );

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

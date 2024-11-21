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
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fCerkk$qf;^HLk Q:>Vi7DyUc,.#;lON|0QuJ-^n_;kFOU]BE%@/;X;?TVs`^Cy,' );
define( 'SECURE_AUTH_KEY',  '`c:f_uqZ%w=nQ,(ukRBZ}O:@ S<@u7Yw?i;?4t2o><8AfP^_h^3/91IG([1.zH~T' );
define( 'LOGGED_IN_KEY',    'BG&:Zk3C1URVh-l[cZyqNZpZzFY1HG^|PC^M.X(HB.d)hRHzR?>fhwq8WE>S4cRX' );
define( 'NONCE_KEY',        '+[LO+Ge9t,=+y<~*oW66Np[wmivsmeY=QtE0VRI?Y;%[jaQWwPh<$@S3K~)<dKQ@' );
define( 'AUTH_SALT',        'KurN6*U- {kHHAyOR^@s$*iQBeHW?24:D9^4Ru2fk,ii2YigEc*&[0N+3Js6mq]>' );
define( 'SECURE_AUTH_SALT', '):4AdC0yuyT**!6zvXO%V@*n6c$o]caD>r{D4m<o#D!RctG3ooV+m-usVNZv]|O.' );
define( 'LOGGED_IN_SALT',   'I}e8kb5iO[Pm|D;j- (vkocSu2z]uA~I3^=:~23S&eCss%5I)_.sum4GO$hIPihj' );
define( 'NONCE_SALT',       'toPz?NIRLiPz;.[!)wsiR3TwCF pc5ZEz|y/)M{7]+]@RT,~;E|<2=/r=V. Wrw8' );

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

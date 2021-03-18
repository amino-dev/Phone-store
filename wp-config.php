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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Phone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J[/`OqUSx6U+rZ5}W^d^Sgr]= _$ 3:V3u`VF.2FSwO:Qw)KXiR`xAf2BsXdd MR' );
define( 'SECURE_AUTH_KEY',  'D#.u_RK8Z3oKZ!i`@}I>cNSrA,<LLirW>]=[3Q(OF.fzkY5Nl}UDD,GeG.P45PUZ' );
define( 'LOGGED_IN_KEY',    'u_OK_+q)By,1e SP*xX3EnHnhV:}cvM+W>|83rPb;SBBD#C&+pWqXSe`8B;RAD}f' );
define( 'NONCE_KEY',        '4fKHX<e=K%8*cidVtg^Am6zQv6D[|>iL.?tO X~DsTaeB:nzqe=[XMHP.0<wdcL?' );
define( 'AUTH_SALT',        ',@98^H?a?*D()x=FnqU_])<>U:dQbej2a:G0Jl#}kfo)b;e{rBa9B)KiS,D~a1Yg' );
define( 'SECURE_AUTH_SALT', 'vSty9!xq<j!Z(W7Z6pj<Db}wYh}[02?^4_`3Go5%#x*>tQ%e1>ocgb~q& R31$6*' );
define( 'LOGGED_IN_SALT',   '#DQoTO2 b{u3kn|dbl AQE!fo[rs/%0#>d}._V84FYI&hgz*[CfL2|j+#ydb?8AP' );
define( 'NONCE_SALT',       'd96SSs J>]RM*uO]<;4TPRz7{]b8LxNq%-up?TwbN8QZA}83v}zMyGA2<1([{2*M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );

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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'YX%r#|pr74dV=a]N=+kcGkdHD9B98T6V&bg%bQg2/U-,Ad1Ede?8;o96/VkxrTF-' );
define( 'SECURE_AUTH_KEY',  'h!} r]-s@</_f7J8(bVv5r3|%]X{u^}ujJ0qyZ)]F7#2Mx4S<:n.E<}?=MU3^L57' );
define( 'LOGGED_IN_KEY',    '4e#>oKT3FxgtFcS$rLYJn(.nyt84A#Ha=TRuC=R}`L$u{KW:?M2Jg/{+o~~@F:h^' );
define( 'NONCE_KEY',        't)A|_^RVmMGh^N{de2P:++4{}Y{|h}d}njAvR@B=+ 8As@,k6=In=3U%8RM:Jd!b' );
define( 'AUTH_SALT',        '^}6$@]bd+|S{v7+~t@#2eExKIBN46<72WhlIcW^u&WBtclRE!98g[Z8@=MW3pnaQ' );
define( 'SECURE_AUTH_SALT', 'EWDsCv3,+~HXsMyW!l^XL]y~U/^fh*8_>k$~o^6i 6(jRpcBC<c|Vy}%Yo^{yN`r' );
define( 'LOGGED_IN_SALT',   'P|t2i3{K5JYSo1 B;DT.(?5o>r4X;T>Bh%om:oQzIpR[HG1/`Y)@d;7ft;*dfoGl' );
define( 'NONCE_SALT',       '3^(n(>#pgJWH@XD*=93&kFqZMd-LemnrlIG=dgY6R5{5zAVQuB]nzBO8n(:HI_b0' );
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

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

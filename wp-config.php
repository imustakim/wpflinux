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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'itJJTbi.7 6ELC -_8rH1%YY9q2b-aomwp?8|Fdx<O.G7XkpCPrvw~vkEuUg0}L2' );
define( 'SECURE_AUTH_KEY',  '1TD/g ,1rHazO7DTj?dzyGvh7w04LnHr2A.,261=WUi=Ke;`H8#<30|<VDl8GLj(' );
define( 'LOGGED_IN_KEY',    'yJ)y|(Cq [7F$(cpW| *<6QF0|& h6ZF=]D;vcT;_jJ2& /|zz;ITVW})e[>tv)y' );
define( 'NONCE_KEY',        'd2w04]p]qV]lNf4b@AU$rEe>oVb5L&zd5;EP>tC6,[n>!=*+aYn-j& @j5qCb~-t' );
define( 'AUTH_SALT',        '6X$1:+:ed./& lDZ:#dhNy;OR3=pK-ZlQf:*!2I MHe^&Wq}uf%[iBz]{en=lmv/' );
define( 'SECURE_AUTH_SALT', '7Zau@:tUY/Z@a]4<M5,Maa4kY.*uWk@0IMafo9KR1l?<z/aAC}t2a?T0gdg[c+[k' );
define( 'LOGGED_IN_SALT',   'F_RPK281!$++mn~Tckv=@].;8x+u@XZ&{MfplHNarv7 mbxwIT>*qRPr~{}S2bbZ' );
define( 'NONCE_SALT',       'x{v5;zH;|(YI6u fVBKj]Cd0qqRw9Tq,,7C? |4NeV)JbSi(4j_+7oHK1E>+G<Vu' );

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

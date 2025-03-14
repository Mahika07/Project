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
define( 'DB_NAME', 'project' );

/** Database username */
define( 'DB_USER', 'mahika' );

/** Database password */
define( 'DB_PASSWORD', 'Mahik@07' );

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
define( 'AUTH_KEY',         'vE=QSQ7sl>y7.8;B/ksdD6y(:LqBpOJ,[U9`=/wvi!LX;l,]zzdW#m#^jKQz8`r%' );
define( 'SECURE_AUTH_KEY',  ' )S:z/Z[z?bT@_147Bo)*N`}1ep6, bHgbnV~l}=U9KJ@Mt`3ojqi;H%(T(t^2Gx' );
define( 'LOGGED_IN_KEY',    '1*6h.X-(L}`nwt*Vmk|p?b/QwvcD[6!aEmK%5jtKle/dEE-@PNj#{yxpJfQ`t`2r' );
define( 'NONCE_KEY',        '$j#t}nv$Em!dj_#tb6ny#`}St;j_}Cl%~U6X{vKcW,M:YI.Re61AF$w,<3MNF_3D' );
define( 'AUTH_SALT',        '^4~hNODpMJ%9hqR_sez<$SU@>Tqa9tYbs$rbu[qsp7P`@pUrJ?5T/B)Xw&j^/aS(' );
define( 'SECURE_AUTH_SALT', 'cB_;tVz5$xo/&#$>AQZF(m5fqh[w*C(IhNTbzdDsQb#[bm[c/=u*s?`fug$g~vmE' );
define( 'LOGGED_IN_SALT',   'd-V%AsmHXjNOHL0kd3+?Y#J)s{I0}V(]%jO^UciZ/*mKRq hlK}]R}dk??NXYo>^' );
define( 'NONCE_SALT',       '%^|Sm}#X%.&n8tP>YY=^vEW=6.V|31@ezKV7[@^E)8!~7)Nl{-=~FwY+VtsK9db{' );

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

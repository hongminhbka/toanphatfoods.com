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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tpf' );

/** Database username */
define( 'DB_USER', 'wp-user' );

/** Database password */
define( 'DB_PASSWORD', '5KsvPL6QI7iSLdG' );

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
define( 'AUTH_KEY',         '&V&Q0aKX!6#|Spb`qETE5$4C{J(| Efs Xf[3B9FXVAcmBkOuvyN>J|m/7=eEr]6' );
define( 'SECURE_AUTH_KEY',  'pgP-&?4q_k$zd|vId[,+hzez(&l3;c5pBB)r&?-//hzmwBM${ae$_zn9.|ZuOG&I' );
define( 'LOGGED_IN_KEY',    'j]IzR,T5;#3.4P;beBF@lp_=b<o`![ez?dKbe+&*/)CQ,b0Yl :oe7B5U1$Esi+%' );
define( 'NONCE_KEY',        '0_^9_d3Fu6Soxi:C|-/~DE_?sdgFNbG;qnTuC(-jCzNd4SlAxkkC=<s~VzV:bI^/' );
define( 'AUTH_SALT',        '>I,^q+<g-[K`wGyPD}}l{rB[L:%B.F<gFX-!&a-L2mQ@Y$Mxx7zuLKC[1l ZCYdD' );
define( 'SECURE_AUTH_SALT', '8q#fvfhaQ.z~@OWgMeV%=+.}/VwLnj;bB!pM^@v>Xp.+_j#@<*XCi736NsXUJ@{q' );
define( 'LOGGED_IN_SALT',   '^,Yajm^2^~%~YUTQEA2e;K)VA`)po%8@ArD?~Kr$;H@2d*@H4fIXt[GKpuU)|48U' );
define( 'NONCE_SALT',       '<0t#zNDxK}!}`f)Hrt/Vib~Bda8S{yZt{)I%cEsbIa0pkb07yV+7|TWh$ $<=4%v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tpf_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define( 'WP_HOME', 'https://toanphatfoods.com' );
define( 'WP_SITEURL', 'https://toanphatfoods.com' );

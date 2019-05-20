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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' ,Oh7$<UpJ*|L-vpwQafikl=^)OX^V$)bv;ca487A n0.BwgEKIc@.MkJoD2&>Jq' );
define( 'SECURE_AUTH_KEY',  'T&W8Ohl|7]{K&#/-4R.9Bc:tC%IRJMMo(m[b`%L[o/-aFu#ALC?xu#Jk;dyUvtYg' );
define( 'LOGGED_IN_KEY',    'hC*KCxP_aZ)<l$E%Xw54tnPoF#JXT{avSfSS;QoclV/9GtUXf[Q~v9KdgJ6[b**9' );
define( 'NONCE_KEY',        '6e+4-{T8E8q|f&]Y<9`Bb7`E:t92D67MhQI|X1d|)7ja1(/[l?l&5|bw#Wy$jt`>' );
define( 'AUTH_SALT',        'etxpP7SsjP=h6?yay/=0p$0_=;T[hR [n]cX]UZ6u[;}k#M6]^{Pvyl0bq<@SJGb' );
define( 'SECURE_AUTH_SALT', 'ui<PHemrJ]/EsbSZhpq)+JXl-w5Kjv&sM)H~Qe?ZD~})i;;L|]=|FgzY1r!~4]Dg' );
define( 'LOGGED_IN_SALT',   '5xnk&(x<-bgEFBP[#4}kYb^%psl;%-${59[9VM(q85CvB4T$MeAHp,-~}rp/VY`7' );
define( 'NONCE_SALT',       ')qAW0%EM.gCbPaix9/vdX/T_Fql1dty+{HhgTJ5{%`5$];a~^[9djE}Aoy!/g~Qd' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/** Skipp FTP login, access */
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

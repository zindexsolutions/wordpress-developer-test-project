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
define( 'DB_NAME', 'db_module' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eI?^ZnwVza.,e(rW7Jy<ZfW8S1-$i6/NoUHZKR}.BHm4?2-kTA[F|?)p@-!Rb:Lq' );
define( 'SECURE_AUTH_KEY',  'CCq*S9|4)h.125 +iZL<xs}oCwq]QGIS@v#bb7sipv`D/U{,cMQ=MJ-N_abTni?A' );
define( 'LOGGED_IN_KEY',    'Y6:bUNpX~wr!]5{afG@awu+xYBg2(2G=u3%]Esr7o5m`I9.N^^{Z)3r{e*P]:EUN' );
define( 'NONCE_KEY',        ':{Nb^6`4sybxNFym:5(Up9%>>h+Q}~ODX!$T7g)}z4R,qE-kYegyUY]b_kU&V|FV' );
define( 'AUTH_SALT',        'He*nD+EYJRS^YZ&Bcv3RGYO2bFP>)/fKaD_e@D>7o-lUZZ6exE4|mLGvKaBuk+z[' );
define( 'SECURE_AUTH_SALT', '46n#?U*^{hiBYVD)<^VR@<9n1%AGG1NP=+jJ&m<i::`3glIJa%IZ,-c>IG#Z)Q4;' );
define( 'LOGGED_IN_SALT',   'dh+=y~57x%K#5VMhJFJU$cPL^}BEmFIb`kI@JN<:A+A//s@z(t8hpG5e4YB/@R~I' );
define( 'NONCE_SALT',       'P=.71`S/a4a#4z0Yh*i+G4(4^;t[qYv{+BD5^x2R[2AES:(:qB~3i)x5(TZD5u`f' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

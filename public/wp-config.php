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
define( 'DB_NAME', 'db_alex' );

/** MySQL database username */
define( 'DB_USER', 'martin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'martin' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[/3L!|VQ4[4N7d9A6$^=1;:kd~Q3^&Tldc,u8@4E9MVN%m[hlmZT8Q~gl6=h(<~?' );
define( 'SECURE_AUTH_KEY',  'Ig{N+z^D1#j!#A4cML[}C_z-sp8Ii$TMRK@^}*k!;xY$!e}V(-pwjc8]<n6e*?{v' );
define( 'LOGGED_IN_KEY',    'EBt!E8a$4=9^gbW1_Az`Vm6x9}ugc8WD9`Jh 1$(&~EU5F{LYcRtcq$V[uN!NzkS' );
define( 'NONCE_KEY',        'j]=Kv3;AZrhJ(eW~-KU~hGsQ(KryZ{uiDqYoO|C;9=kJ6SgrZmXSR%pnieb!!R?0' );
define( 'AUTH_SALT',        'YkoBC6qe:/u6VV@/Hs`te~y8@@F%.J7[g)0]aN%R`TM,lZ7U^28]%@F53N#PUwRQ' );
define( 'SECURE_AUTH_SALT', '8#sI|)6q=`pFTC55HOqjsa+}OE0?kj}hJ#<HtnFe46N17n1rV2OmWP`5Fnci{_If' );
define( 'LOGGED_IN_SALT',   'JUVT+pZ ]ru,:V/Z(`(6c+)BP!eU&Mz[y`y|oLs<ZI<Knj<Q~op4[Ngb*k:3q1[$' );
define( 'NONCE_SALT',       'DDj>)a5Q`:Kn-tXd9V Ew~L}v=:3%@f}Dl3Ok3P[S<&RS$MR38Go}cH^;UjNjdmQ' );

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

//define( 'WP_MEMORY_LIMIT', '256M' );

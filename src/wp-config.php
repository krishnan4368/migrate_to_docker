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
define( 'DB_NAME', 'my_db' );

/** MySQL database username */
define( 'DB_USER', 'my_db_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', '6454Flock@' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'xdAn tn%gIDzb.~A]D[>2ewH>bM]<,iCrYf+43bhiZT4NR;WzN3%(zSd]m[(+H!h' );
define( 'SECURE_AUTH_KEY',   '.sod_9uW>%d|rcl{C6+SoDxn %Vdn*H</iq+zQn~i$]@v./f7uCv~NBW/#)68}$(' );
define( 'LOGGED_IN_KEY',     'SO9UC+|3XE#2<1s*b_/)vL@l@~Wgj=onT;R]j&ZR/)P5hVx1|K~]~51Y3Vu5gHrD' );
define( 'NONCE_KEY',         'fGY%kXYF<Og==#oWD+Lk0$K*l4rpjepN-1~r?a]wbfA#A6uf|Za![T,a2ev$ (k0' );
define( 'AUTH_SALT',         'dZfgb5WZO0evW]3k@fFD;l>ohZ|zZ?jEDaI[<x>bi$<i#D<3<HfGlosZ-;QLta3X' );
define( 'SECURE_AUTH_SALT',  '[FUi)CDHF`VX$d%llq!MnXo9ml$ mQ<ga3Rlu;MA2my9.Q}_a1f^C5]7cr8$<krm' );
define( 'LOGGED_IN_SALT',    '[2*`ijh(Z,!c60nUf;D;r(#$YGz;mZQynNJG~@],&|EhbJ?EfE~K0,McRubbORiq' );
define( 'NONCE_SALT',        ')CYORAqUD%>>It6UBTQ&rY>)p0J8I~$0(T`sE4.^1l~^4Bd/dbpTEjjcb} {@(nb' );
define( 'WP_CACHE_KEY_SALT', 'q%JW-5c;?/R7i1.g2W^HDA6C+Q.ofz_,U=].rMdBEcrSpG*ibNgIg2D/$0gOcNJO' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

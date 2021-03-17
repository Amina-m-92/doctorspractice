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
define( 'DB_NAME', 'doctorspractice_db' );

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
define( 'AUTH_KEY',         'buw!Vsja9S!fkn,R<Yu^XyZ /r}(z3@N&$4PUiob~XkszeML.a9=_NY;{;RV{9%N' );
define( 'SECURE_AUTH_KEY',  'S+Q$Dqbf#}F*k_Shs?0P=Ibx#/<=FNmrz2}!/+b g.)rx0unVb4?@b^nj;)OUqF?' );
define( 'LOGGED_IN_KEY',    '$L8,>xsA`K-aG2Kvm3Qi4sCmab&1o+[]23;8`/j9J6-/JYI6bd9`M),uymN^AGBk' );
define( 'NONCE_KEY',        'D5Qnkg?5 uQ!t/W=O_(.D?vmUJ)h2J%a?vB}]b~1.:7=ebjql%k*B,fS iP`Ksw*' );
define( 'AUTH_SALT',        'T5-8zCHTzW=oKFQxoXD5e7BVuA=i`Sq)O~7JvLCZ^.:AmS%FVr7#b rr,@|GI+3f' );
define( 'SECURE_AUTH_SALT', 'Rs)T|]WY[J]xkK.F{c1Qg7z_HN|my :pWYvDI#ZZ-&Zz&rEK7h$~EAOT2_:_tO^9' );
define( 'LOGGED_IN_SALT',   '=PIW%?Gz9^k/$1OHft4#7ZOP=Y|Y|VL<VbpdvZsxdt_qQ+ mIn7m~M&990AA_wxF' );
define( 'NONCE_SALT',       'lbV;Xd]`oT>Yx:-zy=h Cst#Xgoya+uJbIdyWNh*J7}L]lX[+YWCNz37rc[.][XU' );

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

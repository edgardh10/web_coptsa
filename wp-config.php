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
define( 'DB_NAME', 'coptsa' );

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
define( 'AUTH_KEY',         'U-mGGy-:Of`-. 3FyzD&CsK3?s;G=gO0>JqbX312x?(oP7bY9|e2Xjw%uq&7tn02' );
define( 'SECURE_AUTH_KEY',  'M!^,>>WTg}~f{jLqe0,Zo7>a)@An]1.3L4u^I#pab32N.:?M;4j!?oJWq.C-&S!n' );
define( 'LOGGED_IN_KEY',    'Q*Q[#*Qk)eA-1#ZGXYqz@MRZt6*TAT;6RCyc)$LMT265pDYn(j;SoX&;>~wuGIbq' );
define( 'NONCE_KEY',        '=%xMkWb?5Ki}zm&w}4:9_Lxu!FhiNf~5@pHrnf9&L<L)uh27<_gs6BGY}c})AfeS' );
define( 'AUTH_SALT',        'zUfCKl;4G4bk+P~Ueo`QfYr5 LsH0y8qZ|q<,&o/?EXvI 9{8t&DI*[;?GU[}]xg' );
define( 'SECURE_AUTH_SALT', '1K.h4bj@;sdP%9/.v@;]AsezwuTwWD;l9{n3;oLz2BqF,]CTuSxBGJ9B4K6l@Zc]' );
define( 'LOGGED_IN_SALT',   '^C0Ff]2,6# ,JrfzRdhC{aVsuk4q]cv-d[+:&f;LcLPNbetZ[+39Ik:Q9eTNCOBY' );
define( 'NONCE_SALT',       'vt96ahBT*k,(;Z1Q]tt~Kt*UC{<lA0coDhwL+e>-f}JydUqn^h|^7PY$TJO+#:](' );

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

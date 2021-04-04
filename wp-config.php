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
define( 'DB_NAME', 'kingcomposerthemedevelopment' );

/** MySQL database username */
define( 'DB_USER', 'kingcomposerthemedevelopment' );

/** MySQL database password */
define( 'DB_PASSWORD', '344qaz741F' );

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
define( 'AUTH_KEY',         '*zE~0H/0e.Xe(C@njl:Q3m2AW9>Q7anbNAs!:Pu,4QT?4G0XniUg{;+_GGtYO^W?' );
define( 'SECURE_AUTH_KEY',  '2RpJ7!X(up-GzMSjN`v%0,i(1.,m=2aF{*M}3l]5Ri>}/uxkSV0Dn<2q4r{Srd C' );
define( 'LOGGED_IN_KEY',    'g;vx;}wb[/H(`tE3l-v_bk:$(2N0MQIF`x`1Ae2x>D14ztLQ/pa-o=y}dC#MwBk5' );
define( 'NONCE_KEY',        'p}Z$W{F7S63{2nZfqp]!3%=bBvIQ)ZJf-JrO.JDGgOF`NRk0VrIH s?,Fh=1se<o' );
define( 'AUTH_SALT',        '+y|&.}-{[&FYY:^.b/68Rs_wnVfx|=P#_MbT5pjcNj&0WMz)mS*ITS,+YQ9(VH]L' );
define( 'SECURE_AUTH_SALT', 'CI{nBFms5>:g<r*|s4U?BZiM)fr|eK&geIih4]Q5(ntlE|Xvs8d9uILF,9 #7lhL' );
define( 'LOGGED_IN_SALT',   'ckBjo#>2;Xt8/sCZ%YoRRf$3K>6J 7bZJ:@/u_:u/ &>f&]cu[z-@Rn2G(xQr~2Z' );
define( 'NONCE_SALT',       'akfdqHjS|*EeC2z/i([-rg?E@l1e!jdW~eZ7gZ82$)1mD>:Hy0*iZ%95]gcNP!Q,' );

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
@ini_set( 'max_input_vars' , 4000 );
define('WP_MEMORY_LIMIT', '768M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('DISALLOW_FILE_EDIT', true);
define( 'CONCATENATE_SCRIPTS', false );
//define('FORCE_SSL', true);
//define('FORCE_SSL_ADMIN', true);
//define('FORCE_SSL_LOGIN', true);
define( 'EMPTY_TRASH_DAYS',false);
define('WP_POST_REVISIONS', false);
define('FS_CHMOD_FILE', 0644);
define('FS_CHMOD_DIR', 0755);
define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'ENFORCE_GZIP', true );
define( 'MEDIA_TRASH', true );
define( 'WP_ALLOW_REPAIR', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

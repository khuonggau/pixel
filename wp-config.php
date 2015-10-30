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
define( 'DB_NAME', 'pxwebsource' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1.4Nb{q~[|rOIAe_o;AwFM+|7[A2zw bU/F9]2,E<va9bwK6Zh@|Q*j;TNoIr:dg');
define('SECURE_AUTH_KEY',  '-|K&=9UTG+n]oeX3Uu3g|*L$0K,]CR9Pv]pIl|aws^re2A+Mw8mp%P|Ql@WBVE],');
define('LOGGED_IN_KEY',    'egPd]sZFUkF+VcZv-P/;:0CCtm vrQSV~a!RSCkm_dS[d]sF&GMoR:;3&,ZLpgYs');
define('NONCE_KEY',        'VI%|+X`.yTUXO>js$nWm-iDCv#.g`=IajdF(ha.Oag;Se-%n!S}%+xQ( ?|_1t{4');
define('AUTH_SALT',        'eD$T|zB(+4={[#ltnpM9)w_e0+&A|gD<0iP|sO+.S7sDT+gAdQ&B[=m[62q5m[W-');
define('SECURE_AUTH_SALT', '^.WX-Z</+jCaybAw|#{ 0Dn@~=XjemCKm<s|Y!B|uDayn@r.-p7%Eln+[ Pe0hE3');
define('LOGGED_IN_SALT',   '6tEv_Ortg$8RTGmZ,9:oW/lp;ELK#*+<-}-RRhO<z,zKKW:-8-WP$%W?80O6x-yz');
define('NONCE_SALT',       'B3[6A#yK(ChAUMf1;@$]%L1XA, P8r!6Q4b|<Njnt2xG+4fwi^XqB1*2.ecdk>%8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbpx_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

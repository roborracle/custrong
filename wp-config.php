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
define('DB_NAME', 'f5_lcsu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'v4r4dSVaaw8IbXBx:r=Z?[U85,Op{erykx,1ZH|HOK:zOtZ..r*Za,-caa[47p@%');
define('SECURE_AUTH_KEY',  'jr8Pp(Lwj/Kf5p=q(*&OEN_g/I]cJR^5*:r$8`9kT]f^~{d~f/J@2nJHf>k6#q4:');
define('LOGGED_IN_KEY',    '{OYN1M`w:u{V=ISYY1-+YJ~&FUzdsbadzgnwVm`3E280+q8]1A:jp9x.ogx)//NV');
define('NONCE_KEY',        ' o63BYOWA3*fvf7orSv6Ojwc5Z%V0KBitKfX7M1f?k%GCnkPNZcyY,QOjWPhn}x/');
define('AUTH_SALT',        'P|FS_4{KmoDY.|tT*]5,TA_eMx4[TMp&uwZ;@^Ev5c1y85.~b<g<Qv`4BF#9 6v}');
define('SECURE_AUTH_SALT', 'ewWUH]d9?>}&:c8q}~jNoywOpY92*#~cYnxSlbaYDo.V-~$2`-4:c*`h6VpdE8R{');
define('LOGGED_IN_SALT',   'm5C~g&Nm)(Abmr)y,0}FrV+9@k*7!*v92z~:@<b_OSxl@yHG^hh;P?L{G0D+3Y4h');
define('NONCE_SALT',       'x}>AW;Cet!(f9<=:XBlx8y2bg;.rSQK]%pZIReo:A=_v*;U/c1EU-7I#<08J;*6#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'f5_lcsu_wp_';

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

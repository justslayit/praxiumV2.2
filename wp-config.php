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
define('DB_NAME', 'praxium');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '^[covD:WAAe4o[GGtFch$]aqZ2%/PruGv[wPX`%8Sgx.}:^Tn)Y{!Uhl8Pa8j5h>');
define('SECURE_AUTH_KEY',  'TI`5GJz,3n9ARXgt_nz,3pY5|f; +k]E/>WV*=@U$V#Gs?obiY;sQBe@)0pql:,6');
define('LOGGED_IN_KEY',    '5`[fK92cJ-(v5=LgeS&YD~$5&nxu~{;g@2PHOo7dI%isc_73&iHy&]5>2FTsI*@G');
define('NONCE_KEY',        '%u_ycCSvUVgB?d]Va8gS$PsdvNa=CW<PY-sC=]zg=xJ,b[0F`Pjs9&vp@s5>.q/5');
define('AUTH_SALT',        'lEVBr2t./~290uf7_mC-9Z7hUL{gV+Ixwb^=klpvn!,>Sl]]BG2az[_iH<|=mbVm');
define('SECURE_AUTH_SALT', 'n2Pd1?)GjlYk4]ngo~i O}byr`F+i{/JV{!<~1:O.#`4H^X/&5}r=`@<9>/D782s');
define('LOGGED_IN_SALT',   '6[TbBN=2~FJavIC$v8Q=?@_?vN53u5LB.6fZ1haY>o!yE0@[^K;z|h-;dNjp]!-%');
define('NONCE_SALT',       '$iIr<`XfT6]^7jQHD0du2?C:#V[LW_n~~dF2ooIu4+@WD9R[ewa#%Cp-6=h[&{._');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

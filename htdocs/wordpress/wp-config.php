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
define('DB_NAME', 'CT');

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
define('AUTH_KEY',         'g^d[i,RnRZ1cx+Em;YiMP*Gd[vTY2mZ@]&6(-sFQI]5:n!=nH0seqSLd+o-B=Ql1');
define('SECURE_AUTH_KEY',  '9-bc~TxEn^]}3eS%QLNY{vjN;F_B,9X/b;}`0Bk1~iEFF+7P]rA#dNpYTD*TvdHk');
define('LOGGED_IN_KEY',    'o lOR{K5!3<Y,TM1%a .(g|M~_Jb)a}YqABtoL uv->W<K-WKs+=q<1rC;HIQR,_');
define('NONCE_KEY',        'izS0-RLK!2Sx?W_;GtL_k?mlZUI }:-p$6.]jw+&|Rt56JKV|se9+Gu8gQ4[8)Qp');
define('AUTH_SALT',        '7@LeoSBwRC.B{IiOR&-Fr[0DO(c#hBy^Bz:2kJs4w]j5myLBc3%=!z/eRN?>e@cM');
define('SECURE_AUTH_SALT', 'M~9(.adN`h]mk6W*,%iq<!al?UL%-F!INhqVm+qR$zEY4y/V;Zg349X(7?Ap#8+E');
define('LOGGED_IN_SALT',   '~36.5m5/d5MZwrg;gd+|{|>Rr?;~NH1;ht:2E$l +Rs0E0SI[mk?=j>Z#|rx.l!`');
define('NONCE_SALT',       'c?}Plj<7z>8+8HH-GK54)#ePXwI)RpS2{tmARp=;nJe)CH ,(:2+}ul:+.:1pZ1h');

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

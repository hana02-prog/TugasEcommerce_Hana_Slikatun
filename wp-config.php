<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tokobiru');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'c$@u9eO3rd7:|}M5U66JUYeJn8VW%r?F7hhGph)WIOkxFo7@3Zf!x]0AJR!?:dhl');
define('SECURE_AUTH_KEY',  '7rB<U,3(M?30EC<U!RGB>MPEOJc;xWN(SxnmAp[ MGGAwGZkH20{r`_Iz#mFGi8g');
define('LOGGED_IN_KEY',    'A`x$U`V:_hx7#:+<o]$Id<p+V6YSwgPrgG&g>;$Eh4O; B:i#_u]Os9X?DD(;K5[');
define('NONCE_KEY',        'u`SG($QQmAf!6Y])+@,A/1r`= AvOp^>tChH-!kpB8eee=pf8sjpNw.HI_P.o-hM');
define('AUTH_SALT',        'V/v.W?*1So(eb/r!LP=;i_J_f<EYS}QT,M?I0#J{@r)RT,VbISt#IlU%sbT6u/%d');
define('SECURE_AUTH_SALT', ')k_F(;n4UYWHTN(HQ%x*MCm4SJWBAST&+6vZ=FeMj<em.t(kM]TDq7mvDtz)j8qK');
define('LOGGED_IN_SALT',   '(GeR3:o@ThWl6^[_Dz7~#M`HF*-1<]jQ SVBR=c7lMxqqG>kaFTr$FJjH@=B-rvF');
define('NONCE_SALT',       'wqij(_?}`[c89/z%$^#f*BJ#qrl9y2d8WlLrgVk,9^6yg2yU3yw3k_lJh),SdwmO');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

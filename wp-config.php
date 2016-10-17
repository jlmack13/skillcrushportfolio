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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '8C:fRqfw-Y80$3/RG2W)[Wv[=1<T4RZLR!_,hWZ^w8iTl)+[tmOH7i]Y@@%J hcE');
define('SECURE_AUTH_KEY',  'd{&5cuv0r)zdX`#:tg!F}l4m5eL7K/EQ?cDhd,V?xK( fuwLKStFMz%sBAX#~.1J');
define('LOGGED_IN_KEY',    '?`u/bq<p<r}G@,Z!GirX{im^8.~u<2O&PMQ]NOBS^*469Q/7ma]2 aDhH*]P@Gpr');
define('NONCE_KEY',        'rD^iJ?YLO/fdwGmVsA0}}_6W&49CBP)%UZ|u]8M(_z1mN9r4R/n;`vez@)c`qus^');
define('AUTH_SALT',        '@p?M/?vdb80%@wY)RPM.]O(u$?_4wU801m<:{DpALbZUlL~,}!+G`A6Bh=+o{On2');
define('SECURE_AUTH_SALT', '21<%;>JIug:19z))v`ECoG>fAXgE[{c34ROc$J{|F(_>EW?8ZCSI]T?XRna?[a~t');
define('LOGGED_IN_SALT',   '%W3rqZ7Uo{HRj:3>%=^ZP7.TF/}ATN}}@rAZubt^XX C9-2l,<eHA@Y@  dP>G[e');
define('NONCE_SALT',       '6ad$y=sMO6b-!Bv?>*S0TrKVE>==Oui9bn1{t(Mea]4V@#E2RudNZRX%@;7{*zL{');

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

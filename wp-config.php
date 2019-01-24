<?php
define('WP_AUTO_UPDATE_CORE', false);// Este parámetro fue definido por el paquete de herramientas de WordPress para impedir la actualización automática de WordPress. No lo modifique para así evitar conflictos con la prestación de actualización automática del paquete de herramientas de WordPress.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_newcar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define('DB_PASSWORD', 'rafa2112');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY', 'i!(6_/YY(D*BFCl3:9f9Jb2:sL57T6B5v8-PP[U@l~+5an~gm52d2253;K*0OkwO');
define('SECURE_AUTH_KEY', '1N888i@di|]E#n3~*rB1:2Su+V1B@&ne/w)oN@3SzAY*U8Ew8s81w(237Y2~5aGm');
define('LOGGED_IN_KEY', 'lX)6+VnJ*g%S+RN44)4l4IGr&6oZIH#*8GTw424M;u6lS8]2+e32a%33jAp-t:dn');
define('NONCE_KEY', '!J:O1E6)4+8V1TXwq_9)*21tU29Ks~7k225c3G#)RE2N[!R%~e:qBbl3N59;bGh(');
define('AUTH_SALT', 'D;d6&Cb:N6DsV;AY40GezF7T+Z%Y36&/[WGBRr8%9k_8-g8h;*3T@2nA5%3:~NCn');
define('SECURE_AUTH_SALT', 'Ts2vqrwVW8gt[0S6xZWOE0&;c748D*605Q-+7U52|;67JX-5SEv(0od+av[zOZ36');
define('LOGGED_IN_SALT', '0Mz6@oY8]&~92*gZ+W1C4[0E&;f7KX%r3B!ZJG2hgR4/4#od*n90pmD-0wGlVr%3');
define('NONCE_SALT', 'cV4X][14FDA03~g+v1J+K6f&ZDEA4&:1-Q9I8Xw&5A@/:k_ef5n435Vv7(~8OG1S');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Dh9e3vhV_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

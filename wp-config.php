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
define( 'DB_NAME', 'pluxi_pluxi' );
/** MySQL database username */
define( 'DB_USER', 'pluxi_pluxi' );
/** MySQL database password */
define( 'DB_PASSWORD', 'pluxi' );

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
define( 'AUTH_KEY',         '>Sf6 @|l6zQX6bHh/5^c/*yWG%G$q#K` v+N*231Ht(4YMa.k/4.pgsqEKilI/3y' );
define( 'SECURE_AUTH_KEY',  '#Z<q[U7Hqoe~[LV}80.1ABr5L]5fW:-R71S[O(m;z{l-6`1UXIl5fK*8I.lL*?Or' );
define( 'LOGGED_IN_KEY',    '_}~`7%WSeIr@p{>9Jgdo>NRt$jW&^~A_]-#l{|(Jr&.R1m8^ <[(D*eL$7F;sEQv' );
define( 'NONCE_KEY',        ')do`3ACNWGl`>/ycw`&!>I0Ly~wN-c{D9a{X;#ezkOz:Wx`xK#29w`d2^42O_|;`' );
define( 'AUTH_SALT',        'MqW{jZLc)yV}%Ejt%Y%.JaM44|G.i{s1,p}wvNRX0O$Hj+X>n<K)+d?!+dy,5,M}' );
define( 'SECURE_AUTH_SALT', '- >/MI:A:F(s(T>xuC$7#iO.mKh=hV:KhN1+/0:Bl(P*qLXp}zt/cs:U|,Hpu]o|' );
define( 'LOGGED_IN_SALT',   '<V4^2B>%P6k1#w^FrPRI F6&tkFQ6*%%D<GJu^*.9z`<d<Y(zSFjX8f&<T(5[;b+' );
define( 'NONCE_SALT',       '_>v*zpFv5eAd(Lm^FQ]e6Y XD;3;nF+y:>gdgpr1-UuX@HhxxAF3P+eo:$`vFdIV' );

/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ds_';
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
/** 
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', false);*/
define('WP_HOME','https://pluxi.art');
define('WP_SITEURL','https://pluxi.art'); 
?>
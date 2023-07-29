<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u400247195_4fIea' );

/** MySQL database username */
define( 'DB_USER', 'u400247195_rPc4B' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eH7es8XlBO' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          't=D}s& <OFaUDAeWw$`i*bGd4>uL}G:Z@:_hE5;/) !t!{E+p^+F,8=Ez7&AP,u6' );
define( 'SECURE_AUTH_KEY',   'z.S{^.TMjwOV>O(#zV$?H}KR)h*){VQIVJ> G)UU_[Dpw,} KLR@/GPL6PGK[t9r' );
define( 'LOGGED_IN_KEY',     'fWXt%Hs(3-Sv]w6%1?<SGN#yBBe(,4Cvgs-8RU6pM,-S$lPnQ,jZlevIQ;3x?qLV' );
define( 'NONCE_KEY',         '#z&0wNN$zlZZxG/,:9)popG4xfF6tI#yIZPrZ%RK:JB}NSdYkrh8mH+c?@i)6x3l' );
define( 'AUTH_SALT',         '+m}10(7|y]}-|OyxK/L-y2vy#DSJ|mPb^fRSM$/?zk$6b7V/Mg<&f?1Jng,<P@-2' );
define( 'SECURE_AUTH_SALT',  '}`GyWRjjNkG-%-kvi]#NPQ-`>F4YOQncqn,fVO[QTefmzr{3zvM3zdy!F;QLRW=t' );
define( 'LOGGED_IN_SALT',    ':)W:/lM)72`n[YT.?T6H-nu*w`Q?syy@nLv@l{jzkTo_@SP)}q$h#4J;glm^0h(s' );
define( 'NONCE_SALT',        'eiAGe@.}H`JkqP;09#7Qb*j+94L$rm^AdFN$q(MJI_]OvOwCI!yZ9IRzjt:1*+y~' );
define( 'WP_CACHE_KEY_SALT', 'n;qw#7IZb 7qe?;B^?UI`XlTaO9ql~)=aIZWPQ_wC;pI|`j2KhE1C`vl4-KsHekH' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', true );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

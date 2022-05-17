<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eronumajiyebo' );

/** Database username */
define( 'DB_USER', 'eronumaj_majiero' );

/** Database password */
define( 'DB_PASSWORD', 'Majiyebo73@' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ',6=H(:,3{ohFq{-m7.HBX4 I-1mP)Xm+{,B~J,d%GNRy&>7e:06JsI}l2[V~RkGS' );
define( 'SECURE_AUTH_KEY',  'y D!y7*[m&tVsrCN~XFCq%&KD?a*i:yQ>N35MI$((Ms=7Er}).&3!n,N1m:.E?6%' );
define( 'LOGGED_IN_KEY',    'NTF2{@67+^.?H= F@;#PCN1.+8H=L7E0+4,bP%0vQzl)uSh1:!-:y,Ktk0#g3]9T' );
define( 'NONCE_KEY',        'QVWh%He)Pw-|QI+V9i< I1+Uc:pqpcQNW7X:j1x/7(.4}$0A$|vcK=aN`Y#r-ZmW' );
define( 'AUTH_SALT',        'z;+TCD8t:@?0q^EvkazUny2L?5$t`1f=~VwQ246-a%|w]n]Q5$X![>Id`c`l*^Yz' );
define( 'SECURE_AUTH_SALT', 'Fhds +y>kBlHTbC6t]WtL)<!-%~`}wMX:gM@xdFs-ZZSD9axGg6tf6r.oj@Gw4yu' );
define( 'LOGGED_IN_SALT',   'YOPLH]fT`HHv]p;x@xl7oSOv3A#6VG6M1m+TX2pw{d7GIE/RVUuy,<t/#sRz?9UF' );
define( 'NONCE_SALT',       'vIhE@R?cVA}lC/gS8o3P.8/>3_@n=~.S/z3i^Y*3L.ql?3$7+>X;_Mc@)cVT@*D_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eronu_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

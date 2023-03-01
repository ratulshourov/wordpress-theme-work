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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'K*2@oRzGFsXx75u}t#^~~3fI1$QCGGAKeWPi}_<WxF^a8szm;1lsj$Dn01P*9L 9' );
define( 'SECURE_AUTH_KEY',  'b!G5F1-Tg0(6Y6j`fPkdGzu_[1>W13T-7)m-M./FcOI%6@~hf* bYS*u@.8rv_@!' );
define( 'LOGGED_IN_KEY',    '0bqqxsp^Jx)9stZsU^!U*z _I}FVXNUOJl@g^v(Mz#;L@t8_e|knW`A}SA28!;2&' );
define( 'NONCE_KEY',        '4:5vL:$rF`#Mv^(EN=BRAdhbV;I<aOt8U/Kz*p/?m5y[>zt|ZjC;9phD4b]J#MdA' );
define( 'AUTH_SALT',        'j*M>*|1VhO`:7q<;az#Bob*D@:IS!2SOLab}H1:Hx@NIifx*#plFaYgIe$hW9=qu' );
define( 'SECURE_AUTH_SALT', 'A%_|}Unc%`;[sO/Hth8/+0_OG.]vhO ?n,-ma4@Y|w` V1kx)Brpe9>x_mRwZuft' );
define( 'LOGGED_IN_SALT',   'Ia| $,)ON6s2E,ixcdF/,-S]sBJMOiV&OH>Fl*|^Bs$nd_|vR;-Dm`E0Li*>t/%,' );
define( 'NONCE_SALT',       'c@LGD+xeG*cf&Ta$KCBX8>+a?IvN(ke2DCDIOB48Mf3/+ozBHVkq&R|L=8dGW JI' );

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

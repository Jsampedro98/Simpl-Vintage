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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '&$ 0EL&O-AGcgmN8W<zCJ5Oc+90oc?<2kaP=n,Rmrcu7?H#>F:v`wO<T)S9B0=8Z' );
define( 'SECURE_AUTH_KEY',   'nrFmM2Z^1T<?Q:Gn<TQci Bu79dV[S7ReD0bulGZhf,oDgbDFwdz6nyhv1}24xny' );
define( 'LOGGED_IN_KEY',     'fzw<yN=:lBpx&Spu3X3Rv:L%#=OUTZKJei](%VQ:(Uv]PD0R.FrY$9N*MDD7P fX' );
define( 'NONCE_KEY',         'cJ8K>Y;+kM7K;ekH*y:v` N,y%#i?X/XHYDr=>^MdIil3,IHf&y.2b}{{nw])4m9' );
define( 'AUTH_SALT',         'i7. E/I682c^Q&T=L7 ~D8|Ov_]m{o&6Y 9R$9k[].,VcQpB?.3}=,F.[lj81Y}z' );
define( 'SECURE_AUTH_SALT',  ':qrhQ*Fp#j}Rdu>Yhk,%]4l Xc_~VB~(J(=#|yOo:m9A:}_XJZ@Tu=Qm@=6e Myj' );
define( 'LOGGED_IN_SALT',    'D:4*nkV;t6gTmJ1(<kV1/ZSO]9LKq~N@+J6^BBg)70Lzr}|u>C%ri,2;G[:hBl1c' );
define( 'NONCE_SALT',        'VD_ToHfp~-L6GCo0PBA5m73Y5&A^07e{xzu6N(,+.q7i28eR:vUWLzV Hm*`||qn' );
define( 'WP_CACHE_KEY_SALT', '`<w~HnLnBSO#&P5.>5z&^)fdlv$c,+ _D6IB vZgHhO __F5QG#4HIzR=vOrTIZW' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

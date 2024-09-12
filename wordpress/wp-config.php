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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devops' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'new' );

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
define( 'AUTH_KEY',         '4Fg5D%mb?@j/[ ASmzm0K;:(:erxKOCi6~_NftXI][S@78X^-n#tt(}wseYOrR7c' );
define( 'SECURE_AUTH_KEY',  'p/ec.vE?e9UBv<=jih|Z58f1#-]81KP6_3WQ>()|t6h%j^dB0~9cLOToMi)@1=K;' );
define( 'LOGGED_IN_KEY',    'C7P2~KNZ.YG4Ez7Z~HuO!:RN700Ll`I*e4vnuzvHE)|jDRMc_*tI[DjR)7GZ?XzA' );
define( 'NONCE_KEY',        'Wv-GK{B2H:MzbWB=Dp].o5V]AE[./6unDE2Ex;4xuoghfg B:fn`? VdPi:5:oE}' );
define( 'AUTH_SALT',        '!IvS),L)~LE9o+4gbc|Vc/2SBN</dOd?Nf0sD$+`gtl{=f!$pQ/8z+@ mPKj~?9C' );
define( 'SECURE_AUTH_SALT', '@[k9SgNTBD>6W8{S9B%`M?f>GI}Q,1w6j;1P$~4e406;lI_P/fCgv4G;p9&{=[BH' );
define( 'LOGGED_IN_SALT',   '#cassR>Rg4Xj!zJ8_|^1)FhRSP/`>28 `CrC/1{Sr2-Cah7RR 0NaYx-2/{it/+B' );
define( 'NONCE_SALT',       '@BENv&rqMe~5RL$ed:,$D;IGe3^[GLC!,V{<:AI1KD>JM9n9R#?Wzl#Pz8!0k~X.' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

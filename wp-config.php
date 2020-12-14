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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define( 'WP_SITEURL', 'https://localhost/wordpress/' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('REVISR_WORK_TREE', 'C:\xampp\htdocs\wordpress/'); // Added by Revisr
define('REVISR_GIT_PATH', 'https://github.com/conmarred/PGPI-10'); // Added by Revisr
define( 'DB_NAME', 'shoetsii' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' h(q7I{ZyrtN@^g:Kq_ J>Es-#R:5fJG[bS2v)n|]^&Sl2/48b=ngr}l%-Qx*3CC' );
define( 'SECURE_AUTH_KEY',  'fkoY;Nu/fXGn2mu?z.NCml%iDoaBnu$V32>k7D1TPL{aZB`0{Z0)^1@YDI]FbF5~' );
define( 'LOGGED_IN_KEY',    '>()]Qc>]gY_IglEa:?[!6RL !kRIcr-+8k=Aj<oEYo?l~&(/Bu3-13-f8o9}y+/5' );
define( 'NONCE_KEY',        'V^Qt;n]>J!n,x]ZECwu6K~&,&@gCK)e[~1+yAO.>0tX8$9)u4/Ct$ffFzJ+<xR@u' );
define( 'AUTH_SALT',        '>b+Lr&dGI!.a72(%:K/n-m49PRAKk3L1Kz$?s2{UYUC%9D??$$K{H+%YE<O#<&)X' );
define( 'SECURE_AUTH_SALT', 'XF2qQK&]::o^r},@)^,/[i4tAsG3~it@k7T~Gox51l]C+Q*Hb/PF5)B^lQ28;=[Q' );
define( 'LOGGED_IN_SALT',   'AzgG`pR?U)-m(j4D(@-ac5R=<l~|[Ds$6Wee}YtaYEQOy`VxZq|lm^BVUm>GD}=G' );
define( 'NONCE_SALT',       ',qgKL9C]NR{h~)NxB6(vR {#9iS@?y8*S>n&Lo(*`QT*v67Y7&/MNxQ$,Mrg~KoW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

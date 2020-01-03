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
define( 'DB_NAME', 'hexablog_db' );

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
define( 'AUTH_KEY',         'PO|dr4A^t/H3M~<]~]/-f }S?5+%vRE5hWhru; PRsMx7%#9elzkBZPSk?%P&D}o' );
define( 'SECURE_AUTH_KEY',  'r;Rz)^vVp_74Ng55baTN Y,!LJ9ZN}gj>g_]uoF*zzt0#~=IqQt X(%G7,5K`_~/' );
define( 'LOGGED_IN_KEY',    '^!EtK-0,(pMbKzMq:Mh6kXO{h?eM0GL0z:/%Xbw)(Wa,i:kRnmw0Qc_+c:p-*@zC' );
define( 'NONCE_KEY',        'M,1:5z}{Sv|P.0DBg 41E1I{byrY~4_%Vq$5KCLE{z3rhG7*!la?+nm[i=ag]BME' );
define( 'AUTH_SALT',        '9lL9nR5)x~Vnm|BIMob(m)]|?GynLJvnJ!:-k<W|e-~<P,zM!~Dm)74|o{u0[ZF(' );
define( 'SECURE_AUTH_SALT', 't9J7`Fs32|s.Y(swQ-Ny~P{;XdsB4J=q^sL|6ovXBnxPz`m D%E2tG6xlSuX[X-X' );
define( 'LOGGED_IN_SALT',   'op.Sc5z[_,,X7KI[Kw1u9Wa84>FK=K>ZraEvr&$j&jeUH8VZ_rW!~8Dx+HZsy@D)' );
define( 'NONCE_SALT',       'q#$`BVGMr ,IHaL!/,bWfJ`Cz?RC37K{rC=qrCgg.o1j!8J <isne,Zk bl.MA%k' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

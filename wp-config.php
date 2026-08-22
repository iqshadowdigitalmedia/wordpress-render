<?php
// ** Database settings - TiDB Cloud से Environment Variables के जरिए ** //
define( 'DB_NAME', getenv('DB_NAME') ?: 'wordpress_db' );
define( 'DB_USER', getenv('DB_USER') );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_HOST', getenv('DB_HOST') . ':' . (getenv('DB_PORT') ?: '4000') );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// ** TiDB Cloud SSL Connection जरूरी है ** //
define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );
$ssl_ca = '/etc/ssl/certs/tidb-ca-cert.pem';

if ( ! defined( 'WP_HOME' ) ) {
    define( 'WP_HOME', getenv('WP_HOME') ?: 'https://yourdomain.com' );
    define( 'WP_SITEURL', getenv('WP_SITEURL') ?: 'https://yourdomain.com' );
}

/**
 * Authentication Unique Keys and Salts.
 */
define( 'AUTH_KEY',         'VTq^_(k{CiV@OoL(E[S)A_ww}LVa2)L[q-56xcOuuKd}i?Wrwqya%#etXC2l3^9H' );
define( 'SECURE_AUTH_KEY',  '0oO<M2Ke_8KZ=0EP)1oQ7gIlxOFMt7LMfY1ULYhgyuKti+j7Yt@*><u$9uQGzOsp' );
define( 'LOGGED_IN_KEY',    'F#fb2}[cEW%2n#&FJ-nhBsDjnWo}Ds#?hzp&{0m*{nLv&RC4rpyJ}s*aT8(J}v2L' );
define( 'NONCE_KEY',        'Ik9nS2d#YQvU%x870d_UbKg@wVeBcE3U$8H5Trzg7W6]rRu&wZeX{1_YLOT(w]YE' );
define( 'AUTH_SALT',        'ebU>so8V02SYAk?*XX[AsesG*($lC3e5%gIBi4Ae>Z{40eeX)&N}v#aGwgkK=&oa' );
define( 'SECURE_AUTH_SALT', 'AlvnKg}YS&RLMDJpV7vq2O63zFi(j-=r6H!NZ?g3vD5}rd]GqRkFkQ6E{5<6%C7Q' );
define( 'LOGGED_IN_SALT',   '*7O}[L2tRiT]lkCA0WCwWEl}vwZ7Z@K<3xDV@oVK8(NL(Oi)Tx]ilLKX=<Qymbb1' );
define( 'NONCE_SALT',       'r[}j!FMcZOs-O&m=Qd+k#Xh&U?5Dn4]tr&(O1KNO!u##Cn?KR}QF>sPXb3yT6dr^' );

/**
 * WordPress Database Table prefix.
 */
$table_prefix = 'wp_';

/**
 * Debug mode — production में false रखें
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';

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
define('DB_NAME', 'serenaca_scwp');

/** MySQL database username */
define('DB_USER', 'serenaca_scwp');

/** MySQL database password */
define('DB_PASSWORD', 'zn)[pS83y3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v5cmmp1strlx6t9rbzbxgwiuks7gihrkefnrxietmml5t7znxvvutcdj8hakq4ad');
define('SECURE_AUTH_KEY',  'vhh0jcca3ucvjesgt036payomkf4jin728f143neoayjik28rms3dvgxro1khqqr');
define('LOGGED_IN_KEY',    'bz2higcb88evrcimsmebafeoqthv9tgl3chpsjdu9nowrt6m7bylx82lhsurpykv');
define('NONCE_KEY',        'jlunfadep2wzoca1lllojusqiz1cxcmlvp1mn9mm0jmv1qgueswpvp4dfpbhwvqy');
define('AUTH_SALT',        'mya2qxttvo4opygbtzoauup2flk7nrlltjdgimvyripjy7aic8qckmnegz5er8kt');
define('SECURE_AUTH_SALT', 'odmiohuivbl06zbzjg2gpwsrdrmfowqftdfva0njjpxm3tedpo2iqtgsqqhoeto4');
define('LOGGED_IN_SALT',   'wc0gnksevz1tlzdtfvgzvgr2ota6mjx8jhe9sfccwnvw7yh6coh1yoxwclioqtjy');
define('NONCE_SALT',       'uauwzy4l6p5672r77i9ospfizmv2ibwjxouxxzxtpykelgsuv6leycrvotrjncip');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpai_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

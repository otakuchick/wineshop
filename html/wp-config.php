<?php

/** 

 * The base configurations of the WordPress.

 *

 * This file has the following configurations: MySQL settings, Table Prefix,

 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by

 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing

 * wp-config.php} Codex page. You can get the MySQL settings from your web host.

 *

 * This file is used by the wp-config.php creation script during the

 * installation. You don't have to use the web site, you can just copy this file

 * to "wp-config.php" and fill in the values.

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'db39006_wp');



/** MySQL database username */

define('DB_USER', 'db39006');



/** MySQL database password */

define('DB_PASSWORD', 'vV5xgRTj');



/** MySQL hostname */

define('DB_HOST', $_ENV{DATABASE_SERVER});



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');



/**#@+

 * Authentication Unique Keys.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}

 *

 * @since 2.6.0

 */

define('AUTH_KEY', 'qd6varXd v6uwLdyS iecNnBpU plti2G4S eCv5zla3');

define('SECURE_AUTH_KEY', '5m3SSnvm ARGdvIPB jWHGECNR TVlhUlNn pJFrHdRd');

define('LOGGED_IN_KEY', 'AbxLvbiI JBwpLVux YOdwqsjH znZC2DF6 wurRc4eX');

define('NONCE_KEY', '');

/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each a unique

 * prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * WordPress Localized Language, defaults to English.

 *

 * Change this to localize WordPress.  A corresponding MO file for the chosen

 * language must be installed to wp-content/languages. For example, install

 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German

 * language support.

 */

define ('WPLANG', '');



/* That's all, stop editing! Happy blogging. */



/** WordPress absolute path to the Wordpress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

?>


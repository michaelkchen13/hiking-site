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
define('DB_NAME', 'hiking_blog');

/** MySQL database username */
define('DB_USER', 'michaelkchen13');

/** MySQL database password */
define('DB_PASSWORD', '8F7mrugKmNTkJlMo');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'P j40EW:LP)i(s?dEmy8uU$|3])bT<LqP;Bp -g3i-)$|SZVv]EW|t9xff_=%%J!');
define('SECURE_AUTH_KEY',  'ko!:$WL37cKU8Ya#RW4LOhpbCmv.M`?7wqg2Za!%?s(jVEl/<wQs_qqj4H#<Y5.8');
define('LOGGED_IN_KEY',    '?)*0e`,,tlj-!OcE%anl2C 5Ww@=d+UYhu*&u=32^uZ+Vj-:CR&Ff:4REduW!P:2');
define('NONCE_KEY',        '<`fo__b|/-)QW-*BdBREdr!5VaQUQg*L|Vv!fdV[-O6xm=0t<-2,T7,cj=AV%9R_');
define('AUTH_SALT',        'jUv+8wH_0-+.Qph.j~weu:Of;9:?e.CC?WX1gH~g(|cjcuAsl?o^Q d`KB#}I+Pn');
define('SECURE_AUTH_SALT', ':qA[6|KXK^*4j~!axd[sa_*~sm]1rB_SUUzBL 1-v1|h8KTzD%>(ah %1v(v1q@+');
define('LOGGED_IN_SALT',   '>p/f5Pl{P|:_${:Ph9VtsjQ+_qeAu3i^J>m!KO~y6kk>#7r.CeD!2rFOH-+84fMT');
define('NONCE_SALT',       'tPq9+,(Y 4/##3.WNvGdBWz-+*#EH@XDA!nddej[@&MaKmNZL.pf1!}dS*[b7g&d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

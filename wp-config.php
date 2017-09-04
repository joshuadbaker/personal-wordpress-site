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
define('DB_NAME', 'josh-website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1*$i1!dET)nXjg0r,}:#S]c[N7w;8(@qEk3~u?wW9j[+DD=>ga|QZX1Jc*IFh-xv');
define('SECURE_AUTH_KEY',  'nb-DFls1kId5t;f{C7T=<cw[5d5]{88n-%a!,II6TN[{;4pk|zA;a3t@65Uk(yu&');
define('LOGGED_IN_KEY',    'i_!0p<>xU5U99r?f/UK%~N;*AKWL~mEt;c.4{]-1g>zQb5pFNm$VR=o-1X]fW1XQ');
define('NONCE_KEY',        'W6 4t/rlB3QEE%iqFd*[)36d=TkX.Fl=Nh,SuzvI+TLsz%ao1h)GInLl8<LYDoFc');
define('AUTH_SALT',        'Z=dy1#Y;{6]v$(My:3=I5V|HOD@jYv#Pjuw*G$RIH]4ZOb7G1An@zN`}v><a,j^z');
define('SECURE_AUTH_SALT', 'eG8ros5&hvk5A%;,=Wr*uNNd)wS7!J~QslNh_a&zg2[oI!F{$!#/gBEaPxgF+Zpn');
define('LOGGED_IN_SALT',   'Xk=5a-tkRb=Z9Lz_43Zc9a4*&!Km q&*E0`.o/fzsUO,:1)|{21U;moN4NTLlsC4');
define('NONCE_SALT',       'Q?_J$3K)3=HtuNOvkleX&ay b#jEmO;b_8jHa(Wdk-XH%uz7.)ZkRx8 ?gv[yjQG');

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

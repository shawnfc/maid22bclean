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
define('DB_NAME', 'shawnco3_ss_dbnamea68');

/** MySQL database username */
define('DB_USER', 'shawnco3_ss_da68');

/** MySQL database password */
define('DB_PASSWORD', 'DGP9LGbAssmy');

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
define('AUTH_KEY', 'aES@D;fr{E+s=Uw*of!YP^Xu/bV)MDV;qJ>Z]MXTGmg>dd>>@Xa(KGmfeMH!>z^@k(<(y(A|QmuA+<K|nPtPn{W)EWL?orMdpX&hc-Fyy+]!v?d<&]K{]kO?%v=cBWO!');
define('SECURE_AUTH_KEY', 'g*@PUf-kI;?{PWRwh?HaXU@NWcND@?{tBw@Ipl&I^COy^AwHQMm/XEfdUf}Tc=jFxE<akDlNupW%%p/-tV!R&>sAlNuvch<bfIivw/BYxoMpUU<YNk)lfmIq;cIy<hpI');
define('LOGGED_IN_KEY', 'ure]INgCfo&rox_qXcsaHQZ[r+CnXTl|Fxk=&MU|ZePn{bR&j!EqrpiHlLJ$udEk?U/M[k<;e-nEHh^(DFcdTlD=mBsNt)BZcuUmQR[JY&&FXY+H-+]]f&e&n}Kibjt[');
define('NONCE_KEY', '/?Umf!$S&?QuveGgaCu;yV+j^KSHM<vjS+dBxDE||h$AUNeO)*vE|HHokD?&[+QM=G/muT}rzQ@/>%[V>XC*}OEELmwO+p-CCo%fnXi|vJhOt{h;rU^)>(/UTfWhEc^h');
define('AUTH_SALT', 'HQO!mQN&dSFcrkdMt_s}y@>kvB<?aNwTP]PL&n;Eh)=elE}{FSQuU%?[!Ov/qgCKaD<h|LW$B@Z|{F!xWU/a_$Pc!o_M&k}yBco&lIcK_e}K>XkM$*U-+$l<q?kRFoLj');
define('SECURE_AUTH_SALT', '*L|JSa%j<[p|oQhI$lS){hctMOU(aIbwQOu%p*L]YSTcHBTaChRtmHp&Omp-_(eh_wek+Vg<VSQxwAeTVZqzqhYdh^K+f-eax)!z_!IDdMS;!_D@**%nB;/Qq%sRo=!I');
define('LOGGED_IN_SALT', '%EIc&cgGVpCc>dD=uXQQYUBPRTwXoln<LU=/+G-GVX)EC^j|SpB{!naJVhW<*EJQcKeuVWJkp>Os{?m|*@-Ha&-FU-Yn$_$sTB^c)pjLK-OVv_i;++HdtKA$@_?LtAfC');
define('NONCE_SALT', '_=@P)O_EvGE@<_&Aq!aK!QH=]SoI}*?EAyy=rDNyG=u){Y>q-vye=dF(Pqx$xckBjokDEaK-j@X}p+h|z@lV=?O_(_rpzk|i?<[Xp>Jx!$x&C*OmX?}_<nu>F%kn]%tc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dbeq_';

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

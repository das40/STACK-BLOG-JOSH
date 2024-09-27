<?php
define( 'DB_NAME', 'wordpress_db' );
define( 'DB_USER', 'dasola' );
define( 'DB_PASSWORD', 'Stackinc@@12' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('AUTH_KEY',         '(`t&vGP]pC{*jQ2Zv8|]n-to#fk$PS8!BOas4Z~M?vbY4Lf&a(_4|eRSs=fA}QZ/');
define('SECURE_AUTH_KEY',  'hE#E3vpM*{sLFp)-;`_Qjk|Bs=|+6_G|(]7-*P;p[eUY,ZpDYI0zG!suG[.hl_!P');
define('LOGGED_IN_KEY',    'n=;6o0`M>6i9(1}9fVfl[C}IiC=AqAV0hVlo3PT+z?l-|Q2W.QktTV(3gYhVSm@1');
define('NONCE_KEY',        '=n;cc3F:>I3&i4Z-ghGT%eg/9{$iC?gSdxe=u <% FZB-%+HMP1+^5ip+-! rTeS');
define('AUTH_SALT',        '9.=8$ti)b(MiD@AbC#hniPHY[|]{X2E<:[Ha#8M,-k);7x|[KH_+*[tbRUB-`7S>');
define('SECURE_AUTH_SALT', 'l?`oP+bO!AK. a}_X^A+F)=|^2}-F#&:G}c1|^OD/ZIxaU|YeQ|8fw=ECA~:!Xzz');
define('LOGGED_IN_SALT',   '0~x5|2:X>wD=)gw`Eb? q+P7g|AZ-7,eIZ<y_`L13fK$6{!CWr?{]lC]x1Ff!!V(');
define('NONCE_SALT',       'T5Z+YriTWh]0]6t-]8Ha;bmV*s9]W|6=AqQ#a2|egB{ mA2VM-*Jrok|U.SB7:ux');
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';

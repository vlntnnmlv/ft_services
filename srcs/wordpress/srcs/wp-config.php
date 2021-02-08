<?php

define( 'DB_NAME', 'base' );

define( 'DB_USER', 'admin' );

define( 'DB_PASSWORD', '1' );

define( 'DB_HOST', 'mysql:3306');
define( 'WP_HOME', 'http://192.168.99.201:5050/' );
define( 'WP_SITEURL', 'http://192.168.99.201:5050/' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
define( 'AUTH_KEY',            ' m8<-{D{}b~HK_}m0p!v:9lpF@1NrRhIMg9z(7`M9q2MM(HU~&U7DSCXZ^H`~Lr%' );
define( 'SECURE_AUTH_KEY',     '/;y7+%hR+zF^JZ4]yd=jRP~`b~91O5u*ZR@Sk(}c^})|Y;U,:f].4R5/>,glNIqK' );
define( 'LOGGED_IN_KEY',       'fW@ciLo7C3&XX$H9gP;R 8+3EAv]zy_8D_mhg.ekA#L6e-Jp*W)LO|Pw6ZqDak b' );
define( 'NONCE_KEY',           'j$I(pO)K^J![a[{VDp&BCa*vIy,;@1yx^d0pCyb|!p5r_ebvJRRo~!}TpCXP;Ahd' );
define( 'AUTH_SALT',           'c /7cV3uiS#Dn:JY6[h~Ku@ba/g(vA6oMrwf|iQ<VSrWGLlK+,jc*hmfBAkoV4IL' );
define( 'SECURE_AUTH_SALT',    '0qXG.,E724BLV%26?cp!m?P [FgDe`L6d5u<x<;5gFdEYD,c4#8ubR,i73{=x0ME' );
define( 'LOGGED_IN_SALT',      'uK*4YA m!o&}.WA4JLugYVA~1>FlK4L5~CvuYhrMEb :MK,]k;_UljziGrJ%_k96' );
define( 'NONCE_SALT',          'L;ZGBzm{9:5!0Tu$a7nSIVrQ4fp`)BIMW-:.xUW{fJ`xLt$7h-b:>tPDwL;57aS]' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
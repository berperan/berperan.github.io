<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'mysql');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'berperan');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'angel5340)=·&');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'mysql://mysql:3306/');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SjyKbqUXZj~8NIojduuTY#WHQyAk6G_l?w3+0!<Pb;o)/_EI,h3MHx$[NgVL135p');
define('SECURE_AUTH_KEY',  '_$633pG(ipl60R--E7^^MW n 9_KM{&Hdb.KagEM$/Egs^wLq~8b=[gU*bd]--{d');
define('LOGGED_IN_KEY',    '&CcHvQ>dv<VqR<jDN,$M){?7ZR4/REyZ@&Hn`gzHUe|,+MI*P*#7>K)$bvN2HL+(');
define('NONCE_KEY',        'WnG#P Tg&zrdQWv|!^l}),gCH^Dq+kmCM_aGSG!Ul4g}eHebu[9H&rYX-mQMfs;)');
define('AUTH_SALT',        '-YE[eykA+iPWA8CM~c11b?aT-15UO/.FTy(Esq7Dv< Qr1A3;3S|D(}p[x]C](wh');
define('SECURE_AUTH_SALT', '}sRE% *|B.btcN3Gk0v_VLQSg,p{zh t(Ox+>u 0GBU9Yv+i46PKv6ZP.,Z6g1z]');
define('LOGGED_IN_SALT',   'X}E8eX6t*A=@jBv;mf||6$v|<M]sCl8+SbO:Tf8V+@-U]keU$KpQw7)ek4k?HR`o');
define('NONCE_SALT',       '4{5O/$WR|}zY4^T]n?tm5J*xMa?-OeB;!7?WtQ5qb7>2@-QS{,ETxdsB_%-@j?i}');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


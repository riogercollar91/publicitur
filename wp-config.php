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
define('DB_NAME', 'publicitur_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '%O;09kDu-vns/dKJWot(%h5e {Y45m2ihEp<lXXKlgV_*33&.]?E7h:5`{O@D]Qt');
define('SECURE_AUTH_KEY', 'S]CgVrCc 1X3.UPA,Y)$#h#F|Jef-m#Lh[Ek/V+A[,wTG%Jgsm-Ggl|p-4C-/lpa');
define('LOGGED_IN_KEY', '|dY>[(x%%k+.Gs;50>2}L4;Iv8re63LlH@l|{5U#Fkaq?m[D5&%1X|s&N;G[6KJs');
define('NONCE_KEY', 'LWGyB2I#,0z9f>y~)iPm?Jz.-Av0]:!:=L?]bXjujQ~0O{R$T*0eOkD|,;!%E(5;');
define('AUTH_SALT', 'ka1@#|E&N?@H^5k$S$nCIa(ytmYOwt)#Uy**5^<B)r~)=jtpqiQ+:)QvQ)~[[J90');
define('SECURE_AUTH_SALT', 'Y<.+=l 8,BRUzKJs1@zxIrU^CEz7#}2fS8${PgG5L4yrecW&X.<1Vqgx<xG3QZck');
define('LOGGED_IN_SALT', 'B% 2<wIw$FLORtB,vm3]/d 1;I]b`J#^egEMsL,BqG${)i7A?T%wHS[VW.]BS*ev');
define('NONCE_SALT', 'H78-an%&2Yt?|9@NP{xXVj$gK~B (5gw~BA%P,4~rfF#BcL:&}ZTQz#21AiE,p 2');

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


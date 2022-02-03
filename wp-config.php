<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', "avp_naima");


/** Utilisateur de la base de données MySQL. */
define('DB_USER', "root");


/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', "");


/** Adresse de l’hébergement MySQL. */
define('DB_HOST', "localhost");


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');


/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X]jNp)X}S$%z&sDE6XoRVZ/ltHe:X[/?x>A>];4TkHi.TF%<&G15)4 oR7ugt|,|');

define('SECURE_AUTH_KEY',  ')$rdIA-n7<A-UR4UZk`}Isy$F/quMgaPk#W8jRq4<JcpGPvjeUbY%7!p8$>FS|hY');

define('LOGGED_IN_KEY',    '[!rbvK8 x7w/yAM}tlr[0BgsC^5*%rT`$3sI3R2y[+^v5,cV>;r%oF|?3EXUee8D');

define('NONCE_KEY',        'w/7Z32h,t<$|22jGa.DD<nE?GEA]I-,9^?yV(#S,/~z]4M3e/G`Z,3N_|l4^$^dt');

define('AUTH_SALT',        ',H,ra|$=6}rslM$hxr?lbWM{LN>]]Cj1WY.`&0[[zsi}66 GnpoLmEh$4OJc!]-p');

define('SECURE_AUTH_SALT', '!1j2m5D1f3_aaUY) + ^EB{U|y$F`OUlVxP(lKYM49ZZ@OKzJc:/OM#Ld>H&[Fm&');

define('LOGGED_IN_SALT',   '/pZv<)Q8^ 4]L+dCBrYky~A h; @vfRJlgd#W&K!.,5C| V`pF2@$ritc1(`Pni=');

define('NONCE_SALT',       'v /# |u|$Jr{kVh$pI?fhLI!PZ:F6oN]o|!j$axZWxxr-_2#;DhCFp^@AvB[gdrL');

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';


/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
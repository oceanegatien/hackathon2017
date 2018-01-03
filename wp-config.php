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
define('DB_NAME', 'hackaton');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '&Ly7q7[`vxjO!F+!DJ|lsGeu)SK#(h^&1v:yGMqTf@ihm2nOKZ|;^95MG@Igo72j');
define('SECURE_AUTH_KEY',  '|A6xiZY9P8*+(lh**me?f`{M!--mnvlI#AK&_[SX+[{PH+F5rd24?(,u_>k^Ni}~');
define('LOGGED_IN_KEY',    'B{1mwg8=2.^b :B5d^ ^ 2{?gK]Zh~ZcAF+F3H6NTR+`jo.!g!`_d12RX)ue)RY-');
define('NONCE_KEY',        'JR}/%5_Wn%F3#Oy_{ DK5dBY6boJ#FJZ]2>=GNaP|4Z~gd(@f*#wSs8rfklUi|9b');
define('AUTH_SALT',        'hP/LST4^{vLVIGslb@%~oz%;?ymKHueLYg+ba?Ck9qnQLICPEZJ9w#`h>$6f9o^/');
define('SECURE_AUTH_SALT', 'R[O80!~_z+!?&wCoLydhoICZ^~N?~=M|7n8Q%sA1?x!n CopKR2`.U( I!xa!{1F');
define('LOGGED_IN_SALT',   'k/|S:~t2.X`t@SrMQdl5B(R{Y.Y0%fLcw|!?$aue1Qjp](#RlW]/nMBZyshE84C1');
define('NONCE_SALT',       '~;_EE,IaX47=;dJ@@ ;NZZo%ws5O5 :(&K2P^$~asij$nh3Tt2pJ#{c7k *my/k_');
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
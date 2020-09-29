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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ekXk>8?55#i|WIJi}?3|fsNn4wdoqf2ZR+?/[ilCaKb!V4;r/m%>.8,^Sh:(.Q{Z' );
define( 'SECURE_AUTH_KEY',  'zKfjPRis.2%x;<9WJ/>WN<;Sx1*#X_8}myW_5B)GaD/.ufq/spI`#aP1$2;QrzJ*' );
define( 'LOGGED_IN_KEY',    '$d6I&:Z>A[) 2>eBk}#_hptES4vA{.goc 6J=/;Od`{J9_+L@}7h:OrPt0$G1zy[' );
define( 'NONCE_KEY',        '~jh1.PWH$XbqM_{do^=0DK_R)UU/:N)cE>#bKKmsN3g!wQt@hT?7,*5W%e`(/Qa*' );
define( 'AUTH_SALT',        '}ARVLN{eemrunaJ}f]?1mvvMDf^96R /ZQXl2x{*iTB`3QRhD{S_onu/_3~t,>rq' );
define( 'SECURE_AUTH_SALT', '[rht2s*wFN8uYM.EX0qZ-REpoP{tPSRG-;Z_8+8xd%73K?<V!K%X:>GnqKW_h !D' );
define( 'LOGGED_IN_SALT',   '@jlAq}#c}E%??eb9lS{8qF>f[`:0}65ON:DC{=Mhx{Im<K#}aZXp+bn>H>:1Gq}4' );
define( 'NONCE_SALT',       '[pB`6{hh6gA%e>j3>B4R`[/3}2lM~-VI,V!P<]F!FD_ERc!2}/DC3xAx (X<-vK@' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');


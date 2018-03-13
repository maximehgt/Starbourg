<?php

// BEGIN iThemes Security - Ne pas modifier ou supprimer cette ligne
// iThemes Security Config Details: 2
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/homepages/15/d709712235/htdocs/openclassrooms/strabourg/wp-content/plugins/wp-super-cache/' );
define( 'DISALLOW_FILE_EDIT', true ); // Désactiver l’éditeur de fichier - Sécurité > Réglages > Modifications de WordPress > Éditeur de fichier
// END iThemes Security - Ne pas modifier ou supprimer cette ligne

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
define('DB_NAME', 'db712055658');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo712055658');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'maoazerty26');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db712055658.db.1and1.com');

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
define('AUTH_KEY',         'GFKmWbg71H+J| Kf$!`Yuw{:xn7o.`[zr|?![C!*_JlT$LW$G+d$y&8`|YDqk?Q/');
define('SECURE_AUTH_KEY',  'Z@>p{[fz%^B^,t8)5M~4):_oc){)K*=M9~HMEkWoR[{aZ*8+>QyuK!]D-I[P`~7+');
define('LOGGED_IN_KEY',    'w &=s`dALPZ7#e/@{2;~K@cThz`nTfy;4@#fYp0{OS~-rYRy_lor2cR_G)cvUTI9');
define('NONCE_KEY',        'w:OcM!#.6O1e,Tx4A,rxCY[*2Dks!|B[g$35K]LDYx7*/Ro}4g)63[j2H7G@R)~b');
define('AUTH_SALT',        'A<bL4^(}-$5(}Y]&$M7;SV=ZpFc!E9&+J*BoZiKQ*K6xCB:.x8p1.sa3%WBjMJ.C');
define('SECURE_AUTH_SALT', 'l+xPf9;-e8<J!G471RjstF83V4#I(ewQyPL=eG4!h-.GwQOE*L 3bd5CpZ@4k0Dw');
define('LOGGED_IN_SALT',   '%n/Ih~U !qM),H YB.oDO(x(I zdE]_DAuu(HF?A>o2/! @`*lKiO^?l%U2UqH8=');
define('NONCE_SALT',       '}>Ki@0L%JB(kFLBSkSU8%+1Bd>a`b.0924XYGqhG(x3O!I_/(hSu%@KqX%l TkRx');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ovs_';

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
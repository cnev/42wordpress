<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db_cnev');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'secret');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=AX}m{m5XksA-?!Z]8US`]Ua0{|e:I;>UaseF-|L8b??DZgKJ:]|BG,{&lsrs$=%');
define('SECURE_AUTH_KEY',  'sGx`;fd?8VEi)fC<4FEc3}&7#cEWcK,o+#?Wq?30gf|+Ls)F#:gg<.|+,)Md-%BS');
define('LOGGED_IN_KEY',    'j? ~Z.zvSvR|UJPFi+)8~>d2</F]$iB|pdCb-qjk),-]JW2aoZA[LiEord9|E;R4');
define('NONCE_KEY',        'rxPBQfe+hzM}}2~-e&{|XBOI5)6Z{PkJ0d:-HeKGI3 x+LOBc|>C_Cd( g2<btD/');
define('AUTH_SALT',        '46x+ZwJGr,`y3p9AWuIi*`|RaZ<9||BAH6GF:7FPTPM4|]ZPg }}%C>,Lf%or6|J');
define('SECURE_AUTH_SALT', 'kY(v,K0~Lq:Ijg$(@WP.{<rQ}y2D]kpF)4y+ga7EVK$*K Mzb%U9zN$d6;pb>C%n');
define('LOGGED_IN_SALT',   ':O^yJ+O~q~$:%K(ms;0r:K,^:5VCdNVLp#Y0UsJ5C^T8+kk 4S3z3yi@c&^lJ9?#');
define('NONCE_SALT',       'S{<nkzm;TcUg@-6Z%),q-0g,~dbJe.&6`9-$b/(v/fDrd>PA$/IDQ7.8_ev@{#*~');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/**
 * Pour les développeurs : le mode deboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', true);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

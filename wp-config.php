<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'SiteZahra' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VLOd(6MXsO5mft&!muF4!>*5Q9CX;XB^ZH4NEzq/q*6%=wWu}E>#8z$ggY3b/lih' );
define( 'SECURE_AUTH_KEY',  'hn|Nvvu:4n<U=;4c5nj/zL<oUqZGFDOH2wur^[#T>=`jg,):^0.VR@] MYGnKreR' );
define( 'LOGGED_IN_KEY',    '!P1X$#0uq4NXGS_K{oxHz56hUf,<_mQ00#wX_I6H*`gVGak$.FcJH|vG,gbk=^5r' );
define( 'NONCE_KEY',        '^5&fWZr>``erBv13*Uxff2>.@D]:VQ%5]jRRny[%+U|+~LuH*$!o~6z(M@<5-8r-' );
define( 'AUTH_SALT',        '+#b9RCx%NWS%B{@_LYL&0/q|%`LU`aQ_5G2{{CZSiNe-N&WBMg{ig3I oA?)Gyg*' );
define( 'SECURE_AUTH_SALT', 'nyTE=O#t[7BumUd~&1pi=cb_Hai^4[pcl(G0f4XYdmgvMJh?b1/ePw,44xTO+GCz' );
define( 'LOGGED_IN_SALT',   ':QTRj_45(|Fs,wXcWiUgW O8-rZa;wac30oW#8rP~*/NEo#]_/7L0i:>Fcn=}1N@' );
define( 'NONCE_SALT',       'En.RL2Czab=OUNXi]s5vw/J.=C.Lm7HR*WB.Vz)gjki8v:[stQ&jt<z{IQiD=&i3' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

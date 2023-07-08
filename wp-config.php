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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'l6Lz!ilmSHO5}Ki@p+[:[pneydh1[jTSY_oo>`q,C2= F([0Y_o[BZqY7&VWR!70' );
define( 'SECURE_AUTH_KEY',  '{u|7=<Kp2Ae;=$~q]icw*T`g&`q.z~R-@1iT/fx!)9A4)#1vrt#Iz.e;qx{N8-5u' );
define( 'LOGGED_IN_KEY',    'tmJq2}kT:sT&Z(f1J2oWON*^`o8$,H:Z:*%:J=JjK]x<h/hFUgJ/[O_6YKW|3st|' );
define( 'NONCE_KEY',        'KBB3iYn1/?.6c)u(oD>0A`%;Ru)v![Dc>(L%gU/U{_#5?^?zrBLWZ7vNF4Y}},R|' );
define( 'AUTH_SALT',        '/JjD1qFcMi#Vb@tZYW7 &W.Ad*xTXe= 7*ACyTSTxrRXp IHyx$b<;}2Dpy&I37l' );
define( 'SECURE_AUTH_SALT', 'g`/K:+h5t1}XSgf?je(T%}?ySR5V^VuF),= IH:7:=`<CaI!^m5XnD`K%r:N1_#%' );
define( 'LOGGED_IN_SALT',   'qKH#DR?n=R+5X[`$N) /vs3aD+#v>}0M:O]HT0-6V4HPNW$oxX=uaL/O<4zQLvn|' );
define( 'NONCE_SALT',       'Hs<aScuN f*LW5}v *g9S%|66Q!}9|3z7CS;RLI8M|U7E[R}5,Z[Py92FuA[:@y{' );
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


// Active le mode WP_DEBUG
define( 'WP_DEBUG', true );
 

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

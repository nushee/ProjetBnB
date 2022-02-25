<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'data' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G$~^%`k^{A.!Q3%WM%pi|h9Da hH9w6!mS@3r4EZHk/m+6^^z)3tiTgjwl1$,VFE' );
define( 'SECURE_AUTH_KEY',  'T~rrd!awAsR}t8*>1?)3Am^*A#N[NyDF}fSv4Bu 3C+Rr0FLkhBLx_B@ B!w]N]A' );
define( 'LOGGED_IN_KEY',    '|nndBOvk1_-l4=|eNm`#~]@t:R0]@8bj*BfNROv)He2z(1l3C4Ur,3,iUe;#Dv{B' );
define( 'NONCE_KEY',        '8H)KU|Y5ss_12z?74$~tAlF,~:%@ey!C=|TFp0B:x(yZx%$Z%(,Wb{6SvxrrmTPh' );
define( 'AUTH_SALT',        '%Ots`d#c($/gx|oL#Qc(8(u*Y)FX+j8fbw| ^lf;>4}jMHHPgCPV&qqIkL|.Tcvy' );
define( 'SECURE_AUTH_SALT', '.kQY0G9Lh>l wrhibR)LoRMb5[7z4$O;{!GklFuLK)c@kFMfH762;|V[#DVj?W/?' );
define( 'LOGGED_IN_SALT',   'h7$=<ANC99TR!agK(vK9vNbQ~Tum54QphR<PBZ:2~gacSXx&?>UH0RTrbZ57Yg?#' );
define( 'NONCE_SALT',       'i_d0`TdeE5>b4/x*KMPUJ1Hxy:@ZDkWVu*f5z0FCsOr3/5^ZYG|i[2&hFJz&Vgq;' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

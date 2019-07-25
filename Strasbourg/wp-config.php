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
define('DB_NAME', 'mmtmc_strasbourg');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mmtmc');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'mmtmc');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mysql-mmtmc.alwaysdata.net');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{OCTpQ=EOEQh%x<_4`-w<zZg0`QRST$E?2[(|dha(2b:bAYuD6Ql^xrX!e=Wi#`?');
define('SECURE_AUTH_KEY',  ',p,J5{g}k9`AM +k/(1m FI4}A]*-LBadr*Eh8-3:m,21E,DHSc{qr>x}vA#3Xrq');
define('LOGGED_IN_KEY',    'TKW# Bh0[2%/1WX#^=/#2 26%tvfB{`apt?IkRKI#m~Dq-32#LKx`qB;[`lZOPtK');
define('NONCE_KEY',        'PS6Kbyi{2)/<k. ?I4Qj`Jv>zo512K(rB5)HaVp;l)OFRE~[j*pCWUw|ZEb:siX|');
define('AUTH_SALT',        'Py&[o-,i)n!SO}&v.*%e)~@mCMG>$l*B+^Q&5C,:;5Q!/Z mRx_`3joLctSoP_qj');
define('SECURE_AUTH_SALT', 'rV 2(!5VF<F%P<Ml!NjY3TEV7ZNXud+M V)9~!aaSr]b+!M`~c2#pp;8j:TsJSVh');
define('LOGGED_IN_SALT',   '>?4O5QWSCW@lH+P`(ii$W$i*Xf.IC0PQ?7[3wg4)E~BGcQXL3FH0>6d$l|a8fAV<');
define('NONCE_SALT',       '-9q.lnH*{&ldTq+$|j}w+.}ZF(G#FGl,Q]Va0:b/Bo?6]HlZ6}1{uu0)<@S@F5na');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'st_';

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
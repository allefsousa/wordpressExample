<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'testew');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}alfwZDNvTuKH{yivpj&r02}zE+$J402IVrX__e#Bn)L`siSZf@ 2ONODGLD}^~f');
define('SECURE_AUTH_KEY',  '`w;G_!}i%ji1j``QdgW`^1J0ZTC^iPKAN_|#Abt~k+y@E[&E ?:R5r6?M~o(UC|?');
define('LOGGED_IN_KEY',    'd9k>N8L{0xAy}N|&Kl #Z.FIChC&,zLgn .*[&S!IOtZk*?GVKp>]rax/&*-K` f');
define('NONCE_KEY',        '31!]~Re?=LZ&&mIT2SW`Jej_C<o%lN[ABU;DLOrE4-D6J3[y.:if)V](.MtwNi&B');
define('AUTH_SALT',        'TYMkxy?H!!ODgLr}@.K46vHD{:#^He0y5#R.)ZpY3y^8t>8KsEKd$Ftm|bG3bJpk');
define('SECURE_AUTH_SALT', 'Q,P82+0L!Etpp*+/@F+}iqJf/6?XcU-8.jh/bbT*&fNK}+U#Kd$m1}}gax:d6O(%');
define('LOGGED_IN_SALT',   '!HE_uuNkg;4.{(!A=-%*xo B#%61L5EFgqCrM-w5h*%Pi$&@[P,{d%RhNmr`_JV9');
define('NONCE_SALT',       'F-|gmoyMRORVs2.1T,!DdDFNSGQ|d<bLdU.53#wZf2lTF;fII9>,^ ,ZG5&XY`&1');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

<?php
final class ConstantesSeguanca {
    
	public static $caminho = '/legalmart/seguranca';
	public static $enderecoCompleto = 'http://localhost/legalmart/seguranca/';
	
	
	// DEFININDO OS DADOS DE ACESSO AO BANCO DE DADOS
	public static $DB = 'mysql';
	public static $DB_HOST = 'localhost';
	public static $DB_NAME = 'acreideiaslegalmarte';
	public static $DB_USER = 'root';
	public static $DB_PASS = 'root';

	// CONFIGURACOES PADRAO DO SISTEMA
	public static $PORTAL_URL = 'http://localhost/legalmart/seguranca/';
	public static $TITULOSISTEMA = 'ACRE IDEIAS - LEGAL MARTE';
	public static $FAVICONSISTEMA = 'http://localhost/legalmart/seguranca/upload/favicon.png';
	public static $LOGO_DASHBOARD = 'http://localhost/legalmart/seguranca/tema/img/logo-gestor-de-cargos.svg';
	public static $CSS_FOLDER = 'http://localhost/legalmart/seguranca/assets/css/';
	public static $IMG_FOLDER = 'http://localhost/legalmart/seguranca/assets/img/';
	public static $JS_FOLDER = 'http://localhost/legalmart/seguranca/assets/js/';
	public static $FONTS_FOLDER = 'http://localhost/legalmart/seguranca/assets/fontes/';
	public static $PLUGINS_FOLDER = 'http://localhost/legalmart/seguranca/assets/plugins/';
	public static $UTILS_FOLDER = 'http://localhost/legalmart/seguranca/utils/';
	public static $ASSETS_FOLDER = 'http://localhost/legalmart/seguranca/assets/';
	public static $PORTAL_URL_SERVIDOR = 'http://localhost/legalmart/seguranca/Aplicativos/MAMP/htdocs/legalmart/';
	
	//CONFIGURACAO DE ENVIO DE E-MAIL
	public static $EMAIL_NOME = '';
	public static $EMAIL_ENDERECO = '';
	public static $URL_ENDERECO = '';
	public static $EMAIL_TITULO = '';
	public static $EMAIL_DESENVOLVIMENTO = '';

}

// ADICIONAR CLASSE DE CONEÇÃO
// include_once("Conexao.class.php");

?>

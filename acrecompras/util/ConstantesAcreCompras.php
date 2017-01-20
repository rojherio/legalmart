<?php
final class ConstantesAcreCompras {
  public static $caminho = '/legalmart/acrecompras';
  public static $enderecoCompleto = 'http://localhost/legalmart/acrecompras/';
  
  // DEFININDO OS DADOS DE ACESSO AO BANCO DE DADOS
  public static $DB = 'mysql';
  public static $DB_HOST = 'localhost';
  public static $DB_NAME = 'acreideiaslegalmarte';
  public static $DB_USER = 'root';
  public static $DB_PASS = 'root';
  
  // CONFIGURACOES PADRAO DO SISTEMA
  public static $PORTAL_URL = 'http://localhost/legalmart/escritorio/';
  public static $PORTAL_FOLDER = 'http://localhost/legalmart/acrecompras/';
  public static $TITULOSISTEMA = 'LEGAL MARTE';
  public static $FAVICONSISTEMA = 'http://localhost/legalmart/acrecompras/upload/favicon.png';
  public static $LOGO_DASHBOARD = 'http://localhost/legalmart/acrecompras/tema/img/logo-gestor-de-cargos.svg';
  public static $CSS_FOLDER = 'http://localhost/legalmart/acrecompras/assets/css/';
  public static $IMG_FOLDER = 'http://localhost/legalmart/acrecompras/assets/img/';
  public static $JS_FOLDER = 'http://localhost/legalmart/acrecompras/assets/js/';
  public static $FONTS_FOLDER = 'http://localhost/legalmart/acrecompras/assets/fontes/';
  public static $PLUGINS_FOLDER = 'http://localhost/legalmart/acrecompras/assets/plugins/';
  public static $UTILS_FOLDER = 'http://localhost/legalmart/acrecompras/utils/';
  public static $ASSETS_FOLDER = 'http://localhost/legalmart/acrecompras/assets/';
  public static $PORTAL_URL_SERVIDOR = 'http://localhost/legalmart/acrecompras/Aplicativos/MAMP/htdocs/legalmart/';
  
  // CONFIGURACAO DE ENVIO DE E-MAIL
  public static $EMAIL_NOME = '';
  public static $EMAIL_ENDERECO = '';
  public static $URL_ENDERECO = '';
  public static $EMAIL_TITULO = '';
  public static $EMAIL_DESENVOLVIMENTO = '';
}

// ADICIONAR CLASSE DE CONEÇÃO
// include_once("acrecompras/conn/Conexao.class.php");
// include_once("acrecompras/dao/generico/funcoes.php");

?>

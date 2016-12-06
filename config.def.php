<?php
/**
 * @author Leandro S. Correa
 * @version 1.2
 * /

/*
 * DEBUG METODO [ Debug ]
 * define se o sistema esta em debug
 */
define('DEBUG', FALSE);

######################################
#   CONFIGURACOES GERAL              #
######################################

define("BASE", "http://" . $_SERVER['HTTP_HOST']); 	# DEFINE URL PADRAO
define("RAIZ", $_SERVER['DOCUMENT_ROOT']); 			# DEFINE PASTA RAIZ
define("PATHRAIZ", dirname(__DIR__) . "/"); 		# DEFINE PASTA BASE
define("PATHCLASS", dirname(__DIR__) . "/class"); 	# DEFINE PASTA CLASS
define("PATHCSS", dirname(__DIR__) . "/css"); 		# DEFINE PASTA CSS
define("PATHJS", dirname(__DIR__) . "/js"); 		# DEFINE PASTA JS
define("PATHAPP", dirname(__DIR__) . "/app"); 		# DEFINE PASTA APP

######################################
#   CONFIGURACOES DO BANCO DE DADOS  #
######################################
define('HOST', 'localhost');
define('SDBA', 'banco');
define('DRIVER', 'mysql');
define('PORT', '3306');
define('USER', 'root');
define('PASS', '');


######################################
#   CONFIGURACOES DO BANCO DE DADOS  #
######################################
define("EMAIL", 'seuemail@servidor.com');
define("SMTP", 'mail.servidor.com');

# IMPORTANTE!
require_once ('autoload.php');
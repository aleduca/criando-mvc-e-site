<?php

/**
 * Pegar a url
 */
$url = \Acme\Classes\Url::getUrl();

/**
 * carregar o template
 */
$template = new \Acme\Classes\LoadTemplate();
$twig = $template->init();

/**
 * carregar funcoes do twig
 */
$twig->addFunction( $str_limit );
$twig->addFunction( $site_url );

$twig->addGlobal( "session", $_SESSION );


/**
 * definir o timezone do projeto
 */
$twig->getExtension('core')->setTimeZone('America/Sao_Paulo');
$twig->getExtension('core')->setDateFormat('d/m/Y');

/**
 * Chamar o basecontroller para pegar os controllers e metodos
 */
$baseController = new \App\Controllers\BaseController();
$baseController->setUrl( $url );

/**
 * Aqui pega os controllers
 */

$controller = $baseController->pegarController();
$classController = new $controller();
$classController->setTwig( $twig );

/**
 * Pegar o metodo
 */
$metodo = $baseController->pegarMetodo( $classController );
$classController->$metodo();
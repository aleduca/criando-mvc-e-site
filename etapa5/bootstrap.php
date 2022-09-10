<?php
/**
 * pegar url
 */

$url = \acme\classes\Url::getUrl();

/**
 * Carregando o template
 */
$template = new \acme\classes\LoadTemplate();
$twig = $template->init();

/**
 * Carrega as funcoes personalizadas do twig
 */
$twig->addFunction($siteUrl);
$twig->addFunction($str_limit);

$twig->getExtension('core')->setTimeZone('America/Sao_Paulo');
$twig->getExtension('core')->setDateFormat('d/m/Y');

/**
 *Chamar basecontroller para pegar os controllers e metodos
 */
$baseController = new \app\controllers\BaseController();
$baseController->setUrl($url);

/**
 * Aqui pega os controllers
 */
$controller = $baseController->pegarController();
$classController = new $controller();
$classController->setTwig( $twig );

/**
 * Aqui pega os metodos
 */
$metodo = $baseController->pegarMetodo( $classController );
$classController->$metodo();
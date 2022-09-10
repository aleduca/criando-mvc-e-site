<?php namespace app\controllers\site;

use \acme\classes\Parameters as parameter;

class NoticiaController extends \app\controllers\BaseController{

    public function index(){
        $parameter = parameter::getParameter(1);
        $dados=[ 
            'titulo' => 'MVC AWB | Notícia'
         ];

        $template = $this->twig->loadTemplate('noticia.html');
        $template->display($dados);
    }

  

}
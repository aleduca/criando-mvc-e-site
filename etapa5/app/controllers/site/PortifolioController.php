<?php namespace app\controllers\site;

use \acme\classes\Redirect as Redirect;

class PortifolioController extends \app\controllers\BaseController{

    public function index(){

        $dados=[ 
            'titulo' => 'MVC AWB | Portifolio'
         ];

        $template = $this->twig->loadTemplate('portifolio.html');
        $template->display($dados);
    }

}
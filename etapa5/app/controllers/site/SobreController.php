<?php namespace app\controllers\site;

class SobreController extends \app\controllers\BaseController{

    public function index(){
        
        $dados=[ 
            'titulo' => 'MVC AWB | Sobre'
         ];

        $template = $this->twig->loadTemplate('sobre.html');
        $template->display($dados);
    }

}

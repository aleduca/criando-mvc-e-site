<?php namespace app\controllers\site;

class ServicoController extends \app\controllers\BaseController{

    public function index(){

        $dados=[ 
            'titulo' => 'MVC AWB | Servico'
         ];

        $template = $this->twig->loadTemplate('servico.html');
        $template->display($dados);
    }

}
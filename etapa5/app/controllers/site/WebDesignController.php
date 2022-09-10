<?php namespace app\controllers\site;

class WebDesignController extends \app\controllers\BaseController{

    public function index(){

        $dados=[ 
            'titulo' => 'MVC AWB | Web Design'
         ];

        $template = $this->twig->loadTemplate('web.html');
        $template->display($dados);
    }

    public function vantagens(){
        
        $dados=[ 
            'titulo' => 'MVC AWB | Vantagens Webdesign'
         ];

        $template = $this->twig->loadTemplate('vantagens.html');
        $template->display($dados);
    }

}
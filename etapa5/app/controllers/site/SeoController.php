<?php namespace app\controllers\site;

class SeoController extends \app\controllers\BaseController{

    public function index(){

        $dados=[ 
            'titulo' => 'MVC AWB | SEO'
         ];

        $template = $this->twig->loadTemplate('seo.html');
        $template->display($dados);
    }

    public function vantagens(){
        $dados=[ 
            'titulo' => 'MVC AWB | Vantagens SEO'
         ];

        $template = $this->twig->loadTemplate('vantagens.html');
        $template->display($dados);
    }

}
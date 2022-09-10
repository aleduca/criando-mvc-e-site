<?php
namespace App\Controllers\Site;

use \Acme\Classes\Parameters as parameter;
use \App\Controllers\BaseController;
use \App\Models\Site\NoticiaModel as noticia;

class NoticiaController extends BaseController{

    public function index(){

        $slug = parameter::getParameter( 2 );

        $noticia = noticia::where( 'tb_noticia_slug', $slug );

        $dados=[ 
            'titulo' => 'MVC AWB | Notícia',
            'noticia' => $noticia
         ];

        $template = $this->twig->loadTemplate('Site/noticia.html');
        $template->display($dados);


    }


}
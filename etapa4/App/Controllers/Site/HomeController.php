<?php

namespace App\Controllers\Site;
use \App\Controllers\BaseController;
use \App\Models\Site\EspecialidadeModel as especialidade;
use \App\Models\Site\NoticiaModel as noticia;

class HomeController extends BaseController{

    public function index(){

        $especialidades = especialidade::listar( 4 );

        $noticias = noticia::listar( 4 );

        $dados = [

            'titulo' => 'MVC AWB | Home',
            'especialidades' => $especialidades,
            'noticias' => $noticias

        ];

        $template = $this->twig->loadTemplate( 'Site/home.html' );
        $template->display( $dados );


    }

}

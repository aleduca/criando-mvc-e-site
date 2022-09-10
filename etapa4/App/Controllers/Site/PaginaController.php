<?php

namespace App\Controllers\Site;

use \App\Controllers\BaseController;


class PaginaController extends BaseController{


    public function sobre(){

        $dados = [
            'titulo' => 'Sobre a empresa'
        ];

       $template = $this->twig->loadTemplate( '/Site/sobre.html' );
       $template->display( $dados );

    }

    public function seo(){

        $dados = [
            'titulo' => 'Seo'
        ];

       $template = $this->twig->loadTemplate( '/Site/seo.html' );
       $template->display( $dados );

    }


    public function webdesign(){

        $dados = [
            'titulo' => 'Webdesign'
        ];

       $template = $this->twig->loadTemplate( '/Site/webdesign.html' );
       $template->display( $dados );

    }

    public function desenvolvimento(){

        $dados = [
            'titulo' => 'Desenvolvimento web'
        ];

       $template = $this->twig->loadTemplate( '/Site/desenvolvimento.html' );
       $template->display( $dados );

    }

    public function servicos(){

        $dados = [
            'titulo' => 'Serviços'
        ];


    }

    public function contato(){

        $dados = [
            'titulo' => 'Contato'
        ];

       $template = $this->twig->loadTemplate( '/Site/contato.html' );
       $template->display( $dados );

    }

}
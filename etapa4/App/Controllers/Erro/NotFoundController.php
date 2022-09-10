<?php

namespace App\Controllers\Erro;
use \App\Controllers\BaseController as BaseController;

class NotFoundController extends BaseController{

    public function index(){

        $dados = [ 'titulo' => 'Erro404' ];
        $template = $this->twig->loadTemplate( 'Erro/erro404.html' );
        $template->display( $dados );

    }

}
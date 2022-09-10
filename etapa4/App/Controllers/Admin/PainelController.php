<?php

namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;
use \App\Models\Admin\AdminModel as Admin;

class PainelController extends BaseController{

    use \Acme\Traits\LoginTrait;

    public function index(){

        self::estaLogado( 'logadoAdmin', 'admin' );

        $dados = [ 'titulo' => 'Painel Administrativo' ];
        $template = $this->twig->loadTemplate( 'Admin/Painel/painel.html' );
        $template->display( $dados );

    }

    

}
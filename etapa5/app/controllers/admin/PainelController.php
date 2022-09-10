<?php namespace app\controllers\admin;
use \acme\classes\Auth as auth;

class PainelController{

    public function __construct( $twig ){
        $this->twig = $twig;
    }

    public function index(){

        $dados=[ 
            'titulo' => 'MVC AWB | Admin',
            'user' => auth::user()->tb_administrador_nome
         ];

        $template = $this->twig->loadTemplate('admin/painel/painel.html');
        $template->display($dados);
    }

}
<?php namespace app\controllers\site;

class HomeController extends \app\controllers\BaseController{

    public function index(){

        /**
         * Listar as especialidades do site
         */
        $especialidades = \app\models\site\EspecialidadeModel::find('all');

        $dados=[ 
            'titulo' => 'MVC AWB | Home',
            'especialidades' => $especialidades
         ];

        $template = $this->twig->loadTemplate('home.html');
        $template->display($dados);
    }

}
<?php namespace app\controllers\site;

class BuscaController extends \app\controllers\BaseController{

    /**
     * Busca com GET
     * @return [type] [description]
     */
    public function index(){

        $buscaFilter = filter_var($_GET['busca'], FILTER_SANITIZE_STRING);

        $resultadoBusca = \app\models\site\EspecialidadeModel::buscaEspecialidade( $buscaFilter );

        $dados=[ 
            'titulo' => 'MVC AWB | Busca',
            'resultadoBusca' => $resultadoBusca,
            'palavraBuscada' => $buscaFilter
         ];

        $template = $this->twig->loadTemplate('busca.html');
        $template->display($dados);
    }

    /**
     * Busca com POST
     * @return [type] [description]
     */
    public function buscar(){

        $dados=[ 
            'titulo' => 'MVC AWB | Busca'
         ];

        $buscaFilter = filter_var($_POST['busca'], FILTER_SANITIZE_STRING);

        $resultadoBusca = \app\models\site\EspecialidadeModel::buscaEspecialidade( $buscaFilter );

        var_dump( $resultadoBusca );

        $template = $this->twig->loadTemplate('busca.html');
        $template->display($dados);
    }

}
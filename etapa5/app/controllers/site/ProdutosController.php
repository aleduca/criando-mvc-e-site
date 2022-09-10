<?php namespace app\controllers\site;

class ProdutosController extends \app\controllers\BaseController {

    public function index(){
        echo 'pagina de produtos';
    }

    public function mostrar(){
        $parameter = getParameter(3);
        
    }

}

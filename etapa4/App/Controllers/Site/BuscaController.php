<?php

namespace App\Controllers\Site;

use \App\Controllers\BaseController;
use \App\Models\Site\NoticiaModel as noticia;
use \Acme\Classes\Sanitize;
use \Acme\Classes\Redirect;
use \Acme\Classes\Pagination;

class BuscaController extends BaseController{

     public function buscar(){

        if( $_SERVER['REQUEST_METHOD'] == 'GET' ){

            $buscaFilter = Sanitize::string( $_GET['busca'] );

            $busca = noticia::buscaNoticia( $buscaFilter );

            $page = isset( $_GET['page'] ) ? Sanitize::int( $_GET['page'] ) : 1;

            $pagination = new Pagination( $busca )  ;
            $pagination->perPage( 2 );
            $pagination->currentPage( $page );  
            $links = $pagination->view( 'Bootstrap' );
            $resultadoBusca = $pagination->paginate();

            $dados = [

                'titulo' => "Busca | $buscaFilter",
                'resultadoBusca' => $resultadoBusca,
                'palavraBuscada' => $buscaFilter,
                'links' => $links

            ];

            $template = $this->twig->loadTemplate('Site/busca.html');
            $template->display($dados);

        }else{

            Redirect::to( 'notFound' );

        }




    }

}
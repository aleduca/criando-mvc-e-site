<?php
namespace Acme\Classes;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Pagerfanta\View\DefaultView;
use Pagerfanta\View\TwitterBootstrap3View;
use Pagerfanta\View\OptionableView;
use Acme\Classes\Url;

class Pagination{

    private $pagerfanta;
    private $routeGenerator;
    private $view;
    private $query;

    public function __construct( $data ){

        $adapter = new ArrayAdapter( $data );
        $this->pagerfanta = new Pagerfanta( $adapter );
        $this->query = Url::getAllUri();


    }

    public function perPage( $perpage ){

        $this->pagerfanta->setMaxPerPage( $perpage );
        $this->pagerfanta->getMaxPerPage();

    }


    public function currentPage( $page ){

        $this->pagerfanta->setCurrentPage( $page );
        $this->pagerfanta->getCurrentPage();

    }

    private function route(){

            /**
             * http://localhost:8888/busca/buscar?busca=teste+4&page=2
             *
             * 30
             */
            
            if( isset( $_GET['page'] ) ){

                $posicaoPage = strpos( $this->query, 'page' );
                $stringUrl = substr( $this->query, 0, $posicaoPage );

                $pagina = $stringUrl;

            }else{

                $pagina = ( substr_count( $this->query, '?' ) == 1 ) ? $this->query.'&' : $this->query.'?';

            }

            $this->routeGenerator = function( $page ) use( $pagina ){

                return $pagina."page=$page";

            };


    }

    public function view( $tipo ){

        $this->route();

        switch ( $tipo ) {
            case 'Default':
                $this->view = new DefaultView();
                break;
            
            case 'Bootstrap':
                $this->view = new TwitterBootstrap3View();
                break;
        }

        $options = [ 'proximity' => 3 ];
        $links = $this->view->render( $this->pagerfanta, $this->routeGenerator, $options );

        return $links;

    } 

    public function paginate(){

        return $this->pagerfanta->getCurrentPageResults();

    }


}
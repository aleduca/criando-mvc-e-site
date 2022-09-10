<?php

namespace App\Controllers;
use App\Core\CoreController as CoreController;
use \Acme\Classes\Redirect;

class BaseController extends CoreController{

    private $controller;
    private $folders = ['Admin','Site'];
    protected $twig;

    public function setTwig( $twig ){
        $this->twig = $twig;
    }

    public function pegarController(){

        $this->controller = ucfirst( $this->controller()['controller'] ).'Controller';  

        foreach( $this->folders as $folder ){

            if( class_exists( "\\App\\Controllers\\".$folder."\\".$this->controller ) ){
                return "\\App\\Controllers\\".$folder."\\".$this->controller;
            }
                
        }  

         return "\\App\\Controllers\\Erro\\NotFoundController";

    }

    private function methodExist( $object, $metodo ){

         if( method_exists( $object, $metodo ) ){

                return $this->controller = $metodo;

            }else{

                Redirect::to( 'notFound' );

            }

    }


    public function pegarMetodo( $object ){

        if( empty( $this->controller()['metodo'] ) ){

              return $this->methodExist( $object, 'index' );

        }else{

            if( method_exists($object, $this->controller()['metodo']) ){

                return $this->controller = $this->controller()['metodo'];

            }else{

               return $this->methodExist( $object, 'index' );
                
            }
        }

    }

}
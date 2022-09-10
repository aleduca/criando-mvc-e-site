<?php namespace app\controllers;

class BaseController extends \app\core\CoreController{

    private $controller;
    private $folders = ['site','admin'];
    protected $twig;

    public function setTwig( $twig ){
        $this->twig = $twig;
    }

    public function pegarController(){

        $this->controller = ucfirst($this->controller()['controller']).'Controller';

        foreach ($this->folders as $folder) {
            if(class_exists("\\app\\controllers\\".$folder."\\".$this->controller)){
                return "\\app\controllers\\".$folder."\\".$this->controller;
            }
        }
        return "\\app\\controllers\\erro\\NotFoundController";
    }

    public function pegarMetodo( $object ){

        if( isset( $this->controller()['metodo'] ) AND method_exists($object, $this->controller()['metodo'])){
             return $this->controller = $this->controller()['metodo'];
        }else{
            return 'index';
        }
        
    }

}

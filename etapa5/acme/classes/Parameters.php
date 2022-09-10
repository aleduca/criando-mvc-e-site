<?php namespace acme\classes;

use \acme\classes\Url as url;

class Parameters{

    public static function getParameter( $numeroIndex ){
        $explodeUrl = explode('/',url::getUrl());
        return $explodeUrl[$numeroIndex];
    }

}
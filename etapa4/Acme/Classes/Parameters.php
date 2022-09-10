<?php

namespace Acme\Classes;
use \Acme\Classes\Url as Url;
use \Acme\Classes\Redirect;

class Parameters{

    public static function getParameter( $numeroIndex ){

        $explodeUrl = explode( '/', URL::getUrl() );

        if( empty( $explodeUrl[ $numeroIndex ] ) ){

            Redirect::to( 'notFound' );

        }

        return $explodeUrl[ $numeroIndex ];

    }

}
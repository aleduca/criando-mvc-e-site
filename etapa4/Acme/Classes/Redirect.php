<?php

namespace Acme\Classes;

class Redirect{

    public static function to( $location = null ){

        $redirect = ( $location != null ) ? $location : 'home';

        return header( 'Location:http://'.$_SERVER['HTTP_HOST'].'/'.$redirect );
    }

}
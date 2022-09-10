<?php

namespace acme\classes;

class Auth {


    public static function user(){

        if( isset( $_SESSION['logadoAdmin'] ) ){
            return unserialize($_SESSION['dadosAdministrador']);
        }

    }
 
}
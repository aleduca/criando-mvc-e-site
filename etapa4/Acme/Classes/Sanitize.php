<?php

namespace Acme\Classes;

class Sanitize{


    public static function string( $valor ){

        return filter_var( trim( $valor ), FILTER_SANITIZE_STRING );

    }

    public static function email( $valor ){

       return filter_var( trim( $valor ), FILTER_SANITIZE_EMAIL );     

    }


    public static function int( $valor ){

        return filter_var( trim( $valor ), FILTER_SANITIZE_NUMBER_INT );
            
    }


    public static function specialChars( $valor){

        return filter_var( trim( $valor ), FILTER_SANITIZE_FULL_SPECIAL_CHARS );
            
    }



}
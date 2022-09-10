<?php namespace acme\classes;

class Redirect{

    public static function to( $location=null ){

        return header('Location:http://'.$_SERVER['HTTP_HOST'].'/'.$location);
    }

}
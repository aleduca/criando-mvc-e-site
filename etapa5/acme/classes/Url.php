<?php namespace acme\classes;

class Url{

    public static function getUrl(){
        //return  (!isset($_GET['p'])) ? '' : $_GET['p'];
        return  $_SERVER['REQUEST_URI'];
    }

}
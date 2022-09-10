<?php

namespace Acme\Classes;

class AddSlashUrl{

    public function addSlash(){
        if( $_SERVER['REQUEST_URI'] != '/' ){
            return $_SERVER['REQUEST_URI'].'/';
        }
    }

}
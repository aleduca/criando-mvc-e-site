<?php namespace acme\classes;

class AddSlashUrl{

    private $url;

    public function __construct( $url ){
        $this->url = $url;
    }

    public function addSlash(){
        if($_SERVER['REQUEST_URI'] != '/'){
            return $this->url.'/';
        }
    }

}
<?php

use Illuminate\Support\Str;

$str_limit = new \Twig_SimpleFunction( 'str_limit', function( $value, $limit = 50, $end = '...' ){

    return Str::limit( $value, $limit, $end );

});

$site_url = new \Twig_SimpleFunction('site_url', function(){
    return 'http://'.$_SERVER['SERVER_NAME'].':8888';
});
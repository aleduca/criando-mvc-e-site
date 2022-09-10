<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

//funcoes usadas pelo twig
$siteUrl = new \Twig_SimpleFunction('site_url', function(){
    return 'http://'.$_SERVER['SERVER_NAME'].':8888';
});

$str_limit = new \Twig_SimpleFunction('str_limit', function($value, $limit = 100, $end = '...'){
        return Str::limit($value, $limit, $end);
});
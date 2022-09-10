<?php

if(!function_exists('site_url')){
    function site_url(){
        return 'http://'.$_SERVER['SERVER_NAME'].':8888';
    }
}
<?php

namespace App\Models\Site;

class NoticiaModel extends \App\Models\appModel{

    static $table_name = 'tb_noticia';

    public static function buscaNoticia( $noticia ){

       return parent::find( 'all', [ 'conditions' =>  [ "tb_noticia_texto LIKE CONCAT( '%', ? , '%' ) or tb_noticia_titulo LIKE CONCAT( '%', ? , '%' )", $noticia, $noticia ]] );

    }

}
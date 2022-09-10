<?php namespace app\models\site;

class EspecialidadeModel extends \ActiveRecord\Model{
    static $table_name = 'tb_especialidade';


    public static function buscaEspecialidade( $busca ){
        return parent::find('all', ['conditions' => "tb_especialidade_nome LIKE '%$busca%'" ]);
    }

}
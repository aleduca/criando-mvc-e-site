<?php

namespace App\Models;

class appModel extends \ActiveRecord\Model{


    public static function listar( $limite = null, $order = null ){

        if( $limite != null ){

            return parent::find('all', [ 'select' => '*', 'limit' => $limite, 'order' => $order ]);

        }

        return parent::find('all', [ 'order' => $order ]);

    }

    public static function atualizar( $id, Array $attributes ){

        $atualizar = parent::find( $id );
        $atualizar->update_attributes( $attributes );

    }

    public static function cadastrar( Array $attributes ){

        return parent::create( $attributes );

    }

    public static function deletar( $id ){

        $deletar = parent::find( $id );
        return $deletar->delete();

    }

    public static function where( $campo, $valor, $tipo = null, $order = null ){

        $tiposListagem = ( $tipo == null ) ? 'first' : 'all';
        return parent::find( $tiposListagem, [ 'order' => $order, 'conditions' => [ $campo.'=?', $valor ] ] );

    }

}

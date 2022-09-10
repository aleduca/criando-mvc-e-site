<?php

class Pessoa{

    public $nome = 'Alexandre Cardoso';

    public static function dadosPessoa(){
        return $this->nome;
    }

}

echo Pessoa::dadosPessoa();
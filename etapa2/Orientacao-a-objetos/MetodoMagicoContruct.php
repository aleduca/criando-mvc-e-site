<?php

class Pessoa{

    public $nome = 'Alexandre Cardoso';

    public function __construct(){
        echo 'Meu nome e '.$this->nome;
    }

    public function meusDados(){
        return 'meus dados';
    }

}
$pessoa = new Pessoa( 'Alexandre' );
//echo $pessoa->meusDados();
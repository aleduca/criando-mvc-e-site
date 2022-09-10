<?php

class Pessoa{

    /**
     * Atributo sao as variaveis
     */
    public $nome;
    public $idade;

    /**
     * Metodos sao as funcoes
     */
    
    public function meusDados(){
        return 'Meu nome e ALEXANDRE';
    }

    public function dadosPessoa(){
        return $this->meusDados();
    }

}

/**
 * Instanciar classe
 */
$pessoa = new Pessoa();
echo $pessoa->dadosPessoa();
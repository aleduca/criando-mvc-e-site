<?php

//Public - É o menos seguro e visível em todos os lugares.
//Protected - Segurança média, visivel na propria classe e na classe que a herdou
//Private  - Nivel maximo de segurança, visto somente dentro da própria classe

abstract class Crud{
    
    private function cadastrar(){
        return 'cadastrar dentro do crud';
    }

    public function cadastrar2(){
        return $this->cadastrar();
    }

}

class UserModel extends Crud{

    public function cadastrarUser(){
        return $this->cadastrar();
    }

}

$user = new UserModel();
echo $user->cadastrar2();
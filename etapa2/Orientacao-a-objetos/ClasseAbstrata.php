<?php

//Classe abstrata nao pode ser instanciada, somente herdada
//Models sao as classe para trabalhar com o banco de dados

abstract class Crud{

    public function cadastrar(){
        return 'Alexandre';
    }

}

class UserModel extends Crud{

}

//$crud = new Crud();
$user = new UserModel();
echo $user->nome();
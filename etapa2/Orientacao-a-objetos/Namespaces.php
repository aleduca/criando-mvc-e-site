<?php

namespace app\models\site;

class UserModel{

    public function cadastrar(){
        return 'Cadastrar com namespace no site';
    }

}

namespace app\models\admin;

class UserModel{
    public function cadastrar(){
        return 'Cadastrar com namespace no admin';
    }
}

use app\models\site\UserModel as user;
use app\models\admin\UserModel as userAdmin;

$user = new user();
echo $user->cadastrar();

echo '<br />';

$userAdmin = new userAdmin();
echo $userAdmin->cadastrar();
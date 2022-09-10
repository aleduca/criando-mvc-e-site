<?php

namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;
use \App\Models\Admin\AdminModel as Admin;
use \Acme\Classes\Redirect;
use \Acme\Classes\Hash;

class AdminController extends BaseController{

    use \Acme\Traits\LoginTrait;

    public function index(){

        unset( $_SESSION['erro'] );

        $dados = [ 'titulo' => 'Login do Administrador' ];
        $template = $this->twig->loadTemplate( 'Admin/login.html' );
        $template->display( $dados );

    }

    public function logar(){

        if( $_SERVER['REQUEST_METHOD'] == 'POST' ):

            $this->setDb( new Admin() );

        /**
         * Tratar os campos input do form
         */
        $email = filter_var( $_POST['email'], FILTER_SANITIZE_STRING );
        $senha = filter_var( $_POST['senha'], FILTER_SANITIZE_STRING );


        $dadosAuth = Admin::where( 'tb_administrador_email', $email );

        if( count( $dadosAuth ) == 0 ){

            $_SESSION['erro'] = 'Usuário ou senha inválidos !!';
            Redirect::to('admin');

        }else{

            $senhaEncriptada = Hash::criarSenha( $senha, $dadosAuth->tb_administrador_senha_salt );

            if( Hash::verificarSenha( $senha, $dadosAuth->tb_administrador_senha ) ){

                $this->setCampos( [ ' tb_administrador_email', 'tb_administrador_senha' ] );

                $dadosAdministradorLogado = $this->logarSistema( $email, $senhaEncriptada );

                if( count( $dadosAdministradorLogado ) > 0 ){

                    session_regenerate_id();
                    $_SESSION['logadoAdmin'] = true;
                    $_SESSION['idAdmin'] = $dadosAdministradorLogado->id;
                    $_SESSION['dadosAdministrador'] = serialize( $dadosAdministradorLogado );

                    Redirect::to('painel');

                }else{

                    $_SESSION['erro'] = 'Usuário ou senha inválidos !!';
                    Redirect::to('admin');

                }

            }else{

                $_SESSION['erro'] = 'Usuário ou senha inválidos !!';
                Redirect::to('admin');

            }


        }

        else:

            $this->index();

        endif;

    }

}
<?php namespace app\controllers\admin;

use \app\models\admin\AdminModel as Admin;
use \acme\classes\Redirect as Redirect;

class AdminController{

    private $twig;

    use \acme\traits\LoginTrait;

    public function __construct( $twig ){
        $this->twig = $twig;
    }

    public function index(){
     
        $dados=[ 
            'titulo' => 'MVC AWB | Admin'
         ];

        $template = $this->twig->loadTemplate('admin/login.html');
        $template->display($dados);
    }

    public function auth(){
       
        $this->setDb( new Admin() );
        $this->setCampos(['tb_administrador_email','tb_administrador_senha']);
        
        $dadosAdministradorLogado = $this->logar($_POST['email'],$_POST['senha']);
        
        if( $dadosAdministradorLogado ){
            session_regenerate_id();

            $_SESSION['logadoAdmin'] = true;
            $_SESSION['idAdmin'] = $dadosAdministradorLogado->id;
            $_SESSION['dadosAdministrador'] = serialize($dadosAdministradorLogado);
           
            $dados = [
                'titulo' => 'Painel Administrativo'
            ];

            Redirect::to('painel');
        }else{
            $template = $this->twig->loadTemplate('admin/login.html');
            $template->display(
                [ 
                    'titulo' => 'MVC AWB | Admin',
                    'mensagem' => '<div class="text-danger"> 
                                   <span class="glyphicon glyphicon-remove">
                                   </span> Erro ao logar, tente novamente!!
                                   </div>' 
                ]
            );
        }
    }

}
<?php namespace app\controllers\site;

use \acme\classes\Redirect;
use \acme\classes\Csrf;

class ContatoController extends \app\controllers\BaseController{

    public function index(){

        $csrf = new Csrf();
        $token = $csrf->gerarToken();

        $dados=[ 
            'titulo' => 'MVC AWB | Contato',
            'token' => $token
         ];

        $template = $this->twig->loadTemplate('contato.html');
        $template->display($dados);
    }

    public function enviar(){

        $nome = filter_var($_POST['nome'],FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
        $mensagem = filter_var($_POST['mensagem'],FILTER_SANITIZE_STRING);
        $token = filter_var($_POST['token'],FILTER_SANITIZE_STRING);

        $csrf = new Csrf();

        if( !$csrf->verificarToken( $token ) ){

            Redirect::to('notFound');

        }

        $enviarEmail = new \acme\classes\Email();
        $enviarEmail->setAssunto('Contato MVC');
        $enviarEmail->setQuem('MVC AWB');
        $enviarEmail->setPara($email); //pegar email do reorno do pagseguro
        $mensagem = '<h2>Contato do site enviado por '.$nome.'</h2>';
        $mensagem.='<p>E-mail enviado pelo site, para responder o e-mail da pessoa é '.$email.'<br />';
        $enviarEmail->setBody($mensagem);
        
        if( $enviarEmail->enviar_email() ){  
            $dados = [ 'mensagem' => '<div>Enviado com sucesso !!</div>' ];
            $template = $this->twig->loadTemplate('contato.html');
            $template->display($dados);
        }

    }

}
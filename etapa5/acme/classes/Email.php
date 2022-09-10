<?php

namespace acme\classes;

class Email extends \PHPMailer {

    private $email;
    private $body;
    private $quem;
    private $para;
    private $copia;
    private $assunto;
    private $headers;
    private $mensagem;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function getQuem() {
        return $this->quem;
    }

    public function setQuem($quem) {
        $this->quem = $quem;
    }

    public function getPara() {
        return $this->para;
    }

    public function setPara($para) {
        $this->para = $para;
    }

    public function getCopia() {
        return $this->copia;
    }

    public function setCopia($copia) {
        $this->copia = $copia;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    public function emailFormatado($titulo,$nome,$sobrenome,$email,$senha) {

        // Este sempre deverá existir para garantir a exibição correta dos caracteres
        $this->headers = "MIME-Version: 1.1\n";

        // Para enviar o e-mail em formato HTML com codificação de caracteres Unicode (Usado em todos os países)
        $this->headers .= "Content-type: text/html; charset=utf-8\n";

        // Remetente da mensagem
        $this->headers .= "From: ScreenPlus<contato@screenplus.com.br>\r\n";

        // Corpo da mensagem
        $this->mensagem = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                            <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                <title>'.$titulo.'</title>
                            </head>';
            $this->mensagem.= '<body style="background:#E9ECEF; margin:0; padding:0;">
                            <div id="box" style="width:100%;">
                                <div id="box-header" style="background:#265799; overflow:hidden; padding:15px;">
                                    <div style="float:left; font:20px Trebuchet MS, Arial, Helvetica, sans-serif; color:#FFF; font-weight:bold; text-align:right;">
                                        Screenplus<br /><span style="font:12px Arial, Helvetica, sans-serif;">Video aulas de programação web</span>
                                    </div>
                                    <div style="float:right; font:20px Trebuchet MS, Arial, Helvetica, sans-serif; color:#FFF; font-weight:bold; margin:10px 0 0 0;">19/11/2013 18:29</div>
                          </div>';          
            $this->mensagem.=' <div id="box-content" style="background:#FFF; padding:10px; font:16px Trebuchet MS, Arial, Helvetica, sans-serif; color:#333; line-height:150%;">
                                <h1 style="font-size:30px; color:#000; background:#F4F4F4; padding:20px;">Olá <strong style="color:#09F;">'.$nome.'</strong>!</h1>
                                <p>Estamos lhe informando que seu cadastro foi realizado com sucesso em nosso portal.</p>
                                <p>Muito Bem vindo ao Screenplus, '.$nome.'</p>
    
                                <p>Para sua segurança, estamos também enviando seus dados de acesso:</p>
                                <div style="background:#DFEFFF; padding:15px;">
                                    <p>Nome: <strong>'.$nome.'</strong></p>
                                    <p>Sobrenome: <strong>'.$sobrenome.'</strong></p>
                                    <p>E-mail (Este é seu login): <strong>'.$email.'</strong></p>
                                    <p>Senha: <strong>'.$senha.'</strong></p>
                                </div>
                                <p><strong>Parabéns e seja bem vindo!</strong></p>
                            </div>
                        </div>
                        <div style="width:100%; margin:20px 0; text-align:center; font-size:14px;"><pre>ESTE É UM E-MAIL AUTOMÁTICO DE NOSSO SISTEMA. POR FAVOR, NÃO RESPONDER.</pre></div>
                    </body>
                </html>';   
                return $this->mensagem;      
    }

    public function enviar_email() {
        $body = $this->getBody();
        $this->CharSet = "UTF-8";
        $this->SMTPSecure = "ssl";
        $this->IsSMTP();
        $this->Host = "br126.hostgator.com.br";
        $this->Port = 465;
        $this->SMTPAuth = true;
        $this->Username = "contato@screenplus.com.br";
        $this->Password = "contato2014!";
        $this->IsHTML(true);
        $this->SetFrom('contato@screenplus.com.br');
        $this->FromName = $this->getQuem();
        $this->AddAddress($this->getPara());
        $copia = $this->getCopia();
        if (!empty($copia)) :
            $this->AddAddress($copia);
        //enviar copia para
        endif;
        $this->Subject = $this->getAssunto();
        $this->AltBody = "Para ver esse email tenha certeza de estar vendo em um programa que aceite ver html";
        // optional, comment out and test
        $this->MsgHTML($body);

        if (!$this->Send()) {
            return false;
        } else {
            return true;
        }
    }
}

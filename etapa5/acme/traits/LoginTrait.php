<?php

namespace acme\traits;

trait LoginTrait{

    private $campos;
    private $campo;
    private $sqlCampo;
    private $db;

    public function setCampos($campos){
        $this->campos = $campos;
    }

    public function getCampos(){
        return $this->campos;
    }

    public function setDb( $db ){
        $this->db = $db;
    }

    public function logar($email,$senha){

        foreach($this->getCampos() as $campo):
            $this->campo.= $campo.'=? and ';
        endforeach; 

        $this->sqlCampo = rtrim($this->campo,'and ');
        $dadosUserLogado = $this->db->find('first', array('conditions'=> array($this->sqlCampo,$email,$senha)));
        return $dadosUserLogado;

    }

    public static function deslogar($sessao){
        if(isset($_SESSION[$sessao])){
            unset($_SESSION[$sessao]);
            session_regenerate_id();
        }
    }

    public static function estaLogado(){
      
    }
}
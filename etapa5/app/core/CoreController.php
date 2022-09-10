<?php namespace app\core;

class CoreController{

    protected $url;
    
    public function setUrl($url){
        $this->url = $url;
    }

    /**
     * adicionar uma barra ao final da url
     */
    private function addSlash(){
         $urlSlash = new \acme\classes\AddSlashUrl( $this->url );
         return $urlSlash->addSlash();
    }

    /**
     * verifica o numero de segmentos na url e pega o controller e o metodo se existir
     */
    private function retornoControllerMetodo( Array $explodeUrl ){

        if(count( $explodeUrl ) <= 1){
            /**
             * tem somente um segmento na url pega somente o controller
             */
             return [ 'controller' => $explodeUrl[1] ];
             //mvc.com.br/controller
        }else{
            /**
             * se existir mais de um segmento pega o controller e o metodo
             */
            return [
                'controller' => $explodeUrl[1],
                'metodo' => $explodeUrl[2]
                //mvc.com.br/controller/metodo
            ];
        }
    }


    private function redirectMethodNotExist( Array $controller ){

        if( isset( $controller['metodo'] ) and empty( $controller['metodo'] ) ){

            \acme\classes\Redirect::to();

        }

    }

    /**
     * Pegar controller pela url
     * @param  [string] $url [GET]
     * @return [string] controller da url
     */
    protected function controller(){

        if(isset( $this->url )){
            /**
             * se o numero de barras for maior que zero(0)
             */
            if(substr_count( $this->addSlash( $this->url ), '/' ) > 0){

             $explodeUrl = explode( '/', $this->url );
             unset($explodeUrl[0]);
             $controller = $this->retornoControllerMetodo($explodeUrl);

             $this->redirectMethodNotExist( $controller ); 
             return $controller;

            }else{
               return ['controller' => DEFAULT_CONTROLLER ];
            }
        }else{
            return ['controller' => DEFAULT_CONTROLLER ];
        }

    }

}

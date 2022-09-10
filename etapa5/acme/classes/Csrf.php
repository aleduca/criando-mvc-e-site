<?php
namespace acme\classes;

class Csrf{

	private $token;

	public function gerarToken(){

		if( !isset( $_SESSION['token'] ) ){

			$_SESSION['token'] = md5( uniqid() );

		}else{

			unset( $_SESSION['token'] );
			$_SESSION['token'] = md5( uniqid() );


		}

		return $_SESSION['token'];

	}

	public function verificarToken( $tokenForm ){


		if( !isset( $tokenForm ) ){

			return false;

		}else{

			if( $tokenForm != $_SESSION['token'] ){

				return false;

			}

		}
		return true;

	}


}
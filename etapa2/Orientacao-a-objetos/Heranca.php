<?php
require 'Heranca1.php';
class Heranca extends Heranca1{
    
}

class Heranca3 extends Heranca1{

}

class Heranca4 extends Heranca1{

}

//$heranca = new Heranca();
//echo $heranca->listar( 'user' );

$heranca4 = new Heranca4();
echo $heranca4->deletar( '4' );
<?php 


$hora = '20:05';
$respuesta = '';


//if ($hora  >='15' && $hora<='20') {   
if(($hora  >='15') && ($hora<='20')) {    
	$respuesta = "Estamos en clase";

} else {
	$respuesta ="No estamos en clase de ETIF";
}
echo $respuesta;

 ?>


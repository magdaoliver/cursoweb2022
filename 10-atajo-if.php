<?php 

$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';   //este es igual que el condicional if else de a continuaci�n. La expresi�n es m�s corta.
$edad = false ? 3 : 5;   //dar�a 5
// if (isset($edad)) {
// 	$edad = $edad;
// } else {
// 	$edad = 'El usuario no establecio su edad';
// }                                                 

echo 'Edad: ' . $edad;

?>
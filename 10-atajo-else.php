<?php 

$mes = 'Junio';
$verdadero = true;
$dia = 'Martes';
$saludo = 'saludo';
$hora = '20:05';



// if ($verdadero) {
// 	echo "Verdadero";
// } else {
// 	echo "Falso";
// }

if ($mes == 'Diciembre') {
	echo "Feliz Navidad";
} else if($mes == 'Enero') {
	echo "Feliz A?o Nuevo";
} else if($mes == 'Junio') {
	echo "Bona revetlla";
} else if ($mes == 'Julio' or $mes == 'Agosto') {
	echo "Felices vacaciones";
//} else if ($mes == 'Julio') {
//	echo "Feliz Julio";
} else {
	echo "El mes no tiene celebracion";
}

// a continuación otra manera de hacer el script sin poner echo en cada condición.
//if ($mes == 'Diciembre') {
//	$saludo = "Feliz Navidad";
//} else if($mes == 'Enero') {
//	$saludo ="Feliz A?o Nuevo";
//} else if($mes == 'Junio') {
//	$saludo = "Bona revetlla";
//} else if ($mes == 'Julio' or $mes == 'Agosto') {
//	$saludo = "Felices vacaciones";
////} else if ($mes == 'Julio') {
////	echo "Feliz Julio";
//} else {
//	$saludo ="El mes no tiene celebracion";
//}
//echo $saludo;



 ?>


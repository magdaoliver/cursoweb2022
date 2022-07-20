<?php 

//function calcular_area_triangulo($base, $altura){
//	$resultado = ($base * $altura) / 2;
//	return $resultado;
//}
//
//$area_triangulo = calcular_area_triangulo(10, 10);
//
//echo 'El triangulo tiene un area de ' . $area_triangulo . ' //metros cuadrados';

//EJERCICIO: CREAR UNA FUNCIÓN PARA CALCULAR EL AREA DE UN HEXÁGONO DE FORMULA = (PERÍMETRO * APOTEMA)/2 Y EL PERÍMETRO ES IGUAL A UN LADO *6

function calcular_area_hexagono($perimetro, $apotema){
	$resultHex = ($perimetro * $apotema) / 2;
	return $resultHex;
}

$area_hexagono = calcular_area_hexagono(10, 5);

echo 'El hexagono regular tiene un area de ' . $area_hexagono . ' metros cuadrados';


?>
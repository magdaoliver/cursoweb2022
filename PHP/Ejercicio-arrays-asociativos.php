<?php 

# Los arrays asosiativos nos permiten acceder a sus valores de una forma mas expl�cita.

$profesor = array('nombre' => 'Marc', 'telefono' => 665533, 'edad' => 35, 'apellido' => 'Esteve', 'ciudad' => 'Castellefels');

# Igual que en los arrays indexados, en los asosiativos tambi�n podemos modificar sus valores simplemente accediendo a ellos.
$profesor['apellido'] = 'Esteve Garc�a';  // Si queremos llegar a 'Esteve', le daremos la clave 'apellido'

$profesor['ciudad'] = 'Torrelles de Foix';  // Aqu� le asignamos nuevo valor a la clave 'ciudad'
// Ejercicio 2 tablon: El tel�fono 665533 es de Marc que vive en Torrelles de Foix.
echo 'El telefono ' . $profesor['telefono'] . ' es de ' . $profesor['nombre'] . ' que vive en ' . $profesor['ciudad'] . '.'; 

// echo 'El nombre del profesor es ' . $profesor['nombre'] . ' ' . $profesor['apellido'] . ', su edad es ' . $profesor['edad'] . ', su tel�fono es el ' . $profesor['telefono'] . ' y imparte clases en ' . $profesor['ciudad'] . '. <br>';

/*$array = array(
    "1" => 3,
    "2" => "dsada",
    "1.5" => 1.5,
    "booleano" => true,
);
echo $array["1"] . '<br>';
echo $array["2"] . '<br>';
echo $array["1.5"] . '<br>';
echo $array["booleano"] . '<br>';
var_dump($array);
// Sintaxis corta
echo '<br><br>';
$otravaraiblearray = [
    "clave" => "valor1",
    "clave2" => "valor2",
];
var_dump($otravaraiblearray);

?>*/
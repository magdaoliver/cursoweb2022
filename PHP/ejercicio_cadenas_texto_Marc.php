<?php 

$texto3 = 'Adeu <br> <script>window.alert("Hola")</script> Andreu';
$texto ="Adeu Andreu";
// echo $texto;
// echo "<br>";
// echo htmlspecialchars($texto); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar c�digo fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar c�digo <b>Hola</b> o peor aun, c�digo Javascript que se pueda ejecutar
$nombre = " Marc  ";
// echo $nombre;
// echo "<br>";
// echo trim($nombre); //Quita los espacios al principio y al final
$string = "123456789";
// echo strlen($string); //Cuenta los caracteres totales del string
$saludo = "Hola bona tarda";
$tamany =strlen($saludo);
//echo substr($saludo, 5, $tamany); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
// echo $nombre;
// echo strtoupper($nombre); //Convierte a may�sculas
// echo strtolower($nombre); //Convierte a min�sculas
// echo $saludo;
//echo strpos($saludo, 'n'); //Posici�n del string
$valor = "roma ";
// echo $valor;
// echo strrev($valor);  //Invierte el texto
$nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
echo $nuevoTexto;

?>
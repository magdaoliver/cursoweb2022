<?php 

# Los arrays son como variables que nos permiten guardar multiples valores.

# Ejemplo de un arrays con los dias de la semana.
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# En los arrays podemos guardar cualquier tipo de dato, incluso podemos guardar un array dentro de otro. Se podria escribir el array ext conn corchetes y el interno con parentesis
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

# Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro array llamado semana.
echo $semana[0] . '<br />'; //Lunes
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';
echo '<hr>';
// Con el implode nos mostrarían todos con un separador de saltos de línea <br>
echo implode('<br>', $semana); // string $glue (pegamento del implode) ', '
echo '<hr>';   // aquí hay una línea horizontal
echo '<h2>Ejemplos campus</h2>';
$cars = array("Volvo","BMW","Toyota");
$coches = [1,2,3];
var_dump($coches);
echo "<br>";
var_dump($cars);
$cars[7] = "Opel";   // opel es el valor indexado en el 7
echo "<br>";
var_dump($cars);
echo "<br>";
echo $cars[3];
echo "<br>";
$variable[3]='Eva';
$variable[27]=123;
var_dump($variable);
$coches["modelo"]="Astra"; //Asociativo
echo "<br>";
var_dump($coches);
echo "<br>";
echo $coches[1];//El valor es 2
echo "<br>";
echo $coches["modelo"];//Warning pero da el valor "Astra"
?>
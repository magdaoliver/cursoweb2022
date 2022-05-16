<?php 

// NOTAS:
# Los nombres de las variables son sensibles a mayusculas y minisculas "Case-sensitive"
# Los nombres de variables no pueden llevar espacios, empezar por numeros o llevar caracteres especiales como puntos o incluso la letra ?

// TIPOS de datos:
# String: Cadena de texto (con " o ')
# Integer: Numeros enteros 
# Double: Numeros con decimales 
# Boolean: Verdadero o Falso (true / false)
# Array: "Arreglo"(ES_US) o Matriz 
# Object: Objeto (muy importantes en php)
# Class: Clase (muy importantes en php)
# Null: Cuando a una variable aun no se le ha asignado ningun valor

// Ejemplos de variables almacenando diferentes tipos de datos:

// String
$nombre = "Magda";

// Entero
$numero = 5;

// Boleano
$verdadero_falso = false;


/* 
Comillas Simples vs Comillas Dobles
En las comillas dobles podemos llamar variables, mientras que en las simples no.
Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.
*/

// echo 'Mi nombre es ' . $nombre;
// echo '<br>';

echo 'La variable $nombre es igual a tipo ' . gettype($nombre) . " y el valor es " . $nombre ;  // si sale en azul es que está cogiendo el valor de la variable. Si sale en naranja está cogiendo solo su nombre 
echo '<br>';

echo 'La variable $numero es igual a tipo ' . gettype($numero) . " y el valor es $numero";
echo '<br>';

echo 'La variable $verdadero_falso es igual a tipo '; echo gettype($verdadero_falso); echo " y el valor es " . $verdadero_falso;
echo '<br>';

// Para conocer el tipo de dato de una variable utilizamos la función gettype()
// echo gettype($nombre);
// echo gettype($numero);
// echo gettype($verdadero_falso);
?>
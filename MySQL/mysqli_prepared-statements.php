<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');   //si no es correcta se para el programa
} else {
	$statement = $conexion->prepare("INSERT INTO ejerciciocreate(ID, nombre, edad) VALUES(?, ?, ?)");  //tenemos 3? en los valores pq los estamos esperando, estamos PREPARANDO el INSERT INTO
	
	// Remplazamos los placeholder ? con los valores que queremos usar.
		// Una S por placeholder que tengamos.
		// s = string
		// i = integer
		// d = double
	$statement->bind_param('ssi', $id, $nombre, $edad);   //blind_parameter:'ssi' ser�a:string,string,integer que es el formato de los par�metros
	$id = NULL;

	// Comprobamos que hayamos pasado un nombre por URL
	if(isset($_GET['nombre']) && isset($_GET['edad'])){
		$nombre = $_GET['nombre'];
		$edad = $_GET['edad'];
	}

	// Ejecutamos la sentencia.
	$statement->execute();
	// echo 'Filas añadidas:' . $conexion->affected_rows;

	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;
	} else {
		echo 'No se agrego nada';
	}
}
<?php
$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');   //si no es correcta se para el programa
} else {
	$statement = $conexion->prepare("INSERT INTO usuarios(ID, Nombre) VALUES(?, ?)");  //tenemos 3? en los valores pq los estamos esperando, estamos PREPARANDO el INSERT INTO
	
	// Remplazamos los placeholder ? con los valores que queremos usar.
		// Una S por placeholder que tengamos.
		// s = string
		// i = integer
		// d = double
	$statement->bind_param('ss', $id, $nombre);   //bind_parameter:'ssi' sería:string,string,integer que es el formato de los parámetros
	$id = NULL;

	// Comprobamos que hayamos pasado un nombre por URL
	if(isset($_GET['Nombre'])){
		$nombre = $_GET['Nombre'];
	}

	// Ejecutamos la sentencia.
	$statement->execute();
	// echo 'Filas aÃ±adidas:' . $conexion->affected_rows;

	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;
	} else {
		echo 'No se agrego nada';
	}
}
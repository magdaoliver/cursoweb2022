<?php

$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "INSERT INTO usuarios(ID, nombre) VALUES(null, 'Oscar'),(null,'Jaime')";
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;
	}
}
?>
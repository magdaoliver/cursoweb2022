<?php
$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE `usuarios` SET `nombre` = 'Marcos' WHERE `usuarios`.`ID` = 3");

	// Ejecutamos la sentencia.
	$statement->execute();
	echo 'Se ha actualizado correctamente la BD'; 
}
?>
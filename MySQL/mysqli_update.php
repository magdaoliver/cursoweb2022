<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE `ejerciciocreate` SET `nombre` = 'Marcos', `edad` = '38' WHERE `ejerciciocreate`.`ID` = 1");

	// Ejecutamos la sentencia.
	$statement->execute();
	echo 'Se ha actualizado correctamente la BD'; 
}
?>
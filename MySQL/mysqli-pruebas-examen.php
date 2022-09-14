<?php
$conexion = new mysqli('localhost', 'root', '', 'pruebas_examen');

if ($conexion->connect_errno){    //si la conexión es errónea cierra el programa y sale lo que dice el die
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("CREATE TABLE `pruebas` ( `ID` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(100) NOT NULL , `edad` INT NOT NULL , PRIMARY KEY (`ID`))");   
	// Ejecutamos la sentencia.
	$statement->execute();
}
?>
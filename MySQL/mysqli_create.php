<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');

if ($conexion->connect_errno){    //si la conexión es errónea cierra el programa y sale lo que dice el die
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("CREATE TABLE `prueba_mysqli`.`ejerciciocreate` ( `ID` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(100) NOT NULL , `edad` INT NOT NULL , PRIMARY KEY (`ID`))");   
	// Ejecutamos la sentencia.
	$statement->execute();
}
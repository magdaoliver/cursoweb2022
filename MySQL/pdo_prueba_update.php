<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare("UPDATE `usuarios_form` SET `id` = 1 WHERE `usuarios_form`.`id` = 2");
	$statement->execute();
	echo "Datos actualizados correctamente";


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('INSERT INTO usuarios_form VALUES (null, "Alex","alex@correo.com","Quiero información")');
	$statement->execute();
	echo "Datos insertados correctamente";


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
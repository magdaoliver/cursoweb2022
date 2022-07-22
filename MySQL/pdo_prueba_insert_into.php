<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('INSERT INTO usuarios VALUES (null, "Alex")');
	$statement->execute();
	echo "Datos insertados correctamente";


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare("DELETE FROM usuarios WHERE ID=14 OR ID=15");
	$statement->execute();
	echo "Datos borrados correctamente";


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
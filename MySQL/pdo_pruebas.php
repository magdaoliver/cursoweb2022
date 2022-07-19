<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');
	echo "Conexion OK";
}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
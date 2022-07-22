<?php 

$id = $_GET['ID'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE ID = :ID');  //1A FASE:tiene el SQL preparado si la variable es correcta
	$statement->execute(   
		array(':ID'=> $id)    //método más seguro pq si pones algo más en la id,como un script, el EXECUTE no ejecutaría (cosa contraria al QUERY que es directo y lo haría)
	);

	$resultados = $statement->fetch();
	echo "<pre>";
	print_r($resultados);
	echo "</pre>";

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
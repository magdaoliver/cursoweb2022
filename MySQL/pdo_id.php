<?php

$id1 = $_GET['ID1'];
$id2 = $_GET['ID2'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');
	$resultados = $conexion->query("SELECT * FROM usuarios WHERE ID = $id1 OR ID = $id2");

    foreach($resultados as $fila){
		echo $fila['ID'] . ' - ' . $fila['Nombre'] . "<br />";
	}

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
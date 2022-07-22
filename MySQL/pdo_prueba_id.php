<?php

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');
	

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id= :id');   //esto es una consulta preparada.Sintaxis-> :$variable. PREPARE es la 1a fase (se prepara)
	$statement->execute(    //EXECUTE es la 2a fase.El array que sale a continuación le dice al execute que muestre el registro donde la id=5
		array(':id'=> 5)
	);

	$resultados = $statement->fetch();  //como le hemos dado un dato (id=5) el fetch no recorre todas las filas
	print_r($resultados);   //aquí al ejecutar muestra los parámetros del array: clave-valor (posición 0 de la columna 0)-clave-valor (posición 5 de la columna 1)

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
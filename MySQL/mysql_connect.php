<?php 

$conexion = mysql_connect('127.0.0.1', 'root', '') or die('No se pudo conectar a la base de datos'); //variable conexión con un array de 3 parámetros y, si no ha conexión es el die

mysql_select_db('heidisql_curso', $conexion);  // en el 1er parametro ponemos el nombre de la BD creada: heidisql_curso)

$resultados = mysql_query('SELECT * FROM usuarios');
// Podemos ejecutar cualquier consulta SQL, por ejemplo para ingresar usuarios en una base de datos.

while($fila = mysql_fetch_array($resultados)){
	echo $fila['nombre'];
	echo "<br />";
}

?>
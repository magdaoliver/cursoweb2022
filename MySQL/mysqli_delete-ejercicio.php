<?php
// Create connection

$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');
// Check connection
if ($conexion->connect_error){
  die('Lo siento hubo un problema con el servidor');
}

// sql to delete a record
$sql = "DELETE FROM usuarios WHERE id=11 OR id=12";

if ($conexion->query($sql) === TRUE) {
  echo "Borrado exitosamente";
} else {
  echo "Error al borrar: " . $conexion->error;
}

$conexion->close();
?>
<?php 
session_start();

$_SESSION['nombre'] = 'Marc';
if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola $nombre</h1>";
} else {
	echo 'No has iniciado sesion';
	echo '<a href="13-index.php">Volver a iniciar sesion</a>';
}


?>
<br>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pagina 2</title>
</head>
<body>
	<a href="cerrar.php">Cerrar sesion</a>
	<br>
	<!-- <a href="13-index.php">Volver a iniciar sesion</a> -->
</html>
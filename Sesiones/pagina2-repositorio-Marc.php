<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones 2</title>
</head>
<body>
	<h1>P�GINA2.PHP</h1>
</body>
</html>
<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h2>Hola $nombre</h2> <p>Sesi�n iniciada correctamente</p><br>";
	echo '<a href="cerrar.php">Cerrar sesi�n</a>';
} else {
	echo 'No has iniciado sesi�n<br>';
	echo '<a href="13.index.php">Iniciar otra sesi�n</a>';
}

?>
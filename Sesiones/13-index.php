<?php
session_start();
// session_destroy();

$_SESSION['nombre'] = 'Marc';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h1>Pagina de Inicio</h1>
	<p>Has cargado una nueva sesion</p>
	<a href="cerrar.php">Cerrar sesion</a>
	<br>
	<a href="pagina2.php">Ir a la pagina 2</a>
</body>
</html>


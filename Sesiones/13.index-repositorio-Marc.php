<?php
// echo 'Primero $_SESSION vale= ';
// print_r($_SESSION);
session_start();
// // session_destroy();
// echo '<br>Con la sesi�n iniciada $_SESSION vale= ';
// print_r($_SESSION);
$_SESSION['nombre'] = 'Marc';
// echo '<br>Con valores a $_SESSION vale= ';
// print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones 1</title>
</head>
<body>
	<h1>P�gina de Inicio INDEX.PHP</h1>
	<p>Has cargado una nueva sesi�n y le has dado valor a nombre = Marc</p>
	<a href="pagina2.php">Ir a la p�gina 2</a>
	<a href="cerrar.php">Ir a cerrar sesi�n</a>
</body>
</html>
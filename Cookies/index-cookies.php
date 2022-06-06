<?php

setcookie('font-size', '30px', time() + 60 * 60 * 24 * 30, '/');
//1er par�metro es igual al nombre de la cookie=font-size
//Valor de esa cookie=30px
// El tiempo de expiraci�n es en 30 dias(segundos*minutos*horas*dias). PHP traduce la fecha al formato adecuado
// 4? Par�metro: Ruta y dominio
// setcookie('font-size', '30px', time() - 60, '/');
// Guarda 'font-size' como clave del array asociativo en $_COOKIE['font-size'] = '30px' ser� el valor de esa clave ['font-size'] => '30px' valor

setcookie('color', 'yellow', time() + 60 * 60 * 24 * 30, '/'); //Crea cookie de nombre color, valor yellow
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
</head>
<body>
	<h1>Cookies establecidas</h1>
	<p>Creadas cookies de tama?o y color</p>
	<a href="texto.php">Ir a la p�gina texto.php</a>
</body>
</html>
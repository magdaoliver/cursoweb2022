<?php

session_start();

echo 'Bienvenido a la p�gina de ejemplo #3 sin ning�n enlace<br />';

$color=$_SESSION['color'];
$animal=$_SESSION['animal'];
$instante=date('H:i:s d m Y', $_SESSION['instante']);

echo "Hoy es: " . $instante . "-El color es: " . $color . " y el animal es: " . $animal; 


?>
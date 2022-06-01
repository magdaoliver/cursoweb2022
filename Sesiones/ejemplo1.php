<?php

session_start();

echo 'Bienvenido a la página de ejemplo #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante']   = time();

// Funciona si la cookie de sesion fue aceptada
echo '<br /><a href="ejemplo2.php">Ejemplo 2</a>';

// O quizas pasar el id de sesión, si fuera necesario
// echo '<br /><a href="ejemplo2.php?' . SID . '">página 2</a>';
?>
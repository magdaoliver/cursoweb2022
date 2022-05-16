<?php   // en éste script damos valor y ordenamos la variables.

$dias = array(
	'Lunes', 'Martes', 'Miércoles', 'Jueves', 
	'Viernes', 'Sábado', 'Domingo',
);

// $numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

// rsort($dias);
// sort($dias); //Función del array que queremos ordenar
// rsort($meses); Inverso del array


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Días de la semana</title>
</head>
<body>
	<h1>Días de la semana</h1>
	<ul>
        <?php
            foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
        <br>
		<?php       //en estos scripts se da orden y se imprime/muestra en pantalla lo que hemos pedido
            sort($dias);
            foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
        <br>
		<?php
            rsort($dias);
			foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
	</ul>
</body>
</html>
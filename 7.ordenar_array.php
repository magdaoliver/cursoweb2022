<?php   // en éste script damos valor y ordenamos la variables.

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

rsort($numeros);
sort($meses); //Función del array que queremos ordenar
// rsort($meses); Inverso del array
// rsort($numeros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del A?o</title>
</head>
<body>
	<h1>Meses del A?o</h1>
	<ul>
		<?php       //en estos scripts se da orden y se imprime/muestra en pantalla lo que hemos pedido
            foreach($numeros as $numero){
				echo '<li>' . $numero . '</li>';
			}
		?>
		<?php
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
	</ul>
</body>
</html>
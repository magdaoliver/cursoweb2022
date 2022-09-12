?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
	<link rel="stylesheet" href="estilos.css">  <!--llama a la hoja de estilos para dar el formato -->
	<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>Contador de Visitas</h1>
	<div class="visitantes">
		<p class="numero"><?php echo contar_usuarios(); ?></p> <!--muestra en pantalla el resultado de la función contar_usuarios que se encuentra en index.php   -->
		<p class="texto">Visitas</p>
	</div>
    <button type="button">Reiniciar contador</button><?php echo contar_usuarios(); ?>

</body>
</html>
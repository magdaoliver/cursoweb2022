<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulari Contacte</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom:" value="<?php if
			(!$enviado && isset($nom)) echo $nom ?>">

			<input type="text" class="form-control" id="correu" name="correu" placeholder="Correu:" value="<?php if(!$enviado && isset($correu)) echo $correu ?>">


			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Enviat Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correu">
		</form>
	</div>
</body>
</html>
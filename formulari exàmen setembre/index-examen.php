<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		//Recopilamos los datos que nos dan a traves del formulario por el metodo POST, lo recibimos en la variable array asociativo $_POST
		$nom = $_POST['nom'];
		$correu = $_POST['correu'];
		

		// Sanear el nombre
		if (!empty($nom)) {
			$nom = trim($nom);
		} else {
			$errores .= 'Sisplau escriu un nom <br />';
		}

		if (!empty($correu)) {
			$correu = filter_var($correu, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correu, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Sisplau escriu un correu valid <br />';
			}
		} else {
			$errores .= 'Sisplau escriu un correu <br />';
		}

		if(!$errores){
			$enviar_a = 'magda.oliver@etif.es';
			$asunto = 'Correu enviat des de la app de formulari de php';
			$mensaje_preparado = "De: $nom \n";
			$mensaje_preparado .= "Correu: $correu \n";
			

			// mail($enviar_a, $asunto, $mensaje_preparado);
			$enviado = 'true';
		}

	}

	require 'inde.view.examen.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=prova_setembre', 'root', '');
			echo "Tot OK conectat </br>" ;
			$statement = $conexion->prepare('INSERT INTO taula_prova VALUES (null, :nom, :correu)');
			echo "OK sentencia correcta </br>";
			$statement->execute(
				array(':nom'=> $nom, ':correu'=> $correu)
			);
			echo "OK Tot enviat";

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
	
?>
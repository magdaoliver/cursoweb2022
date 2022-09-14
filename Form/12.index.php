<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) { //aquí recopilamos los datos que nos dan a través del formulario por metodo POST.Lo recibimos en la variable array asociativo $_POST
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {  //si el $nombre no está vacio
		$nombre = trim($nombre);  //trim: quita los espacios por delante y por detras
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor escribe un nombre <br />';  //.= es igual a $errores.(concatenacion)"texto".El <br> da el salto de linea para que salgan los mensajes cada uno en una linea
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);  //sanea el correo

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){   //valida el correo para que tenga un formato mail correcto
			$errores .= 'Por favor escribe un correo valido <br />';
		}
	} else {
		$errores .= 'Por favor escribe un correo <br />';
	}

	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Por favor escribe el mensaje';
	}

	if(!$errores){
		$enviar_a = 'tunombre@tuempresa.com';
		$asunto = 'Correo enviado desde miPagina.com';
		$mensaje_preparado = "De: $nombre \n";  //el = es que aqui no concatena sino que inicializa
		$mensaje_preparado .= "Correo: $correo \n";  //aqui .= ya concatena 
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		//mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';    //funcion que guarda un correo,un asunto y un mensaje preparado mediante este true
	}

}

require 'index.view.php';

?>
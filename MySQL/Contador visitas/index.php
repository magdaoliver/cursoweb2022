<?php 
function contar_usuarios(){   //llamamos al archivo mediante una función
	$archivo = 'contador.txt';   //es la url del archivo de texto contador.txt. Es un string, si cambiamos el nombre cambiarlo pq sino no lo encontrará. Se escribe así pq está en la misma carpeta; si estuviera en otro sitio hemos de poner todo el path (ruta de acceso).

	if ( file_exists($archivo) ) {    //condicional con función que verifica si existe el archivo
		$cuenta = file_get_contents($archivo) + 1;   //si existe el archivo va sumando +1. Crea la variable $cuenta que revisa el contenido de ese archivo: lo lee y lo pasa a string y, le suma 1
		file_put_contents($archivo, $cuenta);  //busca el archivo.En la variable $cuenta guarda el valor +1

		return $cuenta;   //devuelve el valor+1
	} else {     //si no existe el archivo contador lo crea y le da un valor de 1
		file_put_contents($archivo, 1);
		return 1;
	}
	
}

require "index.view.php";
?>
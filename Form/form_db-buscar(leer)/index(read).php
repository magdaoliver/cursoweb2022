<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {   //si tiene valor (isset: determina si una variable est� declarada y no es nula) creamos variable ["si has clicado al bot�n"]. NO es igual que empty
		$id = $_POST['id']; //guardaremos el valor asignado por el usuario de la id en la variable $id

		//Error si no hay "id" seleccionada
		if (empty($id)) {
			$errores .= 'Por favor selecciona una id <br />';
		}
        //estos if entre ellos no tienen relaci�n. Para tener relaci�n tendr�a que ser if/else
		if(!$errores){     //si no hay errores cambiamos el $enviado a true, es dcir, se enviar� el formulario
			$enviado = 'true';
		}

	}

	require 'index.view.php';
	//a partir del env�o del formulario, se conecta y env�a a la BD esa id
	if ($enviado == 'true'){
		try {    //este try/catch lo ha sacado del archivo pdo_prueba_id_get.php
			$conexion = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');  //la variable $conexi�n guarda la conexi�n a la BD

			//Buscar datos del formulario
			$statement = $conexion->prepare('SELECT * FROM usuarios_form WHERE id = :id');
			$statement->execute(    //ambas variables $statement (se llama tb $consulta, $SQL) guardan la consulta SQL
				array(':id'=> $id)   //en el array estan las variables por las que estamos buscando (despu�s del WHERE). Si busc�semos por nombre e id tendr�amos que poner id y nombre y haberlos seteado en l�nea 7
			);

			$resultados = $statement->fetch();  //El $conexi�nn se va dentro del $statement y, el $statement va $resultados
			
			if($resultados){   //si existen resultados mu�stralos as�:la conexi�n y los statements
				echo "<p style='text-align:center'> El registro es:</br> ";
				echo "ID:" . $resultados['id'] . ' - ' . $resultados['nombre']. ' - ' . $resultados['correo']. ' - ' . $resultados['mensaje'] ;
				echo "</p>";
			} else {   //si no hay resultados se mostrar� :No hay ese registro
				echo "<p style='text-align:center'>No hay ese registro</p>";
			}

			
			

		} catch(PDOException $e){   //si hay alg�n error en el try (conexi�n, consulta o resulset va al catch) da una excepci�n. Si es antes del try dar� un warning.
			echo "Excepcion: " . $e->getMessage();
		}
	}


?>
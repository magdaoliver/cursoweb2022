<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {   //si tiene valor (isset: determina si una variable está declarada y no es nula) creamos variable ["si has clicado al botón"]. NO es igual que empty
		$id = $_POST['id']; //guardaremos el valor asignado por el usuario de la id en la variable $id

		//Error si no hay "id" seleccionada
		if (empty($id)) {
			$errores .= 'Por favor selecciona una id <br />';
		}
        //estos if entre ellos no tienen relación. Para tener relación tendría que ser if/else
		if(!$errores){     //si no hay errores cambiamos el $enviado a true, es dcir, se enviará el formulario
			$enviado = 'true';
		}

	}

	require 'index.view.php';
	//a partir del envío del formulario, se conecta y envía a la BD esa id
	if ($enviado == 'true'){
		try {    //este try/catch lo ha sacado del archivo pdo_prueba_id_get.php
			$conexion = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');  //la variable $conexión guarda la conexión a la BD

			//Buscar datos del formulario
			$statement = $conexion->prepare('SELECT * FROM usuarios_form WHERE id = :id');
			$statement->execute(    //ambas variables $statement (se llama tb $consulta, $SQL) guardan la consulta SQL
				array(':id'=> $id)   //en el array estan las variables por las que estamos buscando (después del WHERE). Si buscásemos por nombre e id tendríamos que poner id y nombre y haberlos seteado en línea 7
			);

			$resultados = $statement->fetch();  //El $conexiónn se va dentro del $statement y, el $statement va $resultados
			
			if($resultados){   //si existen resultados muéstralos así:la conexión y los statements
				echo "<p style='text-align:center'> El registro es:</br> ";
				echo "ID:" . $resultados['id'] . ' - ' . $resultados['nombre']. ' - ' . $resultados['correo']. ' - ' . $resultados['mensaje'] ;
				echo "</p>";
			} else {   //si no hay resultados se mostrará :No hay ese registro
				echo "<p style='text-align:center'>No hay ese registro</p>";
			}

			
			

		} catch(PDOException $e){   //si hay algún error en el try (conexión, consulta o resulset va al catch) da una excepción. Si es antes del try dará un warning.
			echo "Excepcion: " . $e->getMessage();
		}
	}


?>
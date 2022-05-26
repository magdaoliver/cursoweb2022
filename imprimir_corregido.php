<?php

    $dies = array(
    	'Dilluns', 'Dimarts', 'Dimecres', 'Dijous', 
    	'Divendres', 'Dissabte', 'Diumenge',
    );

    //Codi PHP
    class Impressora {
        //Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = 'DINA4';   //equivalente a $imprime->tamany
        public $color = 'negre';    //equivalente a $imprime->color 
        //Metodes
        public function imprimeix($tinta,$paper,$tamany){
            if ($tinta && $paper){
                echo 'Es pot imprimir en ' . $tamany;
            }
            else{
                echo 'Falta tinta o paper';
            }
        }
        // public function imprimeix($tinta,$paper,$tamany,$color){          otra manera de hacer el ejercicio
            // if ($tinta && $paper){
                // echo 'Es pot imprimir en ' . $tamany . ' en color ' . $color . '.';
            // }
            // else{
                // echo 'Falta tinta o paper';
            // }
        // }
    }
    
    $imprime = new Impressora();
    echo 'Es pot imprimir en ' . $imprime->tamany . ' en color ' . $imprime->color . '.';
   
?>
<!-- La classe Impressora �s una plantilla que es composa d�atributs, en aquest cas p�blics (que es poden fer servir externament), i uns m�todes (que s�n les funcions). L�objecte $imprime hereta el que te la class Impressora. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressi� del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    <!-- Codi PHP-->
    <ul>
        <?php      
            sort($dies);
            foreach($dies as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
    </ul>
        <!-- <?php   
            // $imprime = new Impressora();  //creaci�n del objeto de la clase Impressora
            // echo  $imprime->tamany;  //propiedad $tamany del objeto $imprime el valor es DINA4
            // echo  $imprime->color ;  //propiedad $color del objeto $imprime el valor es negre
            // "Es pot imprimir en DINA4, en color negre"
            // echo 'Es pot imprimir en ' . $imprime->tamany . ' en color ' . $imprime->color . '.';
            // echo "<br>";
        // ?>
</body>
</html>



<!-- PRACTICA 1- 
PREGUNTA 1:
Xampp es un entorno de desarrollo con PHP, gratuito y de facil instalaci�n. 
Es un paquete de software libre, compuesto por un sistema de gesti�n de bases de datos MySQL, el servidor web Apache y los int�rpretes para lenguajes de script como PHP.
Con Xampp creamos un servidor local en nuestro PC. Descargamos e instalamos Xampp (Apache, MySQL y PHP) en la carpeta C:\xampp, que sale por defecto. Lo anclamos a la barra de tareas despu�s de haberlo configurado para ejecutar como administrador. 
Una de las carpetas m�s importantes en Xampp es la carpeta htdocs, que es donde alojaremos los archivos.php para poder ser interpretados (en C:\xampp\htdocs). �sta carpeta la tendremos en el escritorio con un acceso directo.
El �ltimo paso es buscar en el navegador http://localhost que es donde visualizaremos la ejecuci�n de los archivos .php alojados en htdocs (tambi�n crearemos acceso directo en el escritorio).
Para encender el servidor local, hemos de abrir xampp y clicar en start en Apache y MySQL.

PREGUNTA 2:
La tecnolog�a Git sirve para controlar las versiones de los archivos.
Para poder gestionarla necesitamos tener instalado y abierto:
*GitHub (la instalaci�n precisa de un registro de usuario que tendremos que hacer en Github.com), 
*GitHub Desktop (que anclaremos a la barra de tareas de nuestro PC. Desde aqu� realizaremos la interacci�n entre el repositorio local y el repositorio remoto haciendo COMMIT/PUSH cuando hayamos finalizado la tarea diaria en el repositorio local y, FETCH/PULL cuando queramos recuperar y editar archivos del repositorio remoto), y 
*Visual Studio Code (que es un editor de c�digo PHP que ha de sincronizarse con GitHub)  -->

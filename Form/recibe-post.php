<?php

// print_r($_POST);
// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $fecha = $_POST['fecha'];
// $terminos = $_POST['terminos'];
// 
// // echo 'Hola ' . $nombre . ' eres ' . $sexo . ' y has escogido la fecha: '. $fecha;

if(!$_POST) {
    header('Location: http://localhost/cursoweb2022/UF1845/ejemplo-form-index2.php'); //Carpeta y archivo para rellenar el form correcto
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$terminos = $_POST['terminos'];

echo 'Hola ' . $nombre . ' eres un ' . $_POST['sexo'] . ' y has escogido la fecha: '. $fecha;   //se puede poner por variables o bien con la posici�n del arrey, como en el caso del sexo

?>
<?php
if((!$_GET) && (!$_POST)) {
    header('Location: http://localhost/cursoweb2022/Form/formulario.php'); //Carpeta y archivo para rellenar el form correcto
}
// print_r($_SERVER); //se puede poner el print_r o el var_dump para saber los datos
// var_dump($_SERVER);
#1. REVISAR DE QUE FORMA SE ENVIAN LOS DATOS
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo 'Se ha enviado por GET';
// } else {
//     echo 'Se ha enviado por POST';
// }
 
#2. REVISAR SI SE HA ENVIADO EL FORMULARIO COMPROBANDO SUBMIT
//  if (isset($_GET['submit'])) {
//     echo 'Se han enviado los datos por GET correctamente <br>';
//     print_r($_GET['submit']);
//     echo '<br>';
//     print_r($_GET);
// }
//  if (isset($_GET['submit2'])) {
//     echo 'Se han enviado los datos correctamente del segundo formulario ';
//     print_r($_GET['submit2']);
//  }

//  if (isset($_POST['submit'])) {
//     echo 'Se han enviado los datos por POST correctamente <br>';
//     print_r($_POST['submit']);
//     echo '<br>';
//     print_r($_POST);
// }
//  if (isset($_POST['submit2'])) {
//     echo 'Se han enviado los datos correctamente del segundo formulario ';
//     print_r($_POST['submit2']);
//  }


#3. EJERCICIO REVISAR SI SE HA ENVIADO POR POST O GET Y ADEMÁS EN EL FORMULARIO COMPROBAMOS QUE SUBMIT
 $metodo= $_SERVER['REQUEST_METHOD'];
 if ($metodo == 'GET') {//Enviado mediante GET
    if (isset($_GET['submit'])) {
        echo 'Se han enviado los datos correctamente en el formulario 1, mediante GET <br>';
    }
    if (isset($_GET['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante GET ';
    }
    echo "valores del GET: ";
    print_r($_GET); //VACIO
    '<br>';
    echo "valores del POST: ";
    print_r($_POST);
 }
  else { //Enviado mediante POST
    if (isset($_POST['submit'])) {
        echo 'Se han enviado los datos correctamente, mediante POST <br>';
        print_r($_POST['submit']);
        echo '<br>';
        print_r($_POST);
    }
    if (isset($_POST['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante POST ';
        print_r($_POST['submit2']);
    }
    echo "valores del GET: ";
    print_r($_GET); //VACIO
    '<br>';
    echo "valores del POST: ";
    print_r($_POST);
 }

?>
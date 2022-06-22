<?php

$errores='';

if (isset($_POST['submit'])) {
    $nombre=$_POST['nombre'];
    $email=$_POST['correu'];

   
    if (!empty($nombre)) {
        $nombre= trim($nombre); 
        $nombre=htmlspecialchars($nombre); 
        $nombre=stripslashes($nombre);

    

        echo 'El teu nom es ' . $nombre . '<br>';
    } else {
        $errores .= 'Sisplau escriu un nom <br>';
    }
    if (!empty($email)) {
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Sisplau escriu un correu valid <br>';
        } else {
            echo 'El teu correu es ' . $email . '<br>';
        }
    } else {
        $errores .= 'Sisplau escriu un correu valid <br>';
    }
}


require 'vista.php';

?>
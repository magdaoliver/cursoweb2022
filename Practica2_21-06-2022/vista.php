<!-- ACTIVITAT PR?CTICA 2: -->
<!--  -->
<!--  Per poder accedir als arxius.php hem d´obrir Xampp, que és el servidor local que tenim instal.lat al nostre ordinador. Encendrem l´Apache, el servidor, i MySQL, que és un SGBD. Una vegada encés el Xampp i obert al navegador web el localhost, ja podrem visualitzar els arxius amb extensió.php.
El codi PHP s´executa al servidor i, el resultat ho torna al navegador, com un HTML sense format.  --> 

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
?>

<!DOCTYPEhtml>
<html lang="ca">
    <head>
        <title>Formulari de Contacte</title>
        
    <head>
    <body>
        <!-- <form action=""> -->
            <!-- <input type="text" name="nom" placeholder="Nom">  -->
            <!-- <input type="email" name="correu" placeholder="Correu">  -->
            <!-- <input type="submit" name="submit" value="EnviarCorreu"> -->
        <!-- </form> -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"> 
        <input type="text" name="nombre" placeholder="Nombre" id="">
        <input type="email" name="correu" placeholder="Correu" id=""> 
        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>
            
        <input type="submit" name="submit" value="Enviar Correu" >
        </form>
    </body>
</html> 

<?php
    //Codi PHP
    class Impressora {
        //Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = 'DINA4'; // Equivalent a $impressio->tamany
        public $color = 'negre'; // Equivalent a $impressio->color
        //Metodes
        public function imprimeix($tinta,$paper,$tamany,$color){
            if ($tinta && $paper){
                echo 'Es pot imprimir en ' . $tamany . ", en color " . $color;
            }
            else{
                echo 'Falta tinta o paper';
            }
        }
    }
    //Ejercicio 3
    $semana = ["dilluns","dimarts","dimecres","dijous","divendres","dissabte","diumenge"];
    //Ejercicio 4, primero ordenamos
    sort($semana);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressi� del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    <!-- Codi PHP Ejercicio 4 Ahora listamos los dias-->
    <ul>
        <?php
            foreach ($semana as $dia) {
                echo "<li>" . $dia . "</li>";
            }
        ?>
    </ul>
    <?php
            // $hp = new Impressora(); //Creaci�n del Objeto de la clase Impressora
            // $xerox = new Impressora();
            $canon= new Impressora();
            // echo $hp->tamany . ": Tamany de HP<br>";
            // echo $xerox->tamany . ": Tamany de Xerox<br>"; 
            //1.Mostrar tama?o por defecto de canon
            echo $canon->tamany . ": Tamany, per defecte, de Canon<br>";
            // $hp->tamany="DINA3";
            // $xerox->tamany="DINA2";
            //2. Cambiar tama?o por defecto de canon
            $canon->tamany="DINA5";
            echo $canon->tamany . ": Tamany canviat de Canon<br>";
            // echo $hp->tamany . ": Tamany de HP<br>"; // Propiedad $tamany del objeto $hp el valor es "DINA2"
            // echo $xerox->tamany . ": Tamany de Xerox<br>";
            //3. Mostrar tama?o actual de canon
            // echo $hp->color . "<br>"; // Propiedad $color del objeto $hp el valor es "negre"
            //"Es pot imprimir en DINA4, en color negre"
            // echo "Es pot imprimir en " . $hp->tamany . ", en color " . $hp->color;
            // echo "<br>";
            // $hp->imprimeix(true,true,"DINA4","negre");
            //4. Llamad al metodo imprimeix con canon para mostrar el mismo resultado que lo que pido en el examen
            echo 'Es pot imprimir en ' . $canon->tamany . ' en color ' . $canon->color . '.';    //una manera de hacerlo
            // $canon->imprimeix(true,true,'DINA5','negre');    //otra manera de hacerlo
   
    ?>
    
</body>
</html>
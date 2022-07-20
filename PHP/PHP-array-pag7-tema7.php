<!DOCTYPE html>
<html>
    <body>
        <?php
        $cars = array("Volvo","BMW","Toyota");
        $coches = [1,2,3];
        var_dump($cars);
        echo "<br>";
        var_dump($coches);
        $cars[7] = "Opel";
        echo "<br>";
        var_dump($cars);
        $coches["modelo"]="Astra"; //Asociativo
        echo "<br>";
        var_dump($coches);
        ?>
    </body>
</html>
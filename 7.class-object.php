<?php 
//Creamos la clase Profesor
    
// class Profesor {
//         //Atributos que son las propiedades del objeto
//         public $nombre = 'Marc';
//         public $apellido = 'Esteve';
//         public $altura = 1.75;

class Coche {
        public $color = 'rojo';
        public $ruedas = 'cuatro';
        public $motor = 'electrico';
       
        

        //Métodos
        public function acelera($velocidad){
            echo $velocidad;
        }
    }
    $tesla = new Coche();//Creamos OBJETO
    // echo gettype($persona); //Muestra tipo "object"
    echo 'El color del coche es ' . $tesla->color . ' y tiene ' . $tesla->ruedas . " ruedas. Su combustible es " . $tesla->motor . '.';
    $tesla->acelera("<br> Su velocidad es de 200km/h");
?>
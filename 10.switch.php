<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Enero';
$saludo = 'saludo';

//switch($mes){
//	case 'Diciembre':
//		echo "Feliz Navidad!";
//	break;
//
//	case 'Enero':
//		echo "Feliz A?o Nuevo";
//	break;
//
//    case 'Junio':
//		echo "Bona revetlla";
//	break;
//
//    case 'Agosto':
//		echo "Felices vacaciones";
//	break;
//
//	default:
//		echo "En este mes no se celebra nada";
//	break;
//}

switch($mes){
	case 'Diciembre':
		$saludo = "Feliz Navidad!";
	break;

	case 'Enero':
		$saludo ="Feliz A?o Nuevo";
	break;

    case 'Junio':
	    $saludo ="Bona revetlla";
	break;

    case 'Agosto':
		$saludo = "Felices vacaciones";
	break;

	default:
    $saludo = "En este mes no se celebra nada";
	break;
}
echo $saludo;
# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz A?o Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>
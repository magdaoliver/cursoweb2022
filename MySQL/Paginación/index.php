<?php 

// Nos conectamos a la base de datos
try {
	$conexion = new PDO('mysql:host=localhost;dbname=curso_paginacion', 'root', '');
} catch (PDOException $e) {
	echo 'ERROR: '. $e->getMessage();
	die();
}

// Establecemos el numero de pagina en la que el usuario se encuentra.
# Esto lo hacemos por el metodo GET, si no hay ningun valor entonces le asignamos la pagina 1.
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Establecemos cuantos post por pagina queremos cargar. Si queremos 3 srt�culos/p�gina pondr�amos un 3
$postPorPagina = 5;

// Revisamos desde que articulo vamos a cargar, dependiendo de la pagina en la que se encuentre el usuario.
# Comprobamos si la pagina en la que esta es mayor a 1, sino entonces cargamos desde el articulo 0.
# Si la pagina es mayor a 1 entonces hacemos un calculo para saber desde que post cargaremos.
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;

// Preparamos la consulta SQL
$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM articulos
	LIMIT $inicio, $postPorPagina
");

// Si queremos que se muestren los art�culos en orden desde el �ltimo que se ha creado-Orden descendente
// $articulos = $conexion->prepare("
// 	SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC
// 	LIMIT $inicio, $postPorPagina
// ");

// Ejecutamos la consulta
$articulos->execute();
$articulos = $articulos->fetchAll();

// Comprobamos que haya articulos, sino entonces redirigimos.
if (!$articulos) {
	header('Location: http://localhost/cursoweb2022/MySQL/Paginaci%c3%b3n/');
}

// Calculamos el total de articulos, para despues conocer el numero de paginas de la paginacion.
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

// Calculamos el numero de paginas que tendra la paginacion.
# Para esto dividimos el total de articulos entre los post por pagina
$numeroPaginas = ceil($totalArticulos / $postPorPagina);

require 'index.view.php';

?>
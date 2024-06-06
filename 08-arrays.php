<?php include 'includes/header.php';

//Arreglos o Arrays:
/* Se pueden crear de dos formas */
$array1 = [];
var_dump($array1);

$array2 = array();
var_dump($array2);

//Como agregar y ver un array:
$array1 = ["Peñarol", "Nacional", "Boca", "River"];
//Snippet para ver el array:
echo "<pre>";
var_dump($array1);
echo "</pre>";

//Acceder a un elemento del array:
echo $array1[1];

//Agregar un elemento a la lista enla posicion que queremos:
$array1[4] = "Independiente";
//Snippet para ver el array:
echo "<pre>";
var_dump($array1);
echo "</pre>";

//Agregar un elemento al final de la tabla:
array_push($array1 , "Estudiantes");
//Snippet para ver el array:
echo "<pre>";
var_dump($array1);
echo "</pre>";

//Agregar un elemento al inicio de la tabla:
array_unshift($array1 , "Campeones de america y del mundo");
//Snippet para ver el array:
echo "<pre>";
var_dump($array1);
echo "</pre>";

include 'includes/footer.php';
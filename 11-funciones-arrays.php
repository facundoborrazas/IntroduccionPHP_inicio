<?php include 'includes/header.php';

$nombres = ["Facundo","Agustina","Agustin","Maxi"];

var_dump( in_array("Facundo", $nombres) );
var_dump( in_array("Lucia", $nombres) );

$numeros = [1,6,3,9,3,0,2];
//Ordenar elementos de un array:
sort($numeros); //Ordena de menor a mayor
rsort($numeros); //Ordena de mayor a menor

//Snippet para ver el array:
echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Tambien se pueden ordenar arrays asociativos:
$cliente = [
    "nombre"=>"Facundo",
    "apellido"=>"Borrazás",
    "edad" => 22
];

asort($cliente); //Ordena por orden alfabetico del valor de cada atributo
arsort($cliente); //Ordena por orden alfabetico del valor de cada atributo pero en orden inverso
ksort($cliente); //Ordena por orden alfabetico del nombre de cada atributo
krsort($cliente); //Ordena por orden alfabetico del nombre de cada atributo pero en orden inverso

//Snippet para ver el array:
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
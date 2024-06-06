<?php include 'includes/header.php';

$nombre = "Facundo Borrazás";

//Conocer la extension de un string:
echo strlen($nombre);

//Eliminar espacioes en blanco de un string:
echo trim($nombre);

//Convertir un string a mayusculas:
echo strtoupper($nombre);

//Convertir un string a minusculas:
echo strtolower($nombre);

//Remplazar un caracter de un string:
echo str_replace("Facundo", "F.", $nombre);

//Revisar si un caracter o conjunto de estos existe en un string:
echo strpos($nombre, "Facundo"); //Si lo encuentra lanzará la posicion donde encontró el caracter buscado o donde comienza el conjunto de estos 

echo "<br>";

//Concatenar strngs:
//Forma 1:
$tipo_cliente = "Premium";

echo "El cliente " . $nombre . " es " . $tipo_cliente;

//Forma 2:
echo "El cliente {$nombre} es {$tipo_cliente}";

include 'includes/footer.php';

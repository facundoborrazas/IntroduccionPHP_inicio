<?php include 'includes/header.php';

//Incrementos:
//Formas de incrementar valores de variables:

//Forma 1:
$numero = 30;
$numero++;

echo $numero;

//Forma 2:
$numero = 30;

echo ++$numero;

//DATO:
$numero = 30;
/*Si colocamos el ++ por delante del echo de la variable, este imprimira en pantalla el 
valor de la variable sin aumentar de valor, pero luego de imprimirla en pantalla si 
aumentará su valor*/
echo $numero++;

echo $numero;

//Ademas se puede incrementar el valor no solo en 1 en 1:
$numero = 30;
$numero +=5;

echo $numero;

//Decrementos:
//Formas de reducir valores de variables:

//Forma 1:
$numero = 30;
$numero--;

echo $numero;

//Forma 2:
$numero = 30;

echo --$numero;

//DATO:
$numero = 30;
/*Si colocamos el ++ por delante del echo de la variable, este imprimira en pantalla el 
valor de la variable sin aumentar de valor, pero luego de imprimirla en pantalla si 
aumentará su valor*/
echo $numero--;

echo $numero;

//Ademas se puede incrementar el valor no solo en 1 en 1:
$numero = 30;
$numero -=5;

echo $numero;

include 'includes/footer.php';
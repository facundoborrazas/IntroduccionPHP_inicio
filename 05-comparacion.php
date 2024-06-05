<?php include 'includes/header.php';

$numero1 = 10;
$numero2 = 20;
$numero3 = 20;
$numero4 = "20";

/*###############################################################################################
Comparadores:
###############################################################################################*/

#A menor B
var_dump($numero1 < $numero2);
echo "<br>";

#A mayor B
var_dump($numero1 > $numero2);
echo "<br>";

#A menor o igual B
var_dump($numero1 <= $numero2);
echo "<br>";

#A mayor o igual B
var_dump($numero1 >= $numero2);
echo "<br>";

#A igual B (Esta comparacion por mas que sean distintos tipos de datos va a dar true si su valor es el mismo)
var_dump($numero1 == $numero2);
echo "<br>";

#A igual estricto B (Esta comparacion para que de true debe ser del mismo tipo de dato)
var_dump($numero1 === $numero3);
echo "<br>";

#-1 si izq es menor, 0 si son iguales y 1 si izq es mayor
var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero1 <=> $numero1);
echo "<br>";

var_dump($numero2 <=> $numero1);
echo "<br>";

include 'includes/footer.php';
<?php include 'includes/header.php';
/*###############################################################################################
Esta seria la forma de crear una variable re-asignable. Es como el let en JS:
###############################################################################################*/
//Distintas formas de nombrar una variable:
$nombre = "Facundo";
$_nombre = "Facundo";
$nombre_ = "Facundo";

//Imprimir el valor de la variable en pantalla:
echo $nombre;
echo $_nombre;
echo $nombre_;

//Imprimir el tipo de la variable en pantalla:
var_dump($nombre);
var_dump($_nombre);
var_dump($nombre_);

/*###############################################################################################
Esta seria la forma de crear una variable constante. Es como el const en JS:
###############################################################################################*/
define("constante", "Este es el valor de la constante");

//Para imprimr una constante se hace sin el simbolo $ al principio del nombre de la variable:

//Imprimir el valor de la variable en pantalla:
echo constante;

//Imprimir el tipo de la variable en pantalla:
var_dump(constante);

//Tambien se puede hacer de la siguiente manera la definificon de la constante (No es tan comun):
const constante2 = "Constante2";

//Imprimir el valor de la variable en pantalla:
echo constante2;

//Imprimir el tipo de la variable en pantalla:
var_dump(constante2);

include 'includes/footer.php';
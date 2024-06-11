<?php include 'includes/header.php';

$cliente = [];
$cliente1 = array();
$cliente2 = ["Facundo", "Agustina", "Agustin"];
$cliente3 = [
    "nombre"=>"Facundo",
    "apellido"=>"Borrazás"
];

//Empty: Funciona para saber si un array esta vacio:
var_dump( empty($cliente) );
var_dump( empty($cliente1) );
var_dump( empty($cliente2) );
var_dump( empty($cliente3) );

echo "<br>";

//Isset sirve para saber si un array o un atributo de este esta definido:
var_dump( isset($cliente) );
var_dump( isset($cliente1) );
var_dump( isset($cliente2) );
var_dump( isset($cliente3) );
var_dump( isset($cliente3["nombre"]) );
//Tambien funciona con arrays indexados:
var_dump( isset($cliente2[2]) );

include 'includes/footer.php';
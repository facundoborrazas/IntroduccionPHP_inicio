<?php include 'includes/header.php';

//En estos arrays asociativos se accede a la informacion a traves de el nombre de la propiedad en vez de un indice
$cliente = [
    "nombre" => "Facundo",
    "edad" => 22,
    "informacion" => [
        "tipo_cliente" => "Premium"
    ]
];

//Snippet para ver el array:
echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<br>";

echo $cliente["nombre"];

echo "<br>";
//Si asignamos un valor a un atributo que no existe en el array, PHP lo va a agregar
$cliente["cuadro"] = "Peñarol";
//Snippet para ver el array:
echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<br>";
//Si asignamos un valor a un atributo que ya existe en el array, PHP lo va a sustituir
$cliente["informacion"]["tipo_cliente"] = "Nivel 2";
//Snippet para ver el array:
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';